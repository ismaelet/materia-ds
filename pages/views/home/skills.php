<div id="skills">

	<!-- Section 1 -->
	<section id="skill1" class="skill pos-rel">

		<div id="skill1-bgr1" class="skill-bgr bgr"></div>

		<!-- Background -->
		<div class="main-wrap">

			<div id="skill1-bgr2" class="skill-bgr bgr"></div>

			<!-- Content -->
			<div class="content">

				<!-- Texts -->
				<div class="texts inlb pad-b-5">

					<!-- Title -->
					<h2 class="title load slide-right">
						Progettazione<br>
						<span class="txt-c1">&</span> Consulenza
					</h2>

					<!-- Description -->
					<p class="desc mar-b-5 load slide-left ld-3">
						<?= place_text('home-feature-1') ?>
					</p>

					<!-- Button -->
					<a class="skill-btn load slide-left ld-6" href="<?= html_link('design') ?>">

						<h1 class="skill-btn-txt">Esplora</h1>

						<div class="skill-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>

				</div>

				<!-- Image -->
				<div class="image-box inlb pos-rel">

					<div class="load slide-bottom ld-4">
						<div class="image" <?= background_image('skill1.webp') ?>></div>
						<?= place_image('home/skill1') ?>
					</div>

					<p class="img-desc txt-ls1 mar-t-05 load slide-bottom ld-5">
						<a href="<?= html_link('projects/work?id=3') ?>">OASI MONTANA<br>
							Val di Fiemme · 2021</a>
					</p>

				</div>

			</div>

		</div>

	</section>

	<!-- Section 2 -->
	<section id="skill2" class="skill pos-rel">

		<div class="skill-bgr bgr"></div>

		<div class="main-wrap pos-rel">

			<!-- Image -->
			<div class="image-box pos-rel">

				<div class="load slide-bottom ld-4">
					<div class="image" <?= background_image('skill2.webp') ?>></div>
					<?= place_image('home/skill2') ?>
				</div>

				<p class="img-desc txt-ls1 mar-t-05 txt-rig load slide-bottom ld-5">
					<a href="<?= html_link('projects/work?id=3') ?>">OASI MONTATA<br>
						Val di Fiemme · 2021</a>
				</p>

			</div>

			<!-- Texts -->
			<div class="texts">

				<h2 class="title load slide-right">Rendering e<br><span class="txt-c1">Modelli Digitali</span></h2>

				<p class="desc load slide-left ld-3">
					<?= place_text('home-feature-2') ?>
				</p>

			</div>

			<!-- Button -->
			<a class="skill-btn" href="<?= html_link('rendering') ?>">

				<div class="load slide-left ld-6">

					<h1 class="skill-btn-txt">Esplora</h1>

					<div class="skill-btn-icon center-items">
						<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
					</div>

				</div>

			</a>

		</div>

	</section>

	<!-- Section 3 -->
	<section id="skill3" class="skill pos-rel">

		<div class="main-wrap pos-rel">

			<!-- Background -->
			<div class="skill-bgr bgr"></div>

			<!-- Title -->
			<h2 class="title txt-lh1 pad-l-5 load slide-right pos-rel">
				Fotorilievi<br>
				con <span class="txt-c1">drone</span>
			</h2>

			<!-- Image -->
			<div class="image-box pos-rel">

				<video class="video" muted loop autoplay>
					<source src="<?= file_url('video1.mp4') ?>" type="video/mp4">
					Il tuo browser non supporta video MP4
				</video>

			</div>

			<div class="texts-box pad-b-4 mar-t-3 txt-rig pos-rel">

				<div class="texts txt-lef inlb">

					<!-- Description -->
					<p class="desc mar-b-2 load slide-left ld-3">
						<?= place_text('home-feature-3') ?>
					</p>

					<!-- Button -->
					<a class="skill-btn txt-rig load slide-left ld-6" href="<?= html_link('drone') ?>">

						<h1 class="skill-btn-txt">Esplora</h1>

						<div class="skill-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4 -->
	<section id="skill4" class="skill pos-rel">

		<div class="background1 background bgr"></div>

		<!-- Background -->
		<div class="main-wrap pos-rel">

			<div class="background2 background bgr"></div>

			<!-- Content -->
			<div class="grid pad-v-7 pos-rel">

				<!-- Image -->
				<div class="image-box inlb">

					<div class="load slide-bottom ld-4">
						<div class="image" <?= background_image('skill4.webp') ?>></div>
						<?= place_image('home/skill4') ?>
					</div>

					<p class="img-desc txt-ls1 mar-t-05 txt-rig load slide-bottom ld-5">
						<a href="<?= html_link('projects/work?id=3') ?>">OASI MONTANA<br>stampa 3d</a>
					</p>

				</div>

				<!-- Texts -->
				<div class="texts inlb pad-v-3 pad-l-3">

					<!-- Title -->
					<h2 class="title load slide-right">
						<span class="txt-c1">Stampa</span> 3D
					</h2>

					<!-- Description -->
					<p class="desc mar-b-5 load slide-left ld-3">
						<?= place_text('home-feature-4') ?>
					</p>

					<!-- Button -->
					<a href="<?= html_link('printing') ?>" class="skill-btn load slide-left ld-6">

						<h3 class="skill-btn-txt">Esplora</h3>

						<div class="skill-btn-icon center-items">
							<div class="bgr-c1 icon" <?= icon_svg('navigation/arrow1-right') ?>></div>
						</div>

					</a>
				</div>

			</div>
		</div>

	</section>

</div>