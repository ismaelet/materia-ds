<section class="partners" id="partners">
	<div class="main-wrap">

		<h2 class="partners-title txt-e">PARTNERS</h2>
		<p class="txt-cen txt-15rem txt-c1">I brand con cui collaboriamo</p>

		<div class="partners-list">

			<?php for ($i = 1; $i <= 2; $i++) { ?>

				<div class="partner">
					<img class="parter-img img-fit" src="<?= file_url('partners/logo-' . $i . '.png') ?>" alt="" loading="lazy">
				</div>

			<?php } ?>

		</div>
	</div>
</section>