<footer class="pad-t-4">

	<div id="f-contacts" class="flex ha-cen gap2">
		<a href="<?= sysData('cont_inst_link') ?>" class="f-contact block icon-box fill-e fill-c1-h">
			<?= icon_embed('contacts/instagram') ?>
		</a>
		<a href="<?= sysData('cont-mail_link') ?>" class="f-contact block icon-box fill-e fill-c1-h">
			<?= icon_embed('contacts/mail') ?>
		</a>
	</div>

	<div id="f-links" class="flex ha-cen gap2 mar-t-2">
		<h1 class="f-link"><a href="<?= html_link('') ?>" class="f-links">Home</a></h1>
		<h1 class="f-link"><a href="<?= html_link('projects') ?>" class="f-links">Progetti</a></h1>
		<h1 class="f-link"><a href="<?= html_link('contacts') ?>" class="f-links">Contatti</a></h1>
	</div>

	<p id="footer-notes" class="txt-7 txt-lh2 txt-cen pad-v-3">
		Copyright © <?= getdate()['year'] ?> <?= sysData('name_full') ?></a>
		<br>Sito web realizzato da <a class="txt-c1-h" href="https://www.facebook.com/ismaele462">Ismaele Tuffanelli</a>
	</p>

</footer>