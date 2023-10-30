<div class="card">
    <div class="p-2 mb-2 bg-dark text-center">
        <h5 style="color: white">Cập nhật Tài Khoản</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <form method="POST" action="" id="update_profile" enctype="multipart/form-data" class="contactForm">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="label" for="name">Họ và Tên</label>
                            <input type="text" class="form-control " name="fullname" value="" id="fullname" placeholder="Name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="label" for="email">Địa chỉ Email</label>
                            <input type="email" class="form-control" name="email" value="" disabled id="email" placeholder="Email">
                        </div>
                    </div>
                    <br/>

                    <div class="mb-3">
                        <label for="gender" class="label">Giới tính</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="Nam">
                            <label class="label" for="male">Nam</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="Nữ">
                            <label class="label" for="female">Nữ</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="phone-number" class="label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone-number" name="phone" value="" placeholder="Nhập số điện thoại của bạn">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="street-address" class="label">Địa chỉ</label>
                        <input type="text" class="form-control" id="street-address" name="address" value="" placeholder="Nhập địa chỉ của bạn">
                    </div>

                    <div class="mb-3">
                        <label for="imageUpload" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control " value="" name="image" id="imageUpload" accept="image/*">
                        <div class="d-flex justify-content-center align-items-center" style="max-width: 190px; max-height: 190px;  margin: 15px auto;">
                            <div id="imagePreview"></div>
                        </div>
                    </div>

                    <div class="btn-group" role="group">
                        <button class="btn btn-success" type="submit">Cập nhật</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("imageUpload").addEventListener("change", function (event) {
        var imagePreview = document.getElementById("imagePreview");
        imagePreview.innerHTML = "";

        var files = event.target.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement("img");
                img.setAttribute("src", e.target.result);
                img.setAttribute("class", "img-thumbnail mt-3 thumbnail-image");
                imagePreview.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    });
</script>
