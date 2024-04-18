<!DOCTYPE html>
<html>
    <body>
        <?php	
            $mand = $_GET['id'];			
			$sql = "SELECT gh.*, ds.* FROM `giohang` gh , `danhsach` ds  WHERE MaNguoiDung='$mand' AND gh.MaDS = ds.MaDS";	
			$danhsach = $connect->query($sql);

			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}			
			
			$count = mysqli_num_rows($danhsach);
            if ($count > 0)
            {
                
		?>		
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td>Mô tả</td>
                <td>Phân loại</td>
                <td>Số lượng</td>
                <td>Giá</td>
            </tr>
            
            <?php	
                while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
                {		
                    echo "<tr>";				
                        echo "<td class='TenSP'>". $row["Ten"] ."</td>";
                        echo "<td class='MoTa'><img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='height: 180px;'></td>";
                        echo "<td class='PhanLoai'>". $row["PhanLoai"] ."</td>";
                        echo "<td class='SoLuong'>". $row["SoLuong"] ."</td>";
                        echo "<td class='Gia'>". $row["DonGia"] ."</td>";
                    echo "</tr>";
                }
            }
                else 
                {
                    echo "<h2 align='center'>Bạn chưa thêm món gì vào giỏ hàng</h2>";
                }
                        
            ?>
            
            </table>

		<?php 
			

		?>
    </body>
</html>