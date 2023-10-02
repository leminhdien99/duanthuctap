@extends('client.layout.master')
@php
    $title1 = "Giới thiệu";
@endphp
@section('main')
<main class="main pages">
    <x-client.pages :title="$title1"></x-client.pages>
    <div class="page-content pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="row align-items-center mb-50">
                        <div class="col-lg-6">
                            <img src="assets/imgs/page/about-1.png" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" />
                        </div>
                        <div class="col-lg-6">
                            <div class="pl-25">
                                <h2 class="mb-30">Chào mừng bạn đến với cửa hàng của chúng tôi</h2>
                                <p class="mb-25">Món ăn không chỉ được chú trọng đến chất lượng mà các đầu bếp còn trang trí rất công phu tỉ mỉ. Nhìn vào đĩa cơm bạn sẽ cảm nhận được nét đẹp tinh tế và khi đưa lên miệng thưởng thức sẽ nhớ mãi một hương vị đặc biệt khó quên.
                                    Ngoài ăn tại quán bạn cũng có thể gọi ship mang đến công ty, cơ quan văn phòng của mình. Cơm được đóng cẩn thận trong hộp giấy nên sẽ nhận được một suất cơm nóng hổi ngon lành.</p>
                                <p class="mb-50">Đến với cửa hàng chúng tôi bạn sẽ trải nghệm được tất cả các món ăn ngon mang hương vị Việt không chỉ món ăn không chỉ ngon mà còn được trình bày đẹp mắt. Ngoài ra, quán cũng sở hữu không gian sang trọng, sạch sẽ với tông màu vàng ấm cúng làm chủ đạo.</p>
                                <div class="carausel-3-columns-cover position-relative">
                                    <div id="carausel-3-columns-arrows"></div>
                                    <div class="carausel-3-columns" id="carausel-3-columns">
                                        <img src="assets/imgs/blog/blog-1.png" alt="" />
                                        <img src="assets/imgs/blog/blog-11.png" alt="" />
                                        <img src="assets/imgs/blog/blog-6.png" alt="" />
                                        <img src="assets/imgs/blog/blog-5.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="text-center mb-50">
                        <h2 class="title style-3 mb-40">Chúng tôi cung cấp những gì?</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
                                    <h4>Giá & ưu đãi tốt</h4>
                                    <p>Giá cả hợp lí, phải chăng. Mời bạn mua & đặt trải nghiệm ngay</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
                                    <h4>An toàn & vệ sinh</h4>
                                    <p>Cửa hàng chúng tôi rất đặc biệt quan tâm đến vấn đề sức khỏe và chất lượng của sản phẩm</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />
                                    <h4>Giao hàng miễn phí 5km</h4>
                                    <p>Không lo ngại về phí ship ở đây chúng tôi sẽ hỗ trợ bạn hết mức có thể. Hãy yên tâm và trải nghiệm bạn nhé</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />
                                    <h4>Trả lại dễ dàng</h4>
                                    <p>Đơn hàng gặp vấn đề gì hãy liên hệ với chúng tôi và hoàn về chúng tôi sẽ giải quyết đơn hàng cho bạn.</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-5.svg" alt="" />
                                    <h4>Sự hài lòng 100%</h4>
                                    <p>Rất nhiều khách hàng đã ăn và trải nghiệm ở cửa hàng chúng tôi, đa phần sẽ rất thich và sẽ quay lại ủng hộ</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
                                    <h4>Ưu đãi hàng ngày tuyệt vời</h4>
                                    <p>Ưu đãi mỗi ngay giảm giá 20% có voucher hãy sử dụng ngay nào!</p>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="row align-items-center mb-50">
                        <div class="row mb-50 align-items-center">
                            <div class="col-lg-7 pr-30">
                                <img src="assets/imgs/blog/blog-2.png" alt="" class="mb-md-3 mb-lg-0 mb-sm-4" />
                            </div>
                            <div class="col-lg-5">
                                <h4 class="mb-20 text-muted">Món ăn</h4>
                                <h1 class="heading-1 mb-40">Món ăn đa dạng</h1>
                                <p class="mb-30">Món ăn đa dạng phong phú bạn có thể gọi theo từng món hoặc combo để tiết kiệm chi phí. Tất cả những món ăn đều được chế biến dưới bàn tay khéo léo và chuyên nghiệp của các đầu bếp có kinh nghiệm..</p>
                                <p>Món ăn không chỉ được chú trọng đến chất lượng mà các đầu bếp còn trang trí rất công phu tỉ mỉ. Nhìn vào đĩa cơm bạn sẽ cảm nhận được nét đẹp tinh tế và khi đưa lên miệng thưởng thức sẽ nhớ mãi một hương vị đặc biệt khó quên.</p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
        <section class="container mb-50 d-none d-md-block">
            <div class="row about-count">
                <div class="col-lg-1-5 col-md-6 text-center mb-lg-0 mb-md-5">
                    <h1 class="heading-1"><span class="count">12</span>+</h1>
                    <h4>Sản phẩm</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">36</span>+</h1>
                    <h4>Khách hàng</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">58</span>+</h1>
                    <h4>Giao hàng</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">24</span>+</h1>
                    <h4>Loại hàng</h4>
                </div>
                <div class="col-lg-1-5 text-center d-none d-lg-block">
                    <h1 class="heading-1"><span class="count">26</span>+</h1>
                    <h4>Giảm giá</h4>
                </div>
            </div>
        </section>

    </div>
</main>
@endsection

