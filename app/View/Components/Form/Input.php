<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{

    public $icon;
    public $iconPosition;
    public $type;
    public $name;
    public $placeholder;
    public $size;
    public $label;

    public function __construct($type, $name, $placeholder, $size, $icon = "", $iconPosition = "", $label = "")
    {
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
