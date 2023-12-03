<header class="<?= $h_theme['color'] ?> <?= $h_theme['floating'] ? 'floating' : '' ?> <?= $h_theme['sticky'] ? 'sticky' : '' ?>">

	<div id="h-content">

		<div class="background bgr"></div>

		<!-- Left bar -->
		<div class="nav-bar txt-lef">

			<!-- Logo -->
			<?php if ($h_comp['logo']) { ?>

				<a href="<?= html_link() ?>">
					<img src="<?= file_url(__LOGO__ . 'logo.svg') ?>" class="logo invert">
				</a>

			<?php } ?>

			<!-- Name -->
			<?php if ($h_comp['name-bar']) { ?>

				<div class="name-box">

					<a href="<?= html_link() ?>">
						<h2 class="name desk1024"><?= $h_name ?></h2>
					</a>

					<a href="<?= html_link() ?>">
						<h2 class="name mob1024"><?= $h_name_m ?></h2>
					</a>

				</div>

			<?php } ?>

		</div>

		<!-- Middle bar -->
		<div class="nav-bar txt-cen"></div>

		<!-- Right bar -->
		<div class="nav-bar right">

			<?php if (!$h_comp['force-mob']) { ?>

				<!-- Links -->
				<div id="h-links" class="desk1024 inlb">

					<?php foreach ($h_links as $h_link) {

						if (!isset($h_link['mobile']) || !$h_link['mobile']) { ?>

							<!-- Link -->
							<div class="link <?= $view->loc == $h_link['loc'] ? 'active' : '' ?> <?= isset($h_link['drop']) ? 'has-ddown' : '' ?>">

								<a <?= isset($h_link['url']) ? 'href="' . $h_link['url'] . '"' : '' ?>>
									<p class="title ">
										<?= $h_link['title'] ?>
										<?= isset($h_link['drop']) ? '<span class="ddown-icon">&#x25BC;</span>' : '' ?>
									</p>
								</a>

								<?php if (isset($h_link['drop'])) { ?>

									<!-- Dropdown menu -->
									<div class="ddown-menu bgr-blk">

										<?php foreach ($h_drop[$h_link['drop']] as $h_drop_link) { ?>
											<a href="<?= $h_drop_link[1] ?>">
												<p class="ddown-link bgr-c1-h txt-wht-h"><?= $h_drop_link[0] ?></p>
											</a>
										<?php } ?>

									</div>

								<?php } ?>

							</div>

						<?php } ?>
					<?php } ?>
				</div>

			<?php } ?>

			<!-- Language icon -->
			<?php if ($h_comp['lang-bar'] && sysData('multi_lang')) { ?>

				<div id="h-lang-icon" class="inlb">

					<div class="img" <?= icon_css('languages/' . sysData('lang')) ?>></div>

				</div>

			<?php } ?>

			<!-- Mobile menu icon -->
			<input type="checkbox" id="h-mob-open" class="hidden" onclick="$('header').toggleClass('open');">

			<label id="h-mob-icon" class="<?= $h_comp['force-mob'] ? '' : 'mob1024' ?>" for="h-mob-open">
				<div class="line-box">
					<div class="line"></div>
				</div>
				<div class="line-box">
					<div class="line"></div>
				</div>
				<div class="line-box">
					<div class="line"></div>
				</div>
			</label>

		</div>

		<!-- Mobile menu -->
		<div id="h-mob-menu" class="hanging-menu <?= $h_comp['force-mob'] ? '' : 'mob1024' ?>" onClick="$('#h-mob-open').click();">

			<div class="background bgr"></div>

			<!-- Links -->
			<div id="h-mob-links">

				<?php foreach ($h_links as $h_link) { ?>

					<!-- Link -->
					<label class="link">

						<input type="checkbox" class="hidden">

						<a <?= isset($h_link['drop']) ? '' : 'href="' . $h_link['url'] . '"' ?>>
							<p class="title txt-upp">
								<?= $h_link['title'] ?>
								<?= isset($h_link['drop']) ? '<span class="h-dropM-ico">&#x25BC;</span>' : '' ?>
							</p>
						</a>


						<?php if (isset($h_link['drop'])) { ?>

							<!-- Dropdown menu -->
							<div class="ddown-menu">

								<?php foreach ($h_drop[$h_link['drop']] as $h_drop_link) { ?>

									<p class="ddown-link txt-wht-h bgr-c3-h">
										<a href="<?= $h_drop_link[1] ?>">
											<?= $h_drop_link[0] ?>
										</a>
									</p>

								<?php } ?>
							</div>

						<?php } ?>

					</label>

				<?php } ?>

			</div>
		</div>

	</div>
</header>