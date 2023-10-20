<?php
namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;

class ContinueRegister extends Component
{
    public $code;
    public $member;

    protected $rules = [
        'code' => 'required|max:13'
    ];

    public function verifyMember()
    {
        $this->validate();
        $this->member = Member::whereUid((int)$this->code)->first();
        if ($this->member):
            to_route('register.continue', $this->member->id);
        endif;
        // $this->toast('Membro da igreja não encontrado..', 'error', 5000);
    }

    public function render()
    {
        return view('livewire.member.continue-register')->with('member', $this->member);
    }
}
