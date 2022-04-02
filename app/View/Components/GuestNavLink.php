<?php
namespace App\View\Components;

use Illuminate\View\Component;

class GuestNavLink extends Component
{
    public function __construct(public $active)
    {
        $this->active = $active;
    }

    public function render()
    {
        return view('components.guest-nav-link');
    }
}
