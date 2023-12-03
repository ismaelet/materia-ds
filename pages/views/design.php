{% block main %}

<!-- Slider -->
<section id="slider" class="pos-rel">

	<div class="background bgr" <?= background_image('bgr.webp') ?>>
		<div class="overlay bgr"></div>
	</div>

	<div class="main-wrap hei-100 grid va-cen">

		<div class="txt-rig load slide-left ld-3">
			<h1 class="title txt-f txt-ls1 txt-sbold txt-upp">CONSULENZA <span class="txt-c1">&</span> Progettazione</h1>
		</div>

	</div>

</section>

<!-- Sections -->
<div id="features">

	<!-- Section 1 -->
	<section id="feature1" class="feature">

		<div class="main-wrap">

			<!-- Content -->
			<div class="content grid">

				<!-- Image -->
				<div class="image-box">

					<div class="image load slide-bottom ld-4" <?= background_image('feature-1.webp') ?>>
						<?= place_image('design/feature-1') ?>
					</div>

					<p class="img-desc mar-t-05 txt-rig load slide-bottom ld-5">
						<a href="<?= html_link('projects/work?id=1') ?>">ESSENTIAL<br>Lagundo · 2021</a>
					</p>

				</div>

				<!-- Texts -->
				<div class="texts">

					<div class="background bgr"></div>

					<!-- Title -->
					<h2 class="title load slide-right">
						Progetto <span class="txt-c1 inlb">su misura</span>
					</h2>

					<!-- Description -->
					<p class="desc load slide-left ld-3">
						<?= place_text('projects-section-1') ?>
					</p>

					<!-- Button -->
					<a href="<?= html_link('#contacts') ?>" class="feature-btn load slide-left ld-6">

						<h3 class="feature-btn-txt">Contattaci</h3>

						<div class="feature-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>

				</div>

			</div>

		</div>

	</section>

	<!-- Section 2 -->
	<section id="feature2" class="feature">

		<!-- Background -->
		<div class="main-wrap">

			<!-- Content -->
			<div class="content">

				<!-- Texts -->
				<div class="texts">

					<div class="background bgr"></div>

					<!-- Title -->
					<h2 class="title load slide-right">
						Funzionalità, Sicurezza<br>
						<span class="txt-c1">&</span> Estetica
					</h2>

					<!-- Description -->
					<p class="desc load slide-left ld-3">
						<?= place_text('projects-section-2') ?>
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

					<div class="image load slide-bottom ld-4" <?= background_image('feature-2.webp') ?>>
						<?= place_image('design/feature-2') ?>
					</div>

					<p class="img-desc txt-ls1 mar-t-05 load slide-bottom ld-5">
						<a href="<?= html_link('projects/work?id=3') ?>">OASI MONTANA<br>Val di Fiemme · 2021</a>
					</p>

				</div>

			</div>

		</div>

	</section>

	<!-- Section 3 -->
	<section id="feature3" class="feature pos-rel hidden">

		<div class="main-wrap pos-rel">

			<!-- Background -->
			<div class="feature-bgr bgr"></div>

			<!-- Title -->
			<h2 class="title txt-lh1 pad-l-5 load slide-right">
				Fotorilievi<br>
				con <span class="txt-c1">drone</span>
			</h2>

			<!-- Image -->
			<div class="image-box pos-rel">

				<div class="image load slide-bottom ld-4" <?= background_image('feature-3.webp') ?>></div>

			</div>

			<div class="texts-box pad-b-4 mar-t-3 txt-rig">

				<div class="texts txt-lef inlb">

					<!-- Description -->
					<p class="desc mar-b-2 load slide-left ld-3">
						Materia Design Studio si occupa anche di fotoinquadramenti e rilevamenti topografici con drone. Tramite l'utilizzo di moderne tecnologie siamo in grado di studiare nel dettaglio qualsiasi tipo di area, effetuando rilievi fotogrammetrici, ispezioni, video e inquadramenti generali.
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
	<section id="feature4" class="feature">

		<div class="background bgr"></div>

		<div class="main-wrap">

			<div class="content">

				<!-- Image -->
				<div class="image-box">

					<div class="image load slide-bottom ld-4" <?= background_image('feature-3.webp') ?>>
						<?= place_image('design/feature-3') ?>
					</div>

					<p class="img-desc txt-rig load slide-bottom ld-5">
						<a href="<?= html_link('projects/work?id=10') ?>">CONCEPT &middot; 2021</a>
					</p>

				</div>

				<!-- Texts -->
				<div class="texts">

					<h2 class="title load slide-right">Attento Studio dei <span class="txt-c1">Componenti</span></h2>

					<p class="desc load slide-left ld-3">
						<?= place_text('projects-section-3') ?>
					</p>

					<!-- Button -->
					<a href="<?= html_link('#contacts') ?>" class="feature-btn">

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