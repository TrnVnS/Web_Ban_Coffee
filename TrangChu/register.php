<div class="d-flex justify-content-center m-5">
    <form class="row g-1" action="index.php?do=dangky_xuly" method="post">
        <div class="flex justify-center items-center text-center px-5 border-bottom">
            <h1>Đăng ký</h1>
        </div>
        <div class="flex justify-content-start mt-2">
            <div class="mb-3">
                <label for="txt_TenND" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" placeholder="Nguyễn Văn A" name="HoVaTen">
            </div>
            <div class="mb-3">
                <label for="txt_TenDN" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="TenDangNhap">
            </div>
            <div class="mb-3">
                <label for="txt_MK" class="form-label">Mật khẩu</label>
                <input type="password" id="txt_MK" class="form-control" aria-describedby="passwordHelpBlock" name="MatKhau">
            </div>
            <div class="mb-3">
                <label for="txt_MK" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" id="txt_MK" class="form-control" aria-describedby="passwordHelpBlock" name="XNMatKhau">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="DieuKhoan">
                <label class="form-check-label" for="cbo_DK">
                    Đồng ý với <a class="link-success" href="#">điều khoản</a> của chúng tôi.
                </label>
            </div>
        </div>
        <div class="flex justify-center items-center text-center m-3 px-5">
            <input type="submit" class="btn btn-outline-dark rounded-pill" value="Đăng ký">
        </div>
    </form>
</div>