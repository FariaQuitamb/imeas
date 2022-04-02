<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $avatar;

    public function savePersonalInformation()
    {
        $this->validate([
            'avatar' => 'image|max:1024*4',
        ]);
    }

    public function render()
    {
        return view('livewire.member.create');
    }
}
