<section id="menu">
	<div class="floating">
		<div class="menu-wrapper">
			<div class="categories">

				<!-- Title -->
				<a class="header" href="/">
					<div class="logo icon bgr-wht" <?= img_svg(__LOGO__ . 'logo.svg') ?>></div>
					<h1 class="title txt-low"><?= sysData('name') ?></h1>
				</a>

				<!-- Admin sections -->
				<div class="group">

					<!-- Home link -->
					<div class="category <?= !$current_section ? 'active' : '' ?>">
						<a href="<?= html_link() ?>" class="title-box grid">
							<div class="highlight"></div>
							<div class="icon-box">
								<?= icon_embed('home') ?>
							</div>
							<p class="title txt-line"><?= __('Panel') ?></p>
						</a>
					</div>

					<!-- Navigation -->
					<?php foreach ($menu['categories'] as $category) { ?>

						<!-- Menu category -->
						<div class="category <?= $category['checked'] ? 'active' : '' ?>">


							<!-- Title box -->
							<div class="title-box grid">
								<div class="highlight"></div>
								<div class="icon-box">
									<?= icon_embed(__APP_ICONS__ . 'navigation/' . $category['slug']) ?>
								</div>
								<p class="title txt-line"><?= $category['name'] ?></p>
							</div>

							<!-- Dropdown -->
							<div class="ddown" style="--count: <?= $category['count'] ?>">

								<?php foreach ($category['sections'] as $i => $section) { ?>

									<a href="<?= $section['url'] ?>" class="link-box <?= $section['checked'] ? 'active' : '' ?>">
										<div class="square square-<?= $i % 5 + 1 ?>"></div>
										<p class="link txt-line">
											<?= $section['name'] ?>
										</p>
									</a>

								<?php } ?>

							</div>
						</div>

					<?php } ?>

				</div>
			</div>
		</div>

		<!-- Mobile open menu icon -->
		<div id="open-menu" class="icon-box">
			<?= icon_embed('navigation/arrow1-right') ?>
		</div>
	</div>
</section>