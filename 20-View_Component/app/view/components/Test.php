<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     */

    public $lable;
    public $name;
    public $placeholder;

    public function __construct($lable,$name,$placeholder='')
    {
       $this->lable = $lable;
       $this->name = $name;
       $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
