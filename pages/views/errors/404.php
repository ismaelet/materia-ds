{% block main %}

<div id="bgr" class="bgr" <?= background_image('bgr.jpg');?>></div>

<div id="content" class="hei-100 center-content">

	<div id="title-box" class="txt-cen pos-rel">

		<h1 id="title" class="txt-upp txt-wht txt-bold pad-o-1">Error 404</h1>
		<p id="stitle" class="txt-15rem txt-wht mar-t-05">Page not found</p>

		<p class="button txt-wht txt-1rem txt-upp pad-o-2 inlb mar-t-2 br-c1-h">
			<a href="<?= html_link() ?>">Back to the homepage</a>
		</p>

	</div>

</div>

{% end main %}