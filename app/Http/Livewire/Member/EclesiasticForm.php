<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;

class EclesiasticForm extends Component
{
    public $classes;
    public $organismos;

    public function render()
    {
        return view('livewire.member.eclesiastic-form');
    }
}
