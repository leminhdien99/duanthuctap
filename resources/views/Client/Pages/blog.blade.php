@extends('Client.layout.master')
@section('main')
    <main class="main">
        <div class="page-header mt-30 mb-75">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Tin Tức </h1>
                            <div class="breadcrumb">
                                <a href="#" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Tin mới mỗi ngày
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="shop-product-fillter mb-50">
                        <div class="totall-product">
                            <h2>
                                <img src="{{asset('assets/imgs/theme/icons/category-1.svg')}}" alt="shop"/>
                                Bản Tin Nổi Bật
                            </h2>
                        </div>
                    </div>

                    <div class="loop-grid loop-big">
                        <div class="row">
                            <x-client.pages.blog></x-client.pages.blog>
                        </div>
                    </div>

                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection