<header class="
	<?= $header['color'] ?>
	<?= $header['floating'] ? 'floating' : false ?>
	<?= $header['sticky'] ? 'sticky' : false ?>
">

	<div class="h-content">
		<section class="h-bars">

			<!-- Left bar -->
			<div class="h-bar">
				<?php foreach ($header['structure']['left'] as $h_component) echo $headerComponent[$h_component]; ?>
			</div>

			<!-- Middle bar -->
			<div class="h-bar">
				<?php foreach ($header['structure']['center'] as $h_component) echo $headerComponent[$h_component]; ?>
			</div>

			<!-- Right bar -->
			<div class="h-bar">
				<?php foreach ($header['structure']['right'] as $h_component) echo $headerComponent[$h_component]; ?>
			</div>

			<!-- Mobile menu -->
			<div id="h-mob-menu" class="hanging-menu <?= $header['force-mob'] ? '' : 'mob1024' ?>">

				<div class="background bgr"></div>

				<!-- Links -->
				<div id="h-mob-links">

					<?php foreach ($header['links'] as $h_link) { ?>

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

		</section>

	</div>

</header>