<?php require_once('headerClient.php'); ?>
<main class="main">
	<div class="container-fluid">
		<div class="row row--grid">
			<!-- breadcrumb -->
			<div class="col-12">
				<ul class="breadcrumb">
					<li class="breadcrumb__item"><a href="?admin=client&mod=client&act=client">Home</a></li>
					<li class="breadcrumb__item breadcrumb__item--active">Albums</li>
				</ul>
			</div>
			<!-- end breadcrumb -->

			<!-- title -->
			<div class="col-12">
				<div class="main__title main__title--page">
					<h1>Albums</h1>
				</div>
			</div>
			<!-- end title -->
		</div>

		<!-- releases -->
		<div class="row row--grid">
			<div class="col-12">
				<div class="row row--grid">
					<?php 
					foreach ($allMusic as $sin) {
						# code...

						?>
						<div class="col-6 col-sm-4 col-lg-2">
							<div class="album">
								<div class="album__cover">
									<img src="<?='public/uploads/'.$sin['avatar']?>" alt>
									<a href="?admin=client&mod=client&act=release&id=<?=$sin['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>

								</div>
								<div class="album__title">
									<h3><a href="?admin=client&mod=client&act=release&id=<?=$sin['id']?>"><?=$sin['name']?></a></h3>
									<span><p><?=$sin['real_name']?></p></span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- end releases -->

		<section class="row row--grid">
			<div class="col-12 col-xl-8">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">Upcoming events</a></h2>
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
						<a href="#" class="post__category">Music</a>
						<h3 class="post__title"><a href="?admin=client&mod=client&act=article&id=<?=$art['id']?>"><?=$art['title']?></a></h3>
					</div>
				</div>
			</div>
		<?php } ?>
				</div>
			</div>

			<div class="col-12 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">Top Music</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php 
								foreach ($topMusic as $topMusic) {

									?>
									<li class="single-item">
										<a data-link data-title="<?=$topMusic['name']?>" data-artist="<?php 
										foreach ($allMusic as $ar) {
											if ($topMusic['singer_id']==$ar['id']) {
												echo $ar['name'];
											}
										}
										?>" data-img="<?='public/uploads'.$topMusic['avatar']?>" href="<?='public/uploads/Music'.$topMusic['music']?>" class="single-item__cover">
										<img src="<?='public/uploads'.$topMusic['avatar']?>" alt>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#"><?= $topMusic['name']?></a></h4>
										<span><a href="artist.html"><?php 
										foreach ($allMusic as $ar) {
											if ($topMusic['singer_id']==$ar['id']) {
												echo $ar['name'];
											}
										}
										?></a></span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>		
	</div>
</main>
<?php require_once('footerClient.php'); ?>