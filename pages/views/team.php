{% block main %}

<div class="page-header pad-h-2 txt-cen mwid-1000 mar-h-auto">


	<h1 class="txt-upp txt-3rem mar-b-2 txt-sbold">Chi siamo</h1>

	<p class="txt-1rem txt-ls1 txt-lh2">
		<?= place_text('team-text') ?>
	</p>

</div>

<div class="page-body pos-rel">

	<div id="bgr" class="bgr grid2">
		<div class="part1 part hei-100" data-id="1"></div>
		<div class="part2 part hei-100" data-id="2"></div>
	</div>

	<div class="main-wrap grid2 grid1-768w">

		<?php foreach ($profiles as $key => $profile) { ?>

			<section id="profile<?= $key ?>" class="profile part part<?= $key ?>" data-id="<?= $key ?>">

				<div class="body wrap  pos-rel">

					<!-- Image -->
					<div class="image-box mar-h-auto mar-b-1 load slide-bottom ld-3  pos-rel">
						<div class="image bgr" <?= background_image('img' . $key . '.webp') ?>></div>
						<div class="overlay round bgr"></div>
					</div>

					<!-- Name -->
					<h2 class="name txt-cen txt-bold mar-b-1 load slide-bottom">
						<span class="firstname"><?= $profile['name'][0] ?></span>
						<span class="lastname txt-c1"><?= $profile['name'][1] ?></span>
					</h2>

					<div class="load slide-bottom ld-2">
						<div class="line mar-h-auto mar-b-1"></div>
					</div>

					<div class="load slide-bottom ld-4">
						<p class="role txt-09rem txt-sbold txt-ls2 txt-upp txt-c txt-cen mar-b-2"><?= $profile['role'] ?></p>
					</div>

					<!-- Presentation -->
					<!-- <div class="load slide-right ld-2">
						<p class="text txt-1rem txt-jus"><?= $profile['text'] ?></p>
					</div> -->

					<!-- Socials -->
					<div class="socials txt-cen">

						<div class="inlflex">

							<?php foreach ($profile['contacts'] as $key => $contact) { ?>
								<div class="load slide-top ld-<?= $key + 1 ?>">
									<a href="<?= $contact[1] ?>" class="social block icon-box fill-e">
										<?= icon_embed('contacts/' . $contact[0]) ?>
									</a>
								</div>
							<?php } ?>

						</div>

					</div>

				</div>

			</section>

		<?php } ?>

	</div>

</div>

<section class="partners" id="partners">
	<div class="main-wrap">

		<h2 class="partners-title txt-e">PARTNERS</h2>
		<p class="txt-cen txt-15rem txt-c1">I brand con cui collaboriamo</p>

		<div class="partners-list">

			<?php foreach ($partners as $key => $partner) { ?>

				<a class="partner" href="<?= $partner[1] ?>">
					<img class="parter-img img-fit" src="<?= file_url('partners/logo-' . ($key + 1) . '.png') ?>" alt="" loading="lazy">
				</a>

			<?php } ?>

		</div>
	</div>
</section>

{% end main %}