<?php
namespace App\View\Components\Assets;

use Illuminate\View\Component;

class InputError extends Component
{
    public function __construct(public $for, public $message)
    {
        $this->for = $for;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.assets.input-error');
    }
}
