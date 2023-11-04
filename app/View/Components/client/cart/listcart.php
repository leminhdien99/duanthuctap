<?php

namespace App\View\Components\client\cart;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class listcart extends Component
{
    public $cart;
    public function __construct($cart)
    {
        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.cart.listcart');
    }
}
