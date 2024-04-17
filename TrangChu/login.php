<div class="d-flex justify-content-center m-5">
    <form class="row g-1" action="trangchu.php?do=dangnhap_xuly" method="post">
        <div class="flex justify-center items-center text-center px-5">
            <h1>Đăng nhập</h1>
        </div>
        <div class="flex justify-content-start mt-2">
            <div class="mb-3">
                <label for="txt_TenDN" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="TenDangNhap">
            </div>
            <div class="mb-3">
                <label for="txt_MK" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" aria-describedby="passwordHelpBlock" name="MatKhau">
            </div>
            <a class="link text-dark" href="">Quên mật khẩu</a>
        </div>
        <div class="flex justify-center items-center text-center my-3">
            <input type="submit" class="btn btn-outline-dark rounded-pill" value="Đăng nhập">
        </div>
        <div class="flex justify-center items-center text-center mt-3 border-top">
            Chưa có tài khoản? <a class="link" href="trangchu.php?do=register">Đăng ký</a> ngay!
        </div> 
    </form>
</div>