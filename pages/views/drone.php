{% block main %}

<!-- Slider -->
<section id="slider" class="pos-rel">

	<div class="background bgr" <?= background_image('bgr.webp') ?>>
		<div class="overlay bgr"></div>
	</div>

	<div class="main-wrap hei-100 grid va-cen">

		<div class="txt-rig load slide-left ld-3">
			<h1 class="title txt-f txt-ls1 txt-sbold txt-upp">Fotorilievi<br>
				con <span class="txt-c1">drone</h1>
		</div>

	</div>

</section>

<!-- Sections -->
<div id="features">

	<!-- Section 2 -->
	<section id="feature2" class="feature hidden">

		<!-- Background -->
		<div class="main-wrap">

			<!-- Content -->
			<div class="content">

				<!-- Texts -->
				<div class="texts">

					<div class="background bgr"></div>

					<!-- Title -->
					<h2 class="title load slide-right">
						FOTORILIEVO <span class="txt-c1">&</span><br>
						RACCOLTA DATI
					</h2>

					<!-- Description -->
					<p class="desc load slide-left ld-3">
						<?= place_text('drone-text-1') ?>
					</p>

					<!-- Button -->
					<a class="feature-btn load slide-left ld-6" href="<?= html_link('#contacts') ?>">

						<h1 class="feature-btn-txt">Contattaci</h1>

						<div class="feature-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>

				</div>

				<!-- Image -->
				<div class="image-box inlb">

					<div class="image load slide-bottom ld-4" <?= background_image('feature-2.webp') ?>></div>

					<p class="img-desc txt-ls1 mar-t-05 load slide-bottom ld-5">
						Occaecat sint ut<br>Tempor voluptate
					</p>

				</div>

			</div>

		</div>

	</section>

	<!-- Section 1 -->
	<section id="feature1" class="feature">

		<div class="main-wrap">

			<!-- Content -->
			<div class="content grid">

				<div class="background bgr"></div>

				<!-- Image -->
				<div class="image-box">

					<div class="image load slide-bottom ld-4" <?= background_image('feature-1.webp') ?>>
						<?= place_image('drone/feature-1') ?>
					</div>

					<p class="img-desc mar-t-05 txt-rig load slide-bottom ld-5">
						<span class="txt-upp">Agritur Josefhof</span><br>Caldaro &middot; 2018
					</p>

				</div>

				<!-- Texts -->
				<div class="texts">

					<!-- Title -->
					<h2 class="title load slide-right">
						Fotorilievo <span class="txt-c1">&</span><br>
						raccolta dati
					</h2>

					<!-- Description -->
					<p class="desc load slide-left ld-3">
						<?= place_text('drone-text-1') ?>
					</p>

					<!-- Button -->
					<a href="<?= html_link('#contact') ?>" class="feature-btn load slide-left ld-6">

						<h3 class="feature-btn-txt">Contattaci</h3>

						<div class="feature-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>

				</div>

			</div>

		</div>

	</section>

	<!-- Section 3 -->
	<section id="feature3" class="feature">

		<div class="main-wrap pos-rel">

			<!-- Background -->
			<div class="background bgr"></div>

			<!-- Title -->
			<h2 class="title txt-lh1 pad-l-5 load slide-right">
				Digitalizzazione<br>
				del <span class="txt-c1">contesto</span>
			</h2>

			<!-- Image -->
			<div class="image-box">

				<div class="image load slide-bottom ld-4" <?= background_image('feature-2.webp') ?>>
					<?= place_image('drone/feature-2') ?>
				</div>

				<p class="img-desc mar-t-05 load slide-bottom ld-5">
					<span class="txt-upp">Agritur Josefhof</span><br>Caldaro &middot; 2018
				</p>

			</div>

			<div class="texts-box pad-b-4 mar-t-3 txt-rig">

				<div class="texts txt-lef inlb">

					<!-- Description -->
					<p class="desc mar-b-2 load slide-left ld-3">
						<?= place_text('drone-text-2') ?>
					</p>

					<!-- Button -->
					<a class="feature-btn txt-rig load slide-left ld-6" href="<?= html_link('#contacts') ?>">

						<h1 class="feature-btn-txt">Contattaci</h1>

						<div class="feature-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4 -->
	<section id="feature4" class="feature hidden">

		<div class="background bgr"></div>

		<div class="main-wrap">

			<div class="content">

				<!-- Image -->
				<div class="image-box">

					<div class="image load slide-bottom ld-4" <?= background_image('feature-4.webp') ?>></div>

					<p class="img-desc txt-rig load slide-bottom ld-5">
						Laborum dolor<br>Sunt in esse
					</p>

				</div>

				<!-- Texts -->
				<div class="texts">

					<h2 class="title load slide-right">Attento Studio dei <span class="txt-c1">Componenti</span></h2>

					<p class="desc load slide-left ld-3">
						Il processo di progettazione si svolge prestando massima attenzione al contesto nel quale il progetto viene inserito, ai materiali, alle forme e alle proporzioni dei vari elementi.
					</p>

					<!-- Button -->
					<a href="<?= html_link('#contactsing') ?>" class="feature-btn">

						<div class="load slide-left ld-6">

							<h1 class="feature-btn-txt">Contattaci</h1>

							<div class="feature-btn-icon center-items">
								<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
							</div>

						</div>

					</a>

				</div>

			</div>

		</div>

	</section>

</div>

{% end main %}