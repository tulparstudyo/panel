<?php

namespace App\View\Components\Item;

use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $style;
    public $title;
    public $description;

    public function __construct($style, $title, $description)
    {
        $this->style = $style;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item.alert');
    }
}
