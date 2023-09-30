<div class="col-lg-4">
    <div class="border p-md-4 cart-totals ml-30">
        <div class="table-responsive">
            <table class="table no-border">
                <tbody>
                @php
                    $dateCheckOut=[
                         [
                             'title'=>'Tổng',
                             'sumtotol'=>200000,
                             ],
                              [
                              'title'=>'Phí ship',
                             'sumtotol'=>0,
                             ],
                             [
                              'title'=>'Thuế',
                             'sumtotol'=>0,
                             ],
                             [
                              'title'=>'Tổng Cộng',
                             'sumtotol'=>200000,
                             ],

                    ];


                @endphp

                @foreach($dateCheckOut as $key=>$item)
                    <tr>
                        <td class="cart_total_label">
                            <h6 class="text-muted">{{$item['title']}} </h6>
                        </td>
                        <td class="cart_total_amount">
                            <h4 class="text-brand text-end">{{number_format($item['sumtotol'])}} đ </h4>
                        </td>
                    </tr>
                    @if($key==2)
                        <tr>
                            <td scope="col" colspan="2">
                                <div class="divider-2 mt-10 mb-10"></div>
                            </td>
                        </tr>
                    @endif
                @endforeach


                </tbody>
            </table>
        </div>
        <a href="#" class="btn mb-20 w-100">Tiếp tục thanh toán<i class="fi-rs-sign-out ml-15"></i></a>
    </div>
</div>