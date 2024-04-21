<?php
    $MaND = $_GET['id'];
    $sql = "SELECT * FROM `nguoidung` WHERE MaNguoiDung = " . $MaND;

    $danhsach = $connect->query($sql);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $dong = $danhsach->fetch_array(MYSQLI_ASSOC);
    if ($dong['QuyenHan'] == 1)
    {
        $sql_update = "UPDATE `nguoidung` SET QuyenHan = 2 WHERE MaNguoiDung = '$MaND'";
        $danhsach = $connect->query($sql_update);

        echo "<h2 align='center'> Đã hạn quyền người dùng: " . $dong['TenNguoiDung'] . "</h2>";
    }
    else
    {
        $sql_update = "UPDATE `nguoidung` SET QuyenHan = 1 WHERE MaNguoiDung = '$MaND'";
        $danhsach = $connect->query($sql_update);

        echo "<h2 align='center'> Đã nâng quyền người dùng " . $dong['TenNguoiDung'] . "</h2>";
    }
?>