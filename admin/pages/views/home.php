{% block content %}

<div id="grid" class="gap2">

	<!-- Panel -->
	<section class="panel">

		<div class="body">
			<div class="panel-header">
				<div class="panel-icon icon-box">
					<?= icon_embed(__APP_ICONS__ . 'navigation/projects') ?>
				</div>
				<h1 class="title">Progetti</h1>
			</div>
			<p class=""><strong><?= $projectsCount ?></strong> progetti aggiunti</p>
		</div>

		<div class="footer">
			<a href="projects/list" class="sbtn">Lista dei progetti</a>
			<a href="projects/add" class="pbtn">Aggiungi un progetto</a>
		</div>

	</section>

</div>

{% end content %}