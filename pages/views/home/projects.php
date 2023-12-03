<div id="projects" class="pad-v-10">
	<div class="main-wrap">
		<div id="images" class="txt-0">

			<div id="project2_mob" class="project mob768 focus">
				<div class="image bgr load slide-bottom" <?= background_image('project-2.webp') ?>>
					<div class="image-overlay bgr"></div>
				</div>
			</div>

			<?php for ($i = 1; $i < 4; $i++) { ?>

				<div class="<?= $i == 2 ? 'desk768' : '' ?>">
					<div id="project<?= $i ?>" class="project <?= $i == 2 ? 'focus' : '' ?>">
						<div class="image bgr load slide-bottom ld-<?= 1 + $i ?>" <?= background_image('project-' . $i . '.webp') ?>>
							<div class="image-overlay bgr"></div>
							<?= $i == 2 ? place_image('home/project-2') : '' ?>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>

		<div class="txt-cen">
			<div class="load slide-bottom">
				<h1 class="title txt-e txt-bold txt-upp">Progetti</h1>
			</div>

			<!-- <p class="desc txt-c3 txt-1rem txt-ls1 txt-lh2 pad-o-2 mar-h-auto mar-b-3 load slide-bottom ld-3">
				In quest'area del sito troverai alcuni delle nostre realizzazioni: dalla progettazione di semplici spazi esterni alla creazione di veri e propri centri benessere dotati di ogni comfort. Grazie alle immagini potrai vedere qual è il nostro esatto metodo di lavoro, la qualità finale dei nostri render e alcuni progetti completi.
			</p> -->

			<div class="load slide-bottom ld-3">
				<a class="sbtn no-mob" href="<?= html_link('projects') ?>">Esplora i progetti</a>
			</div>
		</div>
	</div>
</div>