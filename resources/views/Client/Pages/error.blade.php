@extends('Client.layout.Master')

@section('title')
    404 - NOT FOUND
@endsection
@section('main')
    <main class="main page-404">
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                        <p class="mb-20"><img src="assets/imgs/page/page-404.png" alt="" class="hover-up" /></p>
                        <h1 class="display-2 mb-30">Không Tìm Thấy Trang</h1>
                        <p class="font-lg text-grey-700 mb-30">
                        <p>{{session('error') ??''}}.</p>
                            Truy cập<a href="{{route('index')}}"> <span> Trang Chủ</span></a> hoặc <a href="{{route('contact')}}"><span>Liên Hệ</span></a> với chúng tôi vấn đề này.
                        </p>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Tìm Kiếm ..." />
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                        <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="{{route('index')}}"><i class="fi-rs-home mr-5"></i> Quay Lại Trang Chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('styles')
@endpush
@push('script')
@endpush