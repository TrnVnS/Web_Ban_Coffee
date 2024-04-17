<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "cauhinh.php";
include_once "thuvien.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Trang quản lý</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css\style.css" />
    <script type="text/javascript" src="js\script.js"></script>
</head>

<body>
    <!--Header-->
    <header>
        <div id="banner"></div>
        <nav class="navbar navbar-expand bg-dark">
            <div class="container justify-content-start">
                <a class="navbar-brand ms-2" href="#">
                    <img src="images/Logo.png" width="50px">
                </a>
                <div class="text-light ms-3" style="font-size: 20pt;">Trang quản lý</div>
            </div>
            <div class="container justify-content-end">
                <div class="navbar" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                            if (!isset($_SESSION['MaND'])) {
                                echo '<li class="nav-item ms-3">
                                        <a class="btn btn-outline-light rounded-pill" href="admin.php?do=register">Đăng ký</a>
                                    </li>
                                    <li class="nav-item ms-3 me-3">
                                        <a class="btn btn-light rounded-pill" href="admin.php?do=login">Đăng nhập</a>
                                    </li>';
                            }
                            else if(isset($_SESSION['MaND'])) {
                                echo '<li class="nav-item ms-3">
                                    <a class="btn btn-outline-light rounded-pill dropdown-toggle" href="register.html" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-fill-gear"></i>
                                        Tài khoản
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                        <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item ms-3 me-3">
                                    <a class="btn btn-outline-light rounded-pill" href="login.html">Đăng xuất</a>
                                </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Content-->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <nav class="navbar mt-3">
                        <div class="container justify-content-start">
                            <div class="navbar border-end">
                                <ul class="navbar-nav me-5">
                                    <h3>Quản lý</h3>
                                    <?php
                                    if(!isset($_SESSION['MaND'])){
                                        echo 'Đăng nhập để sử dụng các chức năng.';
                                    }
                                    else{
                                        if ($_SESSION['QuyenHan']==2){  
                                            echo 
                                            '<li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý đồ uống</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý món ăn</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý cà phê</a>
                                            </li>';
                                        }
                                        else if ($_SESSION['QuyenHan']==1){
                                            echo
                                            '<li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý đồ uống</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý món ăn</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý cà phê</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="#">Quản lý người dùng</a>
                                            </li>';
                                        }
                                    }
                                    ?>
                                    <h3>Hồ sơ cá nhân</h3>
                                    <?php
                                    if(!isset($_SESSION['MaND'])){
                                        echo 'Đăng nhập để sử dụng các chức năng.';
                                    }
                                    else{
                                        echo
                                        '<li class="nav-item ms-3">
                                            <a class="nav-link" href="#">Thông tin tài khoản</a>
                                        </li>
                                        <li class="nav-item ms-3">
                                            <a class="nav-link" href="#">Đổi mật khẩu</a>
                                        </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-8 mt-4">
                    <?php
                    $do = isset($_GET['do']) ? $_GET['do'] : "home";
                    include $do . ".php";
                    ?>
                </div>
            </div>
            <!--Footer-->
            <div class="container bg-white">
                <footer class="py-4">
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