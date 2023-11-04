@foreach($cart as $item)
    <tr >
        <td class="custome-checkbox pl-30"></td>
        <input type="hidden" name="id_product" id=" id_product" value="{{$item->id}}">
        <td class="image product-thumbnail"><img src="{{ asset('images/products/' . $item->images) }}" alt="#">
        </td>
        <td class="product-des product-name">
            <h6 class="mb-5">
                <a class="product-name mb-10 text-heading" href="shop-product-right.html">{{$item->name}}</a>
            </h6>
            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    <div class="product-rating" style="width:90%"></div>
                </div>
                <span class="font-small ml-5 text-muted"> (4.0)</span>
            </div>
        </td>
        <td class="price" data-title="Price">
            <h4 class="text-body">{{number_format($item->price)}}đ</h4>
        </td>
        <td class="product-quantity">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary decrease-btn" type="button">-</button>
                </div>
                <input type="number" class="form-control form-control-sm quantity-input" placeholder="1" readonly value="{{$item['quantity']}}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary increase-btn" type="button">+</button>
                </div>
            </div>
        </td>

        <td class="price" data-title="Price">
            <h4 class="text-brand" id="total">{{number_format($item->total)}}đ</h4>
        </td>
        <td class="action text-center" data-title="Remove">
            <a href="{{route('deleteCart',$item->id)}}" class="text-body"><i class="fi-rs-trash"></i></a></td>
    </tr>
@endforeach
@section('js')
    <script>
        $(document).ready(function() {
            $('#decrease_quantity_btn').click(function (){
                var quantity = $('#quantify').val();
                var id_product = $('#id_product').val();
                $.ajax({
                    url:"{{route('cart.quantity.update')}}",
                    method:"GET",
                    data:{quantity, id_product},
                    success: function (data){
                        console.log(data);
                    },
                    error: function (response){
                        console.log(response);
                    }
                });
            });
            $('#increase_quantity_btn').click(function (){
                var quantity = $('#quantify').val();
                var id_product = $('#id_product').val();
                $.ajax({
                    url:"{{route('cart.quantity.update')}}",
                    method:"GET",
                    data:{quantity, id_product},
                    success: function (data){
                        console.log(data);
                        if(data.product_price){
                            $('#product_price').html(data.product_price);
                        }
                    },
                    error: function (response){
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection

