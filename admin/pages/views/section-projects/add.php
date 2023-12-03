{% block page-body %}

<!-- Main content -->
<div class="main-content grid gap2">

	<!-- Item data -->
	<section class="form">
		<h3 class="form-title">Dati del progetto</h3>
		<div class="form-content">
			<div class="form-inputs">
				<?php generate_form($itemInputs) ?>
			</div>
		</div>
	</section>

	<!-- Cover -->
	<section class="form">
		<h3 class="form-title">Immagine di copertina</h3>
		<div class="form-content">

			<?php if ($item->id && file_exists(__PUBLIC_SERVER_ROOT__ . $item->cover)) { ?>

				<div class="cover" id="cover">

					<div class="item-img cover-img stack-content center-items">

						<img src="<?= file_public_url($item->cover) ?>" alt="" loading="lazy" class="img-fill">

						<div class="item-img-overlay fill-all center-items pos-rel">
							<div class="flex gap2">

								<!-- Replace the image -->
								<input type="file" class="img-file hidden" name="cover-img" accept=".jpg, .png, .jpeg, .mp4">
								<button type="submit" class="upload-img hidden" name="upload-cover"></button>
								<div class="item-img-upload item-img-icon icon-box fill-f js-img-trigger">
									<?= icon_embed('upload') ?>
								</div>

							</div>
						</div>
					</div>

				</div>

			<?php } else { ?>

				<div class="form-field">
					<p class="">Seleziona l'immagine di copertina</p>

					<?php if ($item->id) { ?>
						<button type="submit" class="upload-img hidden" name="upload-cover"></button>
						<input type="file" class="inp" name="cover-img" multiple accept=".jpg, .png, .jpeg" onchange="$(this).prev().click()">
					<?php } else { ?>
						<input type="file" class="inp" name="cover-img" multiple accept=".jpg, .png, .jpeg">
					<?php } ?>

				</div>

			<?php } ?>

		</div>
	</section>

	<!-- Images -->
	<section class="form">
		<h3 class="form-title">Galleria</h3>
		<div class="form-content">

			<?php if ($item->id && $item->images && !empty($item->images)) { ?>

				<p class="mar-b-2 flex flex-wrap gap05 ha-cen va-cen">
					<span class="icon text-icon" <?= icon_svg('move') ?>></span>
					Puoi trascinare le immagini per riordinarle
				</p>

				<div class="item-gallery" id="gallery">
					<div class="item-imgs" id="item-imgs">

						<?php foreach ($item->images as $imgId => $img) { ?>

							<div class="item-img stack-content center-items">
								<input type="hidden" name="images[]" value="<?= $imgId ?>">

								<img src="<?= file_public_url($img[400]) ?>" alt="" loading="lazy" class="img-fill">

								<div class="item-img-overlay fill-all center-items pos-rel">
									<div class="flex gap2">

										<!-- Replace the image -->
										<input type="file" class="img-file hidden" name="img-file-<?= $imgId ?>" accept=".jpg, .png, .jpeg, .mp4">
										<button type="submit" class="upload-img hidden" name="upload-img[]" value="<?= $imgId ?>"></button>
										<div class="item-img-upload item-img-icon icon-box fill-f js-img-trigger">
											<?= icon_embed('upload') ?>
										</div>

										<!-- Delete the image -->
										<button type="submit" class="delete-img hidden" name="delete-img[]" value="<?= $imgId ?>" onclick="return confirm('Confermi di voler eliminare questa immagine?')"></button>
										<div class="item-img-delete item-img-icon icon-box fill-f">
											<?= icon_embed('delete') ?>
										</div>

									</div>
								</div>
							</div>

						<?php } ?>

					</div>

					<!-- Upload a new image -->
					<div class="item-img item-img_empty stack-content center-items">
						<div class="fill-all js-img-trigger"></div>
						<input type="file" class="img-file hidden" name="new-img-files[]" accept=".jpg, .png, .jpeg">
						<button type="submit" class="upload-img hidden" name="upload-img"></button>
						<div class="item-img-add item-img-icon icon-box fill-text-color">
							<?= icon_embed('add') ?>
						</div>
					</div>

				</div>

			<?php } else { ?>

				<div class="form-field">
					<p class="">Seleziona le immagini del progetto</p>

					<?php if ($item->id) { ?>
						<button type="submit" class="upload-img hidden" name="upload-img"></button>
						<input type="file" class="inp" name="new-img-files[]" multiple accept=".jpg, .png, .jpeg" onchange="$(this).prev().click()">
					<?php } else { ?>
						<input type="file" class="inp" name="new-img-files[]" multiple accept=".jpg, .png, .jpeg">
					<?php } ?>

				</div>

			<?php } ?>

		</div>
	</section>
</div>

<!-- Side bar -->
<aside class="side-bar">

	<!-- Status, inventory, price -->
	<section class="form">
		<h3 class="form-title">Impostazioni del progetto</h3>

		<div class="form-content">
			<div class="form-inputs">

				<div class="form-field">
					<p class="form-lbl">Stato del progetto</p>
					<select class="sel" name="status">
						<option value="0" <?= $item->status ? '' : 'selected' ?>>Bozza</option>
						<option value="1" <?= !$item->id || $item->status ? 'selected' : '' ?>>Pubblicato</option>
					</select>
				</div>

				<div class="form-field">
					<p class="form-lbl">Dimensione anteprima</p>
					<select class="sel" name="size">
						<option value="normal" <?= $item->size == 'normal' ? 'selected' : '' ?>>Normale</option>
						<option value="horizontal" <?= $item->size == 'horizontal' ? 'selected' : '' ?>>Larga</option>
						<option value="vertical" <?= $item->size == 'vertical' ? 'selected' : '' ?>>Alta</option>
						<option value="big" <?= $item->size == 'big' ? 'selected' : '' ?>>Grande</option>
					</select>
				</div>

			</div>
		</div>
	</section>

	<?php if ($item->id) { ?>
		<!-- SEO preview -->
		<section class="form">
			<h3 class="form-title">Preview SEO</h3>

			<div class="form-content">
				<p class="seo-url"><?= $item->staticUrl ?></p>
				<h3 class="seo-title"><?= $item->title ?></h3>
				<p class="seo-text txt-line3"><?= $item->description ?></p>
			</div>
		</section>
	<?php } ?>

</aside>

{% end page-body %}