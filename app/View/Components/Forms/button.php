<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $value;
    public $name;
    public $type;
    public function __construct($class, $type, $name, $value)
    {
        $this->class = $class;
        $this->value = $value;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.button');
    }
}
