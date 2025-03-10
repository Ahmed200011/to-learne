<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alers extends Component
{
    public $color;
    public $size;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct($color="def", $size='def', $message='def')
    {
        $this->color = $color;
        $this->size = $size;
        $this->message = $message;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alers');
    }
}
