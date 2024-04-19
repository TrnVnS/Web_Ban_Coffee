<?php
    $magh = $_GET['id'];

    // Lấy mã giỏ hàng để xoá
    $sql = "SELECT gh.*, ds.* FROM `giohang` gh, `danhsach` ds WHERE MaGH = '$magh' AND ds.MaDS = gh.MaDS";
    $danhsach = $connect->query($sql);

    $row = $danhsach->fetch_assoc();

    $sql_delete = "DELETE FROM `giohang` WHERE MaGH = '$magh'";
    $connect->query($sql_delete);
    
    echo "<h2 align='center'>Bạn đã đặt đơn hàng: " . $row['Ten'] . " số lượng: " . $row['SoLuong'] . "</h2>";
    
?>