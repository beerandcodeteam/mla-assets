<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $variation;
    public $size;
    public $icon;
    public $iconPosition;
    public $text;

    public function __construct($type, $variation, $size, $text = "", $icon = "", $iconPosition = "")
    {
        $this->type = $type;
        $this->variation = $variation;
        $this->size = $size;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
