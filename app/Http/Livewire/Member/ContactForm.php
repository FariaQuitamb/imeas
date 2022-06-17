<?php
namespace App\Http\Livewire\Member;

use App\Models\Course;
use App\Models\Degree;
use App\Models\Occupation;
use Livewire\Component;

class ContactForm extends Component
{
    public $occupations;
    public $courses;
    public $degrees;

    public $occupation;
    public $course;
    public $degree;

    protected $rules = [
        'courses.*' => 'required',
        'degree' => 'required',
        'occupation' => 'required',
    ];

    public function submit()
    {
        $data = $this->validate();
        dd($data);
    }

    public function mount()
    {
        $this->occupations = Occupation::all();
        $this->degrees = Degree::all();
        $this->courses = Course::all();
    }

    public function render()
    {
        return view('livewire.member.contact-form');
    }
}
