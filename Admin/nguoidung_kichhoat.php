<?php
	if(isset($_GET['quyen']))
	{
		$sql = "UPDATE `nguoidung` SET `QuyenHan` = " . $_GET['quyen'] . " WHERE `MaNguoiDung` = " . $_GET['id'];
		$danhsach = $connect->query($sql);
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		if($danhsach)
			header("Location: index.php?do=qlnguoidung");
		else
			ThongBaoLoi("Lỗi khi thay đổi quyền.");
	}
	elseif(isset($_GET['khoa']))
	{
		$sql = "UPDATE `nguoidung` SET `Khoa` = " . $_GET['khoa'] . " WHERE `MaNguoiDung` = " . $_GET['id'];
		$danhsach1 = $connect->query($sql);
		if (!$danhsach1) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		if($danhsach1)
			header("Location: index.php?do=qlnguoidung");
		else
			ThongBaoLoi("Lỗi");
	}
	else
	{
		header("Location: index.php?do=nguoidung");
	}
?>