<?php

namespace App\View\Components\client\pages\product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class saleProduct extends Component
{
    public $product;
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.pages.product.sale-product');
    }
}
