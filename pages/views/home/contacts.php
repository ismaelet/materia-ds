<div id="contacts" class="pos-rel">

	<div class="grid2 va-top grid-pad-o-4">

		<section id="links" class="pos-rel">

			<h1 class="title txt-cen txt-3rem load slide-top">I nostri <span class="txt-bold">contatti</span></h1>

			<p class="desc txt-cen txt-11rem txt-lh2 mwid480 mar-h-auto load slide-top ld-3">
				<?= place_text('home-contacts') ?>
			</p>

			<div id="links-icons" class="flex ha-cen gap2 mar-t-3 load slide-top ld-5">
				<a href="<?= sysData('cont_inst_link') ?>" class="cont-icon icon-box block fill-c3 fill-c1-h">
					<?= icon_embed('contacts/instagram') ?>
				</a>
				<a href="<?= sysData('cont-mail_link') ?>" class="cont-icon icon-box block fill-c3 fill-c1-h">
					<?= icon_embed('contacts/mail') ?>
				</a>
			</div>

			<div class="image mar-h-auto load slide-bottom ld-7">
				<img class="img-fit mar-t-4" src="<?= file_url('contacts.webp') ?>">
				<?= place_image('home/contacts') ?>
			</div>

		</section>

		<section id="form-sec" class="pos-rel">

			<div id="cont-bgr1" class="cont-bgr"></div>
			<div id="cont-bgr2" class="cont-bgr"></div>

			<form class="contact-form pos-rel" id="contact-form" method="POST" autocomplete="off" action="#contact-form">

				<div id="form-anch" class="anchor"></div>

				<h1 class="title txt-cen txt-3rem mar-b-5 load slide-bottom">Dubbi? <span class="txt-bold">Scrivici</span></h1>

				<?php if ($sent) { ?>
					<p class="inp ok load slide-bottom">Messaggio inviato, ti risponderemo al più presto</p>
				<?php } ?>

				<?php if ($error == 'mail_bad') { ?>
					<p class="inp err load slide-bottom">Errore: indirizzo email non riconosciuto. Puoi comunque a scriverci direttamente a <?= sysData('cont-mail_link'); ?>, invece di usare questo modulo.</p>
				<?php } ?>

				<?php if ($error == 'word_bad') { ?>
					<p class="inp err load slide-bottom">Errore: il messaggio non ha superato i nostri filtri anti-spam. Puoi comunque scriverci direttamente a <?= sysData('cont-mail_link'); ?>, invece di usare questo modulo.</p>
				<?php } ?>

				<div class="field load slide-bottom ld-3">
					<div class="form-lbl-box">
						<p class="form-lbl">Nome e cognome</p>
					</div>
					<input type="text" name="name" class="form-inp" onfocus="$(this).prev().addClass('focus')" onblur="if (!$(this).val().length) {$(this).prev().removeClass('focus')}" required>
				</div>

				<div class="field load slide-bottom ld-5">
					<div class="form-lbl-box">
						<p class="form-lbl">Indirizzo email</p>
					</div>
					<input type="email" name="mail" class="form-inp" onfocus="$(this).prev().addClass('focus')" onblur="if (!$(this).val().length) {$(this).prev().removeClass('focus')}" required>
				</div>

				<div class="field load slide-bottom ld-7">
					<div class="form-lbl-box">
						<p class="form-lbl">Testo del messaggio</p>
					</div>
					<textarea name="text" class="form-textarea" maxlength="500" onfocus="$(this).prev().addClass('focus')" onblur="if (!$(this).val().length) {$(this).prev().removeClass('focus')}" required></textarea>
				</div>

				<div class="txt-cen mar-t-4 load slide-bottom ld-3">
					<button type="submit" id="submit" name="submit" class="sbtn">Invia</button>
				</div>
			</form>

		</section>
	</div>
</div>