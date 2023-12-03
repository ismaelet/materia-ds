<?php foreach ($results as $key => $result) { ?>

	<form method="POST" id="row<?= $key ?>" class="row">

		<?php if (isset($rowLinks)) {
			$rowLink = str_replace('{{id}}', $result[count($result) - 1]['value'], $rowLinks);
			echo '<a class="row-link" href="' . $rowLink . '">';
		} ?>

		<?php foreach ($result as $entry) {

			if (in_array($entry['type'], ['show', 'find'])) {
				/*
				* TYPES: SHOW AND FIND
				* name: used to add the class field-*name*
				* value: field content
				* maxlenght: if set, limit the maximum number of characters
				* overflow: if set, the field will not create new lines
				* custom-class: if set, it will add this parameter value as a class
				*/

				$showedValue =
					$entry['maxlenght'] && strlen($entry['value']) > $entry['maxlenght'] ?
					substr($entry['value'], 0, $entry['maxlenght']) . '...' :
					$entry['value'];
		?>
				<div class="
					field field-<?= $entry['name'] ?>
					text-field
					<?= $entry['overflow'] ? 'overflow' : '' ?>
					<?= $entry['custom-class'] ?? '' ?>
				">

					<p class="text-short"><?= $showedValue ?></p>

					<?php if ($entry['overflow']) { ?>
						<p class="text-full"><?= $entry['value'] ?></p>
					<?php } ?>

				</div>

			<?php } else if ($entry['type'] == 'img') {
				/*
				* TYPE: IMG
				* src: image file
				* max-size: maximum width of the image, in rem
				*/
			?>
				<div class="list-img-field field">
					<img class="list-img" src="<?= $entry['src'] ?>" alt="" loading="lazy" style="<?= $entry['max-size'] ? '--_max-size: ' . $entry['max-size'] . 'rem;' : '' ?>">
				</div>

			<?php } else if ($entry['type'] == 'boolean-icon') {
				/*
					* TYPE: BOOLEAN-ICON
					* value: can be 0 or 1
					*/
			?>

				<div class="field">
					<?php if ($entry['value']) { ?>
						<div class="list-icon active icon-box"><?= icon_embed('correct') ?></div>
					<?php } else { ?>
						<div class="list-icon inactive icon-box fill-red"><?= icon_embed('close') ?></div>
					<?php } ?>
				</div>

			<?php } else if ($entry['type'] == 'custom') {
				/*
				* TYPE: CUSTOM
				* content: custom html content
				*/
			?>
				<div class="field">
					<?= $entry['content'] ?>
				</div>

			<?php } else if ($entry['type'] == 'hidden') {
				/*
			* TYPE: HIDDEN
			* name: input name
			* value: input value
			*/
			?>
				<input type="hidden" name="<?= $entry['name'] ?>" value="<?= $entry['value'] ?>">

		<?php } else if ($entry['type'] == 'btn')
				include('button.php');
		} ?>

	</form>

	<?php if (isset($rowLinks)) echo '</a>' ?>

<?php }
