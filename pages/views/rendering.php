{% block main %}

<div id="content" class="grid gap4">

	<div class="row">

		<div class="main-wrap">

			<!-- Body -->
			<section class="body">

				<!-- Title -->
				<h1 class="section-title txt-upp txt-black">
					<span class="inlb load slide-left">MODELLI</span><br>
					<span class="inlb load slide-left ld-1">DIGITALI</span> <span class="inlb txt-c1 load slide-right ld-2">3D</span>
				</h1>

				<p class="mar-t-3 load slide-right ld-2">
					<?= place_text('rendering-text-1') ?>
				</p>

			</section>

			<!-- Video -->
			<div class="video">

				<video src="<?= file_url('video.mp4') ?>" loop muted autoplay></video>

			</div>

			<!-- Carousel -->
			<div id="carousel">

				<!-- Colored bar background -->
				<div class="bar bar-bgr"></div>

				<!-- Images -->
				<section class="images">

					<?php for ($i = 1; $i <= 4; $i++) { ?>
						<div class="load slide-bottom ld-2">
							<img src="<?= file_url('img' . $i . '.png') ?>" alt="" class="<?= $i == 1 ? 'active' : '' ?>" data-id="<?= $i ?>">
						</div>
					<?php } ?>

				</section>

				<!-- Colored bar -->
				<div class="bar bar-box">

					<div class="bar"></div>

					<!-- Scroll arrow -->
					<div class="arrow bgr-0 bgr-f-h fill-c1 fill-0-h center-items clickable load slide-left ld-5">
						<div class="icon-box">
							<?= icon_embed('navigation/arrow2-right') ?>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>


	<div class="row ">

		<div class="main-wrap ">

			<!-- Slider -->
			<div id="slider" class="load slide-bottom ld-2 pos-rel">

				<div class="background bgr"></div>

				<div class="wrapper">

					<div class="slider-img" <?= background_image('slider-1.jpg') ?>></div>
					<div class="slider-img" <?= background_image('slider-2.jpg') ?>></div>

					<div class="draggable">

						<div class="line"></div>

						<div class="circle">

							<div class="icon-box fill-f"><?= icon_embed('navigation/arrow1-left') ?></div>
							<div class="icon-box fill-f"><?= icon_embed('navigation/arrow1-right') ?></div>

						</div>

						<div class="line"></div>

					</div>

				</div>

			</div>

			<!-- Body -->
			<section class="body">

				<!-- Title -->
				<h1 class="section-title txt-upp txt-black">
					<span class="inlb load slide-left txt-c1">RENDERING</span><br>
				</h1>

				<h2 class="stitle txt-15rem inlb load slide-left ld-1">per la visualizzazione del<br>risultato finale</h2>

				<p class="mar-t-3 load slide-right ld-2">
					<?= place_text('rendering-text-2') ?>
				</p>

			</section>

		</div>

	</div>

</div>

{% end main %}