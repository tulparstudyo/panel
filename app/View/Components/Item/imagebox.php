<?php

namespace App\View\Components\Item;

use Illuminate\View\Component;

class imagebox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $style;
    public $title;
    public $description;
    public $src;
    public function __construct($style, $title, $description, $src)
    {
        $this->style = $style;
        $this->title = $title;
        $this->description = $description;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item.imagebox');
    }
}
