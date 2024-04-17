<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css\style.css" />
        <script type="text/javascript" src="js\script.js"></script>
    </head>

    <body>
        <!--Content-->
        <div id="content">
            <div class="d-flex justify-content-center m-5">
                <form class="row g-1" action="trangchu.php?do=dangky_xuly" method="post">
                    <div class="flex justify-center items-center text-center px-5 border-bottom">
                        <h1>Đăng ký</h1>
                    </div>
                    <div class="flex justify-content-start mt-2">
                        <div class="mb-3">
                            <label for="txt_TenND" class="form-label">Tên người dùng</label>
                            <input type="text" class="form-control"  placeholder="Nguyễn Văn A" id="txt_TenND" name="HoVaTen">
                        </div>
                        <div class="mb-3">
                            <label for="txt_TenDN" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="txt_TenDN" name="TenDangNhap">
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
                            <input type="checkbox" class="form-check-input" id="cbo_DK" name="DieuKhoan">
                            <label class="form-check-label" for="cbo_DK">
                                Đồng ý với <a class="link-success" href="#">điều khoản</a> của chúng tôi.
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-center m-3 px-5">
                        <input type="submit" class="btn btn-outline-dark rounded-pill" id="btn_login" value="Đăng ký">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>