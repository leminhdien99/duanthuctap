<?php

namespace App\View\Components\client\pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class policy extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.pages.policy');
    }
}
