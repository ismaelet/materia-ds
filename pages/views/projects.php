{% block main %}

<div class="main-wrap pad-t-10 pad-b-3">
	<h1 class="main-title txt-cen txt-upp mar-t-3 mar-b-3 load slide-bottom">Progetti</h1>

	<p class="mwid-800 mar-h-auto mar-b-5 txt-1rem txt-ls2 txt-cen load slide-bottom ld-2">
		<span class="hidden">Per noi progettare significa trasformare e modellare la materia in tutti i suoi stati, per creare spazi dove trascorrere armoniosamente l’esistenza.<br><br></span>
		<?= place_text('projects-text') ?>
	</p>

	<div id="projects">

		<?php
		$i = 0;

		while ($project = $projects->fetch_assoc()) {
			$i++;
			$project = new Project($project['id']);
		?>

			<a class="project project--<?= $project->size ?> load slide-bottom ld-<?= ($i % 3) * 1 ?>" href="<?= html_link('projects/work?id=' . $project->id) ?>">
				<div class="content stack-items">
					<img class="img-fill" src="<?= file_url('/uploads/projects/' . $project->id . '/cover.jpg') ?>" alt="" loading="lazy">
					<div class="overlay fill-all"></div>
					<div class="txt-cen desk480 pos-rel">
						<h3 class="title txt-f txt-bold txt-upp txt-15rem"><?= $project->title ?></h3>
						<p class="date txt-7 txt-1rem txt-bold mar-t-05"><?= $project->year ?></p>
					</div>
				</div>

				<!-- <h3 class="mar-t-05 mar-b-1 txt-ls1 txt-f txt-cen txt-upp txt-12rem mob480"><?= $project->title ?></h3> -->
			</a>

		<?php } ?>

	</div>
</div>

{% end main %}