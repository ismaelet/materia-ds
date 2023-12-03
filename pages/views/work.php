{% block main %}

<div class="main-wrap mar-t-7">

	<!-- Navigation -->
	<p class="navigation txt-upp txt-ls3 txt-a"><a class="txt-c1-h" href="<?= html_link('projects') ?>">Progetti</a><span class="divider">></span><?= $project->title ?></p>

	<!-- Title -->
	<div class="txt-cen mar-t-4">
		<h1 id="title" class="txt-2rem txt-wht txt-upp txt-bold"><?= $project->title ?></h1>
		<h3 class="location txt-med txt-b txt-ls1 txt-12rem mar-t-1">
			<?= empty($project->location) ? '' : $project->location . ' &middot;' ?>
			<span class="txt-c1"><?= $project->year ?></span>
		</h3>
	</div>

	<p class="location txt-upp txt-b txt-ls1 txt-12rem mar-t-5 txt-lef">Stato: <span class="txt-sbold txt-e"><?= $project->stage ?></span></p>

	<!-- Image -->
	<img class="wid-100 mar-t-1 lbox-open" id="image" data-tar="#lbox-cover" src="<?= file_url($project->cover) ?>" alt="">

	<!-- Description -->
	<p id="desc" class="txt-12rem txt-e br2 br-c1 pad2 txt-lh2 mar-t-1 mwid1200"><?= $project->description ?></p>

	<!-- More images -->
	<div id="more" class="mar-t-5">

		<h2 class="txt-12rem txt-upp txt-bold">Altre <span class="txt-c1">immagini</span></h2>

		<div class="images mar-t-2">

			<?php foreach ($project->images as $key => $img) { ?>

				<div class="image clickable lbox-open stack-items" data-tar="#lbox<?= $key ?>">

					<img src="<?= file_url($img[400]) ?>" alt="" loading="lazy">

					<div class="overlay fill-all"></div>

					<div class="icon-box fill-wht fill-c1-h zoom-icon round">
						<div class="icon-box">
							<?= icon_embed('zoom') ?>
						</div>
					</div>

				</div>

			<?php } ?>

		</div>

	</div>

	<?php if ($model) { ?>

		<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

		<!-- Viewer -->
		<section id="viewer-box" class="mar-t-3">

			<h1 class="txt-e txt-12rem txt-upp txt-bold">Render <span class="txt-c1">3D</span></h1>

			<div>

				<model-viewer id="viewer" src="<?= file_url('/uploads/projects/' . $project->id . '/model.glb') ?>" alt="" ar ar-modes="webxr scene-viewer quick-look" environment-image="neutral" shadow-intensity="1" shadow-softness=".5" camera-controls></model-viewer>

			</div>

		</section>

	<?php } ?>

	<!-- Lightboxes -->
	<section id="light-boxes">

		<div id="lbox-cover" class="lbox">
			<div class="close-icon thin invert"></div>
			<img src="<?= file_url($project->cover) ?>" alt="" class="lbox-img lbox-close">
		</div>

		<?php foreach ($project->images as $key => $img) { ?>

			<div id="lbox<?= $key ?>" class="lbox">
				<div class="close-icon thin invert"></div>
				<img src="<?= file_url($img[1920]) ?>" alt="" class="lbox-img lbox-close">
			</div>

		<?php } ?>

	</section>

</div>

{% end main %}