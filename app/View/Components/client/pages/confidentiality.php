<?php

namespace App\View\Components\Client\pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class confidentiality extends Component
{
    /**
     * Create a new component instance.
     */
    public  $router ;
    public  $name ;
    public function __construct($router,$name)
    {
        $this->name = $name ;
        $this->router =$router;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.pages.confidentiality');
    }
}
