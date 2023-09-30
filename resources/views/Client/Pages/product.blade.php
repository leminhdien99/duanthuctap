@extends('Client.index')
@section('main')
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">

                        <x-client.pages.product></x-client.pages.product>

                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab seven-->
            </div>
            <!--End tab-content-->
        </div>
    </section>
@endsection