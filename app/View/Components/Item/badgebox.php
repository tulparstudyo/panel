<?php

namespace App\View\Components\Item;

use Illuminate\View\Component;

class badgebox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $style;
    public $title;
    public $description;
    public $icon;
    public $value;
    public function __construct($style, $title, $description, $value, $icon)
    {
        $this->style = $style;
        $this->title = $title;
        $this->description = $description;
        $this->json = $value;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item.badgebox');
    }
}
