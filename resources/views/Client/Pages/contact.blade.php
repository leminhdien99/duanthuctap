@extends('client.layout.master')
@php
    $title1 = "Liên hệ";
@endphp
@section('main')
    <main class="main pages">
        <x-client.pages :title="$title1"></x-client.pages>
        <div class="page-content pt-50">

            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="contact-from-area padding-20-row-col">
                                        <h5 class="text-brand mb-10">Liên hệ</h5>
                                        <h2 class="mb-10">Hãy liên hệ với chúng tôi</h2>
                                        <p class="text-muted mb-30 font-sm">Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu*</p>
                                        @if(Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('success')}}
                                            </div>
                                        @endif
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{Session::get('error')}}
                                            </div>
                                        @endif
                                        <form action="{{route('contactFrom')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="fullname" placeholder="Tên" type="text" />
                                                        @error('fullname')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="email" placeholder="Email" type="text" />
                                                        @error('email')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="phone" placeholder="Số điện thoại" type="tel" />
                                                        @error('phone')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="address" placeholder="Địa chỉ" type="text" />
                                                        @error('address')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="textarea-style mb-30">
                                                        <textarea name="content" placeholder="Nội dung"></textarea>
                                                        @error('content')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                    <button class="submit submit-auto-width" type="submit">Gửi</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-50 d-lg-block d-none">
                                    <img class="border-radius-15 mt-50" src="assets/imgs/page/contact-2.png" alt="" />
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection