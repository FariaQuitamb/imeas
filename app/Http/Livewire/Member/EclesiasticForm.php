<?php
namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Models\Classe;
use App\Models\Ministry;
use App\Models\Department;
use App\Models\Eclesiastic;

class EclesiasticForm extends Component
{
    // Values using during mount method
    public $classes;
    public $departments;
    public $ministries;
    public $howBecome;
    public $member;

    // Variables of Eclesiastic Form
    public $classe;
    public $startat;
    public $how;
    public $department;
    public $ministry;
    public $baptized;

    protected $rules = [
        'startat' => ['required', 'integer'],
        'how' => 'required',
        'classe' => 'required',
        'department' => 'required',
        'ministry' => 'required',
        'baptized' => 'required'
    ];

    public function mount()
    {
        $this->howBecome = [
            'Família',
            'Evangelismo',
            'Iniciativa própria'
        ];
        $this->ministries = Ministry::orderBy('name', 'ASC')->get();
        $this->classes = Classe::orderBy('name', 'ASC')->get();
        $this->departments = Department::orderBy('name', 'ASC')->get();
    }

    public function submit()
    {
        $this->validate();
        $data = [
            'startat' => $this->startat,
            'how' => $this->how,
            'member_id' => $this->member->id,
            'classe_id' => $this->classe,
            'department_id' => $this->department,
            'baptized' => $this->baptized == 'S' ? 1 : 0

        ];

        if ($this->member->eclesiastic == null) {
            $this->member->eclesiastic()->create($data);
            to_route('register.continue', $this->member->id);
        }
        to_route('register.continue', $this->member->id);
    }

    public function render()
    {
        return view('livewire.member.eclesiastic-form');
    }
}
