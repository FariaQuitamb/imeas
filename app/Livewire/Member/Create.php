<?php
namespace App\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use App\Models\Member;
use Illuminate\Support\Facades\Cache;

class Create extends Component
{
    use WithFileUploads;

    public $avatar;
    public $province;
    public $name;
    public $phone;
    public $father;
    public $mother;
    public $birthdate;
    public $genre;
    public $county;

    public $provinces;
    public $counties;

    public $memberRegistred;

    protected $rules = [
        'avatar' => 'image',
        'name' => 'required|max:45|min:6',
        'phone' => 'required|max:12',
        'father' => 'required',
        'mother' => 'required',
        'birthdate' => 'required',
        'genre' => 'required|max:1',
        'province' => 'required|numeric',
        'county' => 'required'
    ];

    protected $validationAttributes = [
        'father' => 'nome do pai',
        'mother' => 'nome da mãe',
        'birthdate' => 'data de nascimento'
    ];

    public function savePersonalInformation()
    {
        $this->validate();
        $uploaded = $this->avatar->storePubliclyAs('avatars', $this->name);

        $data = [
            'avatar' => $uploaded,
            'name' => $this->name,
            'uid' => strtotime('now'),
            'phone' => trim($this->phone),
            'father' => $this->father,
            'mother' => $this->mother,
            'birthdate' => $this->birthdate,
            'genre' => $this->genre,
            'province' => $this->province,
            'county' => $this->county
        ];

        $member = Member::create($data);
        to_route('register.continue', $member->id);
        session(['member_registred' => $member->uid]);
        $this->toast('Informações pessoais registadas, continue...', 'success', 5000);
    }

    public function getProvices()
    {
        $response = Http::withToken(env('REDIV_TOKEN'))->get(env('REDIV_URL') . 'preload');
        if ($response->ok()) {
            $body = $response->json();
            dd($body);
        }

        return $provinces;
    }

    public function getCounties($province)
    {
        $counties = Cache::rememberForever('counties', function () {
            $response = Http::get(env('REDIV_URL ') . $province . '/county');
            if ($response->ok()) {
                return $response->json_decode();
            }
        });
        return $counties;
    }

    public function mount()
    {
        $this->provinces = $this->getProvices();
    }

    public function render()
    {
        if ($this->province) {
            $this->counties = $this->getCounties($this->province);
        }
        return view('livewire.member.create');
    }
}
