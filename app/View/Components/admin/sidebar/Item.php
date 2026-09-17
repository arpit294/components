<?php

namespace App\View\Components\Admin\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public string $url;

    public string $activeClass;

    public ?string $iconClass;

    public ?string $title;

    /**
     * Create a new component instance.
     */
    public function __construct(string $url = '', string $activeClass = '', ?string $iconClass = '', ?string $title = null)
    {
        $this->url = $url;
        $this->activeClass = $activeClass;
        $this->iconClass = $iconClass;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar.item');
    }
}
