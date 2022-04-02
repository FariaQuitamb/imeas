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

    public $provinces;
    public $counties;

    public function savePersonalInformation()
    {
        $this->validate([
            'avatar' => 'image|max:1024*4',
        ]);
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
