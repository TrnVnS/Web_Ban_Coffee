<!DOCTYPE html>
<html>
    <head>
        <title>Thức uống</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
			
			if(isset($_GET["limit_home"]) == true)
			{
				$_SESSION['limit_home'] += 6;
			}
			else
			{
				$_SESSION['limit_home'] = 12;
			}
			$limit_home_ok =  $_SESSION['limit_home'];
				

			$sql = "SELECT * FROM `danhsach` WHERE PhanLoai='đồ uống' LIMIT 0".$limit_home_ok;	
			$danhsach = $connect->query($sql);

			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
					
			$sql1 = "SELECT * FROM `danhsach` WHERE PhanLoai='đồ uống'";	
			$danhsach2 = $connect->query($sql1);
			$count_kq = mysqli_num_rows($danhsach2);
					
			while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
			{						
				echo "<div class='container'>";
					echo "<div class='khungsp'>";
						echo "<div class='card'>";					
							// echo "<a href='#" . $row['MaDS'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>";
							echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='height: 140px;'>";
							echo "<span class='tenphim' ></span> <br />";
							echo "<span class=\"giaban\">". $row["DonGia"] ." đ</span>";
							echo "<p><a  href=''>". $row["Ten"] ." </a></p>";
						echo "</div>";		
					echo "</div>";
				echo "</div>";	
			}

			if($count_kq > $_SESSION['limit_home'])
			{
				echo "<h3 class=\"xemthem\"><a href='index.php?do=home&limit_home=ok'>Xem thêm các sản phẩm khác</a></h3></td>";
					
			}
		?>


		<?php 
			

		?>
    </body>
</html>