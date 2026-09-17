<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Master extends Component
{
    public ?bool $isMenu;

    public function __construct($isMenu = true)
    {
        $this->isMenu = $isMenu;
    }

    public function render(): View|Closure|string
    {
        return view('components.admin.master');
    }
}
