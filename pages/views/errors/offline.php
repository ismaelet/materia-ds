{% block main %}

<!-- Content -->
<div class="hei-100 grid va-cen">

	<div class="bgr-c2 txt-cen pad-v-2">

		<div id="logo" class="inlb img cont invert" <?= background_image('/app/resources/logo/logo.svg') ?>></div>

		<h1 id="title" class="txt-3rem txt-wht mar-t-1 txt-bold">Under Construction</h1>

		<p class="txt-a pad-o-2 mar-t-1">This website is currently under construction. We'll be back online as soon as possible.</p>

	</div>
	
</div>

<!-- Login button -->
<form id="login" class="wid-100 txt-cen" method="POST">

	<button type="submit" name="submit" id="login-txt" class="clickable txt-c1 txt-f-h fill-c1 fill-wht-h txt-09rem">

		<span class="btn-icon icon-box small">
			<?= icon_embed('key') ?>
		</span>

		<span class="btn-txt br-c1 brb1 brb-dashed">Login as administrator</span>

	</button>

</form>

{% end main %}