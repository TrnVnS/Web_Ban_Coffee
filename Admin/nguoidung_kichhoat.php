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
    if ($dong['Khoa'] == 1)
    {
        $sql_update = "UPDATE `nguoidung` SET Khoa = 0 WHERE MaNguoiDung = '$MaND'";
        $danhsach = $connect->query($sql_update);

        echo "<h2 align='center'> Đã mở khoá người dùng " . $dong['TenNguoiDung'] . "</h2>";
    }
    else
    {
        $sql_update = "UPDATE `nguoidung` SET Khoa = 1 WHERE MaNguoiDung = '$MaND'";
        $danhsach = $connect->query($sql_update);

        echo "<h2 align='center'> Đã khoá người dùng " . $dong['TenNguoiDung'] . "</h2>";
    }
?>