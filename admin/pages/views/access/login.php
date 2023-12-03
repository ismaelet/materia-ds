{% block main %}

<div class="page-content">

	<!-- Welcome panel -->
	<section class="welcome grid stack-items">
		<div class="welcome-bgr fill-all bgr-fill" <?= background_image('bgr.jpg') ?>></div>

		<?php if ($loginConfig['welcome-text']) { ?>
			<!-- Welcome text -->
			<div class="body pos-rel">
				<h1 class="title txt-f txt-light">Lorem ipsum<br>eu exercitation</h1>

				<p class="txt-wht">
					In non dolore amet sunt incididunt aliqua aute dolor quis eiusmod. Sunt esse fugiat tempor exercitation eiusmod voluptate eu qui tempor esse dolor tempor irure sint commodo. Nostrud consequat fugiat velit id in culpa ut laboris duis in do duis elit irure labore ut. Laboris deserunt in deserunt exercitation dolore cupidatat occaecat exercitation occaecat dolore excepteur est ut.
				</p>
			</div>
		<?php } ?>
	</section>

	<!-- Form -->
	<form method="POST" class="form pos-rel">

		<!-- Header -->
		<div class="form-head">
			<h2 class="title">Login</h2>
		</div>

		<!-- Body -->
		<div class="form-body">

			<?php if ($action == 'like') { ?>
				<p class="warning"><?= __('Before adding a product to your wishlist, you have to login.') ?></p>
			<?php } ?>

			<input type="hidden" name="url" value="<?= $_GET['url'] ?? '' ?>">
			<input type="text" name="username" id="username" class="inp clear-error" placeholder="<?= __('Username') ?>" required>
			<input type="password" name="password" id="password" class="inp clear-error" placeholder="<?= __('Password') ?>" required>

			<?php if ($error) { ?>
				<p class="error"><?= __('Wrong access data') ?></p>
			<?php } ?>

			<div class="options-bar va-cen">
				<?php if ($loginConfig['stay-connected']) { ?>
					<label class="cbx blk">
						<input type="checkbox" name="remember" checked>
						<div class="icon"></div>
						<p class="cbx-txt"><?= __('Stay connected') ?></p>
					</label>
				<?php } ?>

				<?php if ($loginConfig['password-recovery']) { ?>
					<a href="<?= html_link('recover') ?>" class="txt-rig">
						<p class=""><?= __('Forgot the password?') ?></p>
					</a>
				<?php } ?>
			</div>
		</div>

		<!-- Footer -->
		<div class="form-footer">

			<!-- Login -->
			<div class="">
				<button type="submit" name="submit" id="submit" class="pbtn">Log In</button>
			</div>

			<?php if ($loginConfig['register']) { ?>
				<!-- Register -->
				<div class="">
					<a href="<?= html_link('register') ?>" class="sbtn br-c3-h"><?= __('Register') ?></a>
				</div>
			<?php } ?>

		</div>
	</form>
</div>

{% end main %}