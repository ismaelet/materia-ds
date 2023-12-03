{% block content %}

<input type="hidden" name="url" value="<?php if (isset($_GET['url'])) echo $_GET['url']; ?>">

<div class="load slide-left">
	<input type="text" name="username" id="username" class="inp" placeholder="Username" required>
</div>

<div class="load slide-right">
	<input type="password" name="password" id="password" class="inp" placeholder="Password" required>
</div>

<?php if ($error) { ?>
	<p class="inp err load slide-right">Dati di accesso errati</p>
<?php } ?>

<label class="cbx-box mar-t-1 blk load slide-right">

	<input type="checkbox" class="cbx cbx-mirror" name="remember" checked>

	<div class="cbx-icon"></div>

	<p class="cbx-txt txt-c">Resta connesso</p>

</label>

<div class="form-foot">

	<div class="load slide-right">
		<button type="submit" name="submit" id="submit" class="mbtn">Log In</button>
	</div>

</div>

{% end content %}