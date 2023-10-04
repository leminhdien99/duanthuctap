@php
    $list = [
        [
            'name'=> 'Cơm gà',
            'img' => 'assets/imgs/shop/cat-1.png',
            'quantity'=>'12'
        ],
        [
            'name'=> 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-2.png',
            'quantity'=>'14'
        ],
        [
            'name'=> 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-3.png',
            'quantity'=>'15'
        ],
        [
            'name'=> 'Cơm chiên',
            'img' => 'assets/imgs/shop/cat-4.png',
            'quantity'=>'15'
        ],
        [
            'name'=> 'Cơm gà',
            'img' => 'assets/imgs/shop/cat-5.png',
            'quantity'=>'12'
        ],
        [
            'name'=> 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-6.png',
            'quantity'=>'14'
        ],
        [
            'name'=> 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-7.png',
            'quantity'=>'15'
        ],
        [
            'name'=> 'Cơm chiên',
            'img' => 'assets/imgs/shop/cat-8.png',
            'quantity'=>'15'
        ],
        [
            'name'=> 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-9.png',
            'quantity'=>'15'
        ],
        [
            'name'=> 'Cơm chiên',
            'img' => 'assets/imgs/shop/cat-10.png',
            'quantity'=>'15'
        ],
    ];
@endphp
@foreach($list as $item)
    <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
        <figure class="img-hover-scale overflow-hidden">
            <a href="shop-grid-right.html"><img src="{{$item['img']}}" alt=""/></a>
        </figure>
        <h6><a href="shop-grid-right.html">{{$item['name']}}</a></h6>
        <span>{{$item['quantity']}}</span>
    </div>
    @endforeach</section><!--End category slider-->
