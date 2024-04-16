<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
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
                <div>
                    <div class="flex justify-center items-center text-center px-5">
                        <h1>Đăng nhập</h1>
                    </div>
                    <div class="flex justify-content-start">
                        <div class="mb-3">
                            <label for="txt_TenDN" class="form-label">Tên đăng nhập</label>
                            <input type="email" class="form-control" id="txt_TenDN">
                        </div>
                        <div class="mb-3">
                            <label for="txt_MK" class="form-label">Mật khẩu</label>
                            <input type="password" id="txt_MK" class="form-control" aria-describedby="passwordHelpBlock">
                        </div>
                        <a class="link text-dark" href="">Quên mật khẩu</a>
                    </div>
                    <div class="flex justify-center items-center text-center m-3 px-5">
                        <button class="btn btn-outline-dark rounded-pill" type="submit" id="btn_login">Đăng nhập</a>
                    </div>
                    <div class="flex justify-center items-center text-center mt-3 border-top">
                        Chưa có tài khoản? <a class="link" href="register.html">Đăng ký</a> ngay!
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>