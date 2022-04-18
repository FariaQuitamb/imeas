<?php
namespace App\Http\Livewire\Member;

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
    }

    public function render()
    {
        return view('livewire.member.continue-register');
    }
}
