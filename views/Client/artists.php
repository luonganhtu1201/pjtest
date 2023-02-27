<?php 
require_once('headerClient.php');
?>
<main class="main">
	<div class="container-fluid">
		<!-- artists -->
		<div class="row row--grid">
			<!-- breadcrumb -->
			<div class="col-12">
				<ul class="breadcrumb">
					<li class="breadcrumb__item"><a href="?admin=client&mod=client&act=client">Trang chủ</a></li>
					<li class="breadcrumb__item breadcrumb__item--active">Nghệ sĩ</li>
				</ul>
			</div>
			<!-- end breadcrumb -->

			<!-- title -->
			<div class="col-12">
				<div class="main__title main__title--page">
					<h1>Nghệ sĩ</h1>
				</div>
			</div>
			<!-- end title -->
		</div>

		<div class="row row--grid">
			<div class="col-12">
				<div class="row row--grid">
					<?php 
					foreach ($allMusic as $artists) {
									# code...

						?>
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="?admin=client&mod=client&act=artist&id=<?=$artists['id']?>" class="artist">
								<div class="artist__cover">
									<img src="<?= 'public/uploads'.$artists['avatar'] ?>" alt>
								</div>
								<h3 class="artist__title"><?=$artists['name']?></h3>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- end artists -->

		<!-- events -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Sự Kiện mới</h2>
				</div>
			</div>
			<!-- end title -->

			<?php 
				foreach ($article as $art) {
					# code...
				
			 ?>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="post">
					<a href="?admin=client&mod=client&act=article&id=<?=$art['id']?>" class="post__img">
						<img src="<?='public/uploads'.$art['thumbnail']?>" alt>
					</a>

					<div class="post__content">
						<b class="post__category">Music</b>
						<h3 class="post__title"><a href="?admin=client&mod=client&act=article&id=<?=$art['id']?>"><?=$art['title']?></a></h3>
					</div>
				</div>
			</div>
		<?php } ?>
		</section>
		<!-- end events -->
	</div>
</main>
<?php 
require_once('footerClient.php');
?>