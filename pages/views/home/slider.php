<!-- Slider -->
<section id="slider">

	<?php foreach ($slides as $key => $slide) { ?>

		<!-- Background -->
		<div id="background<?= $key ?>" class="background bgr <?= $key == 1 ? 'active' : '' ?>" <?= background_image('slider' . $key . '.webp') ?>>
			<div class="bgr-overlay bgr"></div>
		</div>

		<!-- Title -->
		<div id="title-box<?= $key ?>" class="title-box place-cen <?= $key == 1 ? 'active' : '' ?>">
			<h3 class="stitle mar-b-05 txt-light load slide-bottom ld-3"><?= $slide['stitle'] ?></h3>
			<img src="<?= file_url('title.svg') ?>" alt="" class="title load slide-bottom">
		</div>

	<?php } ?>

	<!-- Socials -->
	<div id="socials">

		<a class="social block" href="<?= sysData('cont_inst_link') ?>">
			<div class="icon-box fill-e fill-c1-h load slide-bottom ld-2">
				<?= icon_embed('contacts/instagram') ?>
			</div>
		</a>

		<a class="social block" href="<?= sysData('cont-mail_link') ?>">
			<div class="icon-box fill-e fill-c1-h load slide-bottom ld-4">
				<?= icon_embed('contacts/mail') ?>
			</div>
		</a>

	</div>

	<!-- Dots -->
	<div id="dots" class="place-cenX">

		<div class="flex gap2 load slide-top ld-3">

			<?php for ($i = 1; $i < count($slides) + 1; $i++) { ?>

				<div class="dot-box center-content clickable <?= $i == 1 ? 'active' : '' ?>" data-pos="<?= $i ?>">
					<div class="dot"></div>
				</div>

			<?php } ?>

		</div>

	</div>

</section>