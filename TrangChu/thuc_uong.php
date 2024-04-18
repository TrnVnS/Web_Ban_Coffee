<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Thức uống</li>
	</ol>
</nav>
<?php

	if (isset($_GET["limit_home"]) == true) {
		$_SESSION['limit_home'] += 6;
	} else {
		$_SESSION['limit_home'] = 12;
	}
	$limit_home_ok =  $_SESSION['limit_home'];


	$sql = "SELECT * FROM `danhsach` WHERE PhanLoai='đồ uống' LIMIT 0" . $limit_home_ok;
	$danhsach = $connect->query($sql);

	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	$sql1 = "SELECT * FROM `danhsach` WHERE PhanLoai='đồ uống'";
	$danhsach2 = $connect->query($sql1);
	$count_kq = mysqli_num_rows($danhsach2);

	while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) {
		echo 
		'<div class="container">
			<div class="card mb-3" style="width: 20rem;">
				<img src="'.$row["HinhAnh"].'" class="card-img-top">
				<div class="card-body">
					<h2 class="card-title">'.$row["Ten"].'</h3>
					<h4 class="card-subtitle">'.$row["DonGia"].'</h3>
											
				</div>
				<div class="card-body border-top text-center">
					<a href="#" class="btn btn-outline-dark rounded-pill">
						<i class="bi bi-info-circle"></i> Chi tiết
					</a>
					<a href="#" class="btn btn-dark rounded-pill">
						<i class="bi bi-cart"></i> Thêm vào giỏ
					</a>
				</div>    
			</div>
		</div>';
	}

	if ($count_kq > $_SESSION['limit_home']) {
		echo "<h3 class=\"xemthem\"><a href='index.php?do=home&limit_home=ok'>Xem thêm...</a></h3></td>";
	}
?>


<?php


?>