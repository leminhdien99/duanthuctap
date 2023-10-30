@foreach ($product as $item)
    <div class="col-lg-1-5 col-md-4 col-6 col-sm-6">
        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="product-img-action-wrap">
                @php
                $image = $item->images;
                $imgArray = explode(",", $image); // Chia chuỗi thành một mảng các phần tử
                $firstElement = $imgArray[0];
                @endphp
                <div class="product-img product-img-zoom mb-1">
                    <a href="{{route('details',$item->slug)}}">
                            <div class="image">
                                <img src="{{ asset('images/products/' . $firstElement) }}" style="min-width: 228px; height: 228px" alt="shop"/>
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
                <h2><a href="{{route('details',$item->slug)}}">{{$item->name}}</a></h2>
                <div class="product-rate-cover">
                    <div class="product-rate d-inline-block">
                        <div class="product-rating" style="width: 90%"></div>
                    </div>
                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                </div>
                <div>
                    <span class="font-small text-muted">By <a href="vendor-details-1.html">{{$item->name}}</a></span>
                </div>
                <div class="product-card-bottom">
                    <div class="product-price">
                        @if ($item->sale_price)
                            <span>{{ number_format($item->sale_price) }}đ</span> <!-- Hiển thị giá giảm -->
                        @else
                            <span>{{ number_format($item->price) }}đ</span> <!-- Hiển thị giá bán -->
                        @endif
                    </div>
                    <div class="add-cart">
                        <a class="add" href="{{route('listCart')}}"><i class="fi-rs-shopping-cart mr-5"></i>Thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


