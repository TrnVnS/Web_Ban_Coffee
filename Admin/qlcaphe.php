<?php
	$sql = "select * from danhsach where PhanLoai = 'cà phê' ORDER by `MaDS` ASC";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách cà phê</h3>
<table class="table table-hover table-bordered align-middle">
    <thead class="table-secondary">
        <tr>
            <th>STT</th>
            <th>Mã cà phê</th>
            <th>Tên cà phê</th>
            <th>Đơn giá</th>
            <th>Hình ảnh</th>
            <th colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$stt = 1;
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {	
			echo "<tr>";
				echo "<td>" . $stt . "</td>";
				echo "<td>" . $dong['MaDS'] . "</td>";
				echo "<td>" . $dong['Ten'] . "</td>";
				echo "<td>" . $dong['DonGia'] . "</td>";
				echo "<td><img src='".$dong['HinhAnh']."' width='100'/></td>";

				echo "<td align='center'><a href='index.php?do=mon_sua&id=" . $dong['MaDS'] . "'><i class='bi bi-pencil-square'></i></a></td>";
				echo "<td align='center'><a href='index.php?do=mon_xoa&id=" . $dong['MaDS'] . "' onclick='return confirm(\"Bạn có muốn xóa món " . $dong['Ten'] . " không?\")'><i class='bi bi-trash3'></i></a></td>";
			echo "</tr>";
			$stt++;
		}
	?>
    </tbody>
</table>