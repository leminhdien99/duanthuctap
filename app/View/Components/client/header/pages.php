<?php

namespace App\View\Components\client\header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pages extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.header.pages');
    }
}
