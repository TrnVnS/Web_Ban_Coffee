<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include_once "cauhinh.php";
	
	include_once "thuvien.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
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
        <!--Header-->
        <header>
            <div id="banner"></div>
            <nav class="navbar navbar-expand bg-dark">
                <div class="container justify-content-start">
                    <a class="navbar-brand ms-2" href="">
                        <img src="images/Logo.png" width="50px">
                    </a>
                    <div class="navbar" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-3">
                                <a class="nav-link active text-light" aria-current="page" href="trangchu.php?do=home">Trang chủ</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link text-light" href="trangchu.php?do=thuc_uong">Thức uống</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link text-light" href="#">Món ăn</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link text-light" href="#">Cà phê</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container justify-content-end">
                    <div class="navbar" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-light rounded-pill" href="#">
                                    <i class="bi bi-cart"></i> Giỏ hàng
                                </a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="btn btn-outline-light rounded-pill" href="#">Đăng ký</a>
                            </li>
                            <li class="nav-item ms-3 me-3">
                                <a class="btn btn-light rounded-pill" href="#">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--Content-->
        <div id="content">

            <?php
						
				$do = isset($_GET['do']) ? $_GET['do'] : "home";
						
				include $do . ".php";
			?>    
        </div>
        <!--Footer-->
        <div class="container bg-white">
            <footer class="py-4">
                <div class="row border-top py-4 my-4">
                    <div class="col-5 col-md-3 mb-3">
                        <h5>Về chúng tôi</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Trang chủ</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Cửa hàng</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Về chúng tôi</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Tuyển dụng</a></li>
                        </ul>
                    </div>

                    <div class="col-5 col-md-3 mb-3">
                        <h5>Liên hệ với chúng tôi</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-dark">
                                    <i class="bi bi-envelope"></i> : kohicoffe@gmail.com
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-dark">
                                    <i class="bi bi-facebook"></i> : fb.com/kohicoffee
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-dark">
                                    <i class="bi bi-instagram"></i> : @kohicoffee_
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-dark">
                                    <i class="bi bi-twitter-x"></i> : @_kohicoffee
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-dark">
                                    <i class="bi bi-telegram"></i> : t.me/kohicoffee
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Nhiều hơn nữa</h5>
                            <p>Đăng ký để nhận được nhiều thông tin và chương trình khuyến mãi.</p>
                            <div class="d-flex flex-column flex-sm-row w-80 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Nhập địa chỉ email...">
                                <button class="btn btn-outline-dark text-nowrap" type="button">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-2 border-top text-dark">
                    <p>© 2024 Bản quyền thuộc về Kohi Coffee.</p>
                    <div>
                        <img src="images/logotbbct.png" width="100px">
                        <img src="images/logodmca.png" width="75px">
                    </div>
                </div>
            </footer>
        </div>
    </body>

</html>