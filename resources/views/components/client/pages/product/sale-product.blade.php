@foreach ($product as $item)

<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
    <div class="product-cart-wrap mb-30">
        <div class="product-img-action-wrap">
            @php
                $image = $item->images;
                $imgArray = explode(",", $image); // Chia chuỗi thành một mảng các phần tử
                $firstElement = $imgArray[0];
            @endphp
            <div class="product-img product-img-zoom">
                <a href="{{route('details',$item->slug)}}">
                    <div class="image">
                        <img src="{{ asset('images/products/' . $firstElement) }}" style="width: 185px; height: 185px" alt="shop"/>
                    </div>
                </a>
            </div>
            <div class="product-badges product-badges-position product-badges-mrg">
                <span class="hot">
                 @if ($item->sale_price)
                        @php
                            $sale = $item->price - $item->sale_price;
                        @endphp
                        <span>Giảm {{ number_format($sale) }}đ</span> <!-- Hiển thị giá giảm -->
                    @else
                        Nóng
                    @endif
                </span>
            </div>
        </div>
        <div class="product-content-wrap">
            <div class="product-category">
                <a href="shop-grid-right.html">Snack</a>
            </div>
            <h2><a href="{{route('details',$item->slug)}}">{{$item->name}}</a></h2>
            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    <div class="product-rating" style="width: 90%"></div>
                </div>
                <span class="font-small ml-5 text-muted"> (4.0)</span>
            </div>
            <div class="product-card-bottom d-flex justify-content-between align-items-center">
                <div class="product-price">
                    <div class="product-price mr-5">
                        @if ($item->sale_price)
                            <span>{{ number_format($item->sale_price) }}đ</span> <!-- Hiển thị giá giảm -->
                        @else
                            <span>{{ number_format($item->price) }}đ</span> <!-- Hiển thị giá bán -->
                        @endif
                    </div>
                </div>
                <div class="add-cart">
                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach