{% block main %}

<div id="bgr" class="bgr" <?= background_image('bgr.jpg') ?>></div>

<div id="content" class="grid hei-100 just-cen">

	<div id="title-box" class="txt-cen">

		<h1 id="title" class="txt-upp txt-wht txt-bold pad-h-1">Errore 404</h1>
		<p id="stitle" class="txt-15rem txt-wht mar-t-10px">Pagina non trovata</p>

		<a href="<?= html_link() ?>">
			<p class="button txt-wht txt-1rem txt-upp pad-h-2 inlb mar-t-2 br-c1-h">Torna alla home</p>
		</a>

	</div>

</div>

{% end main %}