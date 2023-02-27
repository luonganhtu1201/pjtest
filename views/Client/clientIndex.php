<?php 
	require_once('headerClient.php');
 ?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<!-- slider -->
			<section class="row">
				<div class="col-12">
					<div class="hero owl-carousel" id="hero">
						<?php 
							foreach ($article as $art) {
								# code...
							
						 ?>
						<div class="hero__slide" data-bg="<?='public/uploads'.$art['thumbnail']?>">
							
						</div>
						<?php } ?>
					</div>

					<button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
					<button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
				</div>
			</section>
			<!-- end slider -->

			<!-- releases -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Albums Ca Sĩ</h2>

						<a href="?admin=client&mod=client&act=releases" class="main__link">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
					</div>
				</div>

				<!-- end title -->
				<?php 
				foreach ($arMusic as $sin) {
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
			</section>
			<!-- end releases -->

			<!-- events -->
			
			<!-- end events -->

			<!-- articts -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Ca Sĩ nổi bật</h2>
						<a href="?admin=client&mod=client&act=artists" class="main__link">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--artists owl-carousel" id="artists">
							<?php 
							foreach ($allMusic as $artists) {
									# code...
								
								?>
								<a href="?admin=client&mod=client&act=artist&id=<?=$artists['id']?>" class="artist">
									<div class="artist__cover">
										<img src="<?= 'public/uploads'.$artists['avatar'] ?>" alt>
									</div>
									<h3 class="artist__title"><?=$artists['name']?></h3>
								</a>
							<?php } ?>
						</div>

						<button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
						<button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
					</div>
				</div>
			</section>
			<!-- end articts -->

			<section class="row row--grid">
				<div class="col-12 col-md-6 col-xl-6">
					<div class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z"/></svg><a href="#">Bài nhạc nổi bật</a></h2>
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
			<div class="col-12 col-md-6 col-xl-6 mt-5">
				<div class="row row--grid mt-5">
					<div class="col-12 mt-3">
						<img style="width: 100%;" src="https://ec.europa.eu/culture/sites/default/files/styles/oe_theme_medium_no_crop/public/hanny-naibaho-388579-unsplash_0.jpg?itok=wCvZvgT6" alt="">
					</div>
				</div>
			</div>
		</section>
		<img class="mt-5" style="width: 100%;" src="public/uploads/slide-2.jpg" alt="">
		<!-- podcasts -->
		<section class="row row--grid">
			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg><a href="#">Nhạc Pop</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php 
								foreach ($popMusic as $popMusic) {

									?>
									<li class="single-item">
										<a data-link data-title="<?=$popMusic['name']?>" data-artist="<?php 
										foreach ($allMusic as $ar) {
											if ($popMusic['singer_id']==$ar['id']) {
												echo $ar['name'];
											}
										}
										?>" data-img="<?='public/uploads'.$popMusic['avatar']?>" href="<?='public/uploads/Music'.$popMusic['music']?>" class="single-item__cover">
										<img src="<?='public/uploads'.$popMusic['avatar']?>" alt>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#"><?= $popMusic['name']?></a></h4>
										<span><a href="artist.html"><?php 
										foreach ($allMusic as $ar) {
											if ($popMusic['singer_id']==$ar['id']) {
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

			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z"/></svg><a href="#">Nhạc Dance</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php 
								foreach ($danceMusic as $danceMusic) {

									?>
									<li class="single-item">
										<a data-link data-title="<?=$danceMusic['name']?>" data-artist="<?php 
										foreach ($allMusic as $ar) {
											if ($danceMusic['singer_id']==$ar['id']) {
												echo $ar['name'];
											}
										}
										?>" data-img="<?='public/uploads'.$danceMusic['avatar']?>" href="<?='public/uploads/Music'.$danceMusic['music']?>" class="single-item__cover">
										<img src="<?='public/uploads'.$danceMusic['avatar']?>" alt>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#"><?= $danceMusic['name']?></a></h4>
										<span><a href="artist.html"><?php 
										foreach ($allMusic as $ar) {
											if ($danceMusic['singer_id']==$ar['id']) {
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

			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,15a4,4,0,0,0,4-4V5A4,4,0,0,0,8,5v6A4,4,0,0,0,12,15ZM10,5a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0Zm10,6a1,1,0,0,0-2,0A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93A8,8,0,0,0,20,11Z"/></svg><a href="#">R&B</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php 
								foreach ($RnBMusic as $RnBMusic) {

									?>
									<li class="single-item">
										<a data-link data-title="<?=$RnBMusic['name']?>" data-artist="<?php 
										foreach ($allMusic as $ar) {
											if ($RnBMusic['singer_id']==$ar['id']) {
												echo $ar['name'];
											}
										}
										?>" data-img="<?='public/uploads'.$RnBMusic['avatar']?>" href="<?='public/uploads/Music'.$RnBMusic['music']?>" class="single-item__cover">
										<img src="<?='public/uploads'.$RnBMusic['avatar']?>" alt>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									<div class="single-item__title">
										<h4><a href="#"><?= $RnBMusic['name']?></a></h4>
										<span><a href="artist.html"><?php 
										foreach ($allMusic as $ar) {
											if ($RnBMusic['singer_id']==$ar['id']) {
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
		<!-- end store -->

		<!-- news -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Sự Kiện</h2>
				</div>
			</div>
			<!-- end title -->

			<!-- video post -->
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
			<!-- end video post -->

			<!-- post -->
			
			<!-- end post -->
		</section>
		<!-- end news -->

		<!-- partners -->
		<div class="row">
			<div class="col-12">
				<div class="partners owl-carousel">
					<a href="#" class="partners__img">
						<img src="images/3docean-light-background.png" alt>
					</a>

					<a href="#" class="partners__img">
						<img src="images/activeden-light-background.png" alt>
					</a>

					<a href="#" class="partners__img">
						<img src="images/audiojungle-light-background.png" alt>
					</a>

					<a href="#" class="partners__img">
						<img src="images/codecanyon-light-background.png" alt>
					</a>

					<a href="#" class="partners__img">
						<img src="images/photodune-light-background.png" alt>
					</a>

					<a href="#" class="partners__img">
						<img src="images/themeforest-light-background.png" alt>
					</a>
				</div>
			</div>
		</div>
		<!-- end partners -->
	</div>
</main>
<!-- end main content -->

<!-- footer -->
<?php 
	require_once('footerClient.php');
 ?>