<?php require_once('./header.php');?>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
				<?php 
				if ($_SESSION['auth']['permission']==1) {
					echo "Chào mừng Admin - ".$_SESSION['auth']['name'];
				}else{
					echo "Chào mừng Mini Admin - ".$_SESSION['auth']['name'];
					echo '<br><i style="font-size: 13px;color: red">Chú ý : Bạn không có quyền truy cập vào bảng Users và Không có quyền xóa ở tất cả các bảng ! :)</i>';
				}
				?>
			</div>
		</div>
	</div>
	<?php require_once('./footer.php');?>