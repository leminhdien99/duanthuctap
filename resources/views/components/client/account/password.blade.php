<div class="card">
    <div class="p-2 mb-2 bg-dark text-center">
        <h5 style="color: white">Đổi mật khẩu</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <form method="POST" action="" id="update_password" enctype="multipart/form-data" class="contactForm">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="old-password" class="form-label">Nhập Mật khẩu cũ</label>
                        <input type="password" class="form-control" value="" id="old-password" name="current_password" placeholder="Nhập mật khẩu cũ của bạn">
                    </div>

                    <div class="mb-3">
                        <label for="new-password" class="form-label">Nhập Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new-password" name="new_password" placeholder="Nhập mật khẩu mới của bạn">
                    </div>

                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Xác nhận mật khẩu mới</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Nhập lại mật khẩu mới của bạn">
                    </div>

                    <div class="btn-group" role="group">
                        <button class="btn btn-success" type="submit">Đổi mật khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showPassword(inputId, checkboxId) {
        var input = document.getElementById(inputId);
        var checkbox = document.getElementById(checkboxId);

        if (checkbox.checked) {
            input.type = "text";
        }
        else {
            input.type = "password";
        }
    }
</script>