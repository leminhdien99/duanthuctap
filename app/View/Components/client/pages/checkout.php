<?php

namespace App\View\Components\Client\pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkout extends Component
{
    public $total;
    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.pages.checkout');
    }
}
