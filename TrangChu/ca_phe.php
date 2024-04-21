<!DOCTYPE html>
<html>
    <head>
        <title>Cà phê</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
			
			$sql = "SELECT * FROM `danhsach` WHERE PhanLoai='cà phê'";	
			$danhsach = $connect->query($sql);

			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
			
			$count_kq = mysqli_num_rows($danhsach);
					
			while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
			{						
				echo "<div class='container'>";
					echo "<div class='khungsp'>";
						echo "<div class='card'>";		
							echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='height: 180px;'>";
							echo "<p class='giaban'>". $row["DonGia"] ." đ</p>";
							echo "<p><b>". $row["Ten"] ." </b></p>";
							//hiện thông tin mua và thêm vào giỏ hàng
							if(isset($_SESSION['MaND']))
							{
								echo 
								'<a href="index.php?do=giohang_them&id=' . $row["MaDS"] . '" class="btn btn-dark rounded-pill">
									<i class="bi bi-cart"></i> Thêm vào giỏ
								</a>';
							}		
						echo "</div>";					
					echo "</div>";
				echo "</div>";
			}
			
		?>
		<?php 
			

		?>
    </body>
</html>