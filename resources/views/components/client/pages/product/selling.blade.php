@php
    $list = [
        [
            'name'=> 'Cơm gà',
            'img' => 'assets/imgs/shop/cat-1.png',
            'price'=>'15.000đ'
        ],
        [
            'name'=> 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-2.png',
            'price'=>'15.000đ'
        ],
        [
            'name'=> 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-3.png',
            'price'=>'15.000đ'
        ],
    ];
@endphp
@foreach($list as $item)
    <article class="row align-items-center hover-up">
        <figure class="col-md-4 mb-0">
            <a href="shop-product-right.html"><img src="{{$item['img']}}" alt=""/></a>
        </figure>
        <div class="col-md-8 mb-0">
            <h6>
                <a href="shop-product-right.html">{{$item['name']}}</a>
            </h6>
            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    <div class="product-rating" style="width: 90%"></div>
                </div>
                <span class="font-small ml-5 text-muted"> (4.0)</span>
            </div>
            <div class="product-price">
                <span>{{$item['price']}}</span>
                <span class="old-price">{{$item['price']}}</span>
            </div>
        </div>
    </article>
@endforeach

