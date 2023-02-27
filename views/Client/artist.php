<?php 
require_once('headerClient.php');
?>
<main class="main">
	<div class="container-fluid">
		<div class="row row--grid">
			<div class="col-12">
				<div class="article article--page">
					<!-- article content -->
					<div class="article__content">
						<div class="article__artist">
							<img src="<?='public/uploads'.$singer['avatar']?>" alt>
							<div>
								<h1><?= $singer['name']  ?></h1>
								<span><?= $singer['real_name']  ?></span>
							</div>
						</div>
						<p><?= $singer['description']  ?></p>
					</div>
					<!-- end article content -->

					<!-- share -->
					<div class="share">
						<a href="?admin=client&mod=client&act=release&id=<?=$singer['id']?>" class="share__link share__link--fb"><i class="fa fa-play mr-1" aria-hidden="true"></i> Album</a>
					</div>
					<!-- end share -->
				</div>
			</div>
		</div>

		

		<!-- releases -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Albums Nghệ sĩ khác</h2>
				</div>
			</div>
			<!-- end title -->
			<?php 
			foreach ($exceptArtist as $ex) {
								# code...

				?>
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="album album--sidebar">
						<div class="album__cover">
							<img style="height: 172px;" src="<?='public/uploads/'.$ex['avatar']?>" alt>
							<a href="?admin=client&mod=client&act=release&id=<?=$ex['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
						</div>
						<div class="album__title">
							<h3><a href="?admin=client&mod=client&act=release&id=<?=$ex['id']?>"><?=$ex['name']?></a></h3>
							<span><p><?=$ex['real_name']?></p></span>
						</div>
					</div>
				</div>
			<?php } ?>
			
		</section>
		<!-- end releases -->

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