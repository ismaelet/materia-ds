{% block main %}

<div id="background" class="bgr stack-items">
	<div class="circle circle1 load slide-left ld-2"></div>
	<div class="circle circle2 load slide-left ld-1"></div>
	<div class="circle circle3 load slide-left"></div>
	<div class="cover fill-all"></div>
</div>

<section id="body" class="va-cen pos-rel">

	<div class="content">

		<h1 class="title txt-upp txt-wht txt-ls1 txt-sbold load slide-left">STAMPA 3D</h1>

		<h3 class="mar-t-05 txt-c1 txt-upp txt-med txt-ls1 load slide-left ld-2">toccare con mano il progetto</h3>

		<p class="mar-t-3 txt-c txt-lh2 txt-ls1 txt-1rem load slide-right ld-2">
			<?= place_text('printing-text') ?>
		</p>

		<div class="load slide-bottom ld-5">
			<a href="<?= html_link('#contacts') ?>" class="mbtn mar-t-4">Contattaci</a>
		</div>

	</div>

	<div class="img-box stack-items clickable load slide-bottom ld-2">

		<video class="video playing" src="<?= file_url('video.mp4') ?>" muted autoplay loop></video>

		<div class="video-play icon-box">
			<?= icon_embed('play') ?>
		</div>

	</div>

</section>

<section class="gallery">

	<?php for ($i = 1; $i <= 4; $i++) { ?>

		<div>
			<img class="gallery-img" src="<?= file_url('img-' . $i . '.webp') ?>" alt="">
			<?= place_image('printing/img-' . $i) ?>
		</div>

	<?php } ?>

</section>

{% end main %}