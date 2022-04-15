<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Models\Classe;
use App\Models\Departament;
use App\Models\Ministry;

class EclesiasticForm extends Component
{
    public $classes;
    public $departments;
    public $ministries;

    public function mount()
    {
        $this->ministries = Ministry::orderBy('name', 'ASC')->get();
        $this->classes = Classe::orderBy('name', 'ASC')->get();
        $this->departments = Departament::orderBy('name', 'ASC')->get();
    }

    public function render()
    {
        return view('livewire.member.eclesiastic-form');
    }
}
