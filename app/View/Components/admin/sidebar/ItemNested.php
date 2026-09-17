<?php

namespace App\View\Components\Admin\Sidebar; // Note: Capitalized namespace is standard

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemNested extends Component // Note: PascalCase class names are standard
{
    public $title;

    public $icon;

    public $active;

    /**
     * Pass the parameters into the constructor and set default values here.
     */
    public function __construct($title = '', $icon = '', $active = false)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->active = $active;
    }

    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar.item-nested');
    }
}
