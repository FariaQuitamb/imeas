<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;

class Create extends Component
{
    use WithFileUploads;

    public $avatar;
    public $province;
    public $name;
    public $phone;
    public $fathername;
    public $mothername;
    public $birthdate;
    public $genre;
    public $county;

    public $provinces;
    public $counties;

    protected $rules = [
        'avatar' => 'image|max:1024*4',
        'name' => 'required|max:45|min:6',
        'phone' => 'required|numeric|size:12',
        'fathername' => 'required',
        'mothername' => 'required',
        'birthdate' => 'required',
        'genre' => 'required|max:1'
    ];

    protected $validationAttributes = [
        'fathername' => 'nome do pai',
        'mothername' => 'nome da mãe',
        'birthdate' => 'data de nascimento'
    ];

    public function savePersonalInformation()
    {
        $validatedData = $this->validate();
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
