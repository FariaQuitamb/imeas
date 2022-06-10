<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use App\Models\Member;

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
        session(['member_registred' => $member->uid]);
        // $this->toast('Informações pessoais registadas, continue...', 'success', 5000);
    }

    public function getProvices()
    {
        $response = Http::get('https://www.vacina.gov.ao/services/api/localization/province');
        if ($response->ok()) {
            return $response->json();
        }
    }

    public function getCounties($province)
    {
        $response = Http::get('https://www.vacina.gov.ao/services/api/localization/province/' . $province . '/county');
        if ($response->ok()) {
            return $response->json();
        }
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
