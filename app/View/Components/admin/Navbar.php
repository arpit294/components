<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $navbarDetached;

    public $containerNav;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navbarDetached = false;
        $this->containerNav = 'container-fluid';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.navbar');
    }
}