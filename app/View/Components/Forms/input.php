<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class input extends Component
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
    public $label;
    public function __construct($class, $type, $name, $value, $label)
    {
        $this->class = $class;
        $this->value = $value;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
    private function validated_type($type){
        $types = ['text','number','file','checkbox','radio','email','password','textarea'];
        if(isset($types[$type])){
            return $types[$type];
        }
        return 'text';
    }
}
