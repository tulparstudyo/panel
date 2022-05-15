<?php

namespace App\View\Components\Item;

use Illuminate\View\Component;

class aside extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $route;
    public $icon;
    public function __construct($title, $route, $icon)
    {
        $this->title = $title;
        $this->route = $route;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item.aside');
    }
}
