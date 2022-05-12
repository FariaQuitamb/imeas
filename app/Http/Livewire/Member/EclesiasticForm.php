<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Models\Classe;
use App\Models\Departament;
use App\Models\Ministry;

class EclesiasticForm extends Component
{
    // Values using during mount method
    public $classes;
    public $departments;
    public $ministries;
    public $howBecome;

    // Variables of Eclesiastic Form
    public $classe;
    public $startat;
    public $how;
    public $department;
    public $ministry;
    public $baptized;

    public function mount()
    {
        $this->howBecome = [
            'Família',
            'Evangelismo',
            'Iniciativa própria'
        ];
        $this->ministries = Ministry::orderBy('name', 'ASC')->get();
        $this->classes = Classe::orderBy('name', 'ASC')->get();
        $this->departments = Departament::orderBy('name', 'ASC')->get();
    }

    public function render()
    {
        return view('livewire.member.eclesiastic-form');
    }
}
