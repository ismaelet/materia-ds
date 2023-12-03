<?php

/*
* Desktop navigation bar
*/
$headerComponent['desktop-navigation'] = h_desktop_navigation($header);

function h_desktop_navigation($header) {

	global $view;

	//open tag
	$content = '<nav class="h-nav desk1024">';

	//generate links
	foreach ($header['links'] as $link) {
		if (empty($link['mobile'])) {

			//main link
			$content .= '
				<div class="h-link">
					<a
						href="' . $link['url'] . '"
						' . (isset($link['megamenu']) ? 'data-function="open-megamenu" data-target="' . $link['megamenu'] . '"' : false) . '
					>
						<p class="h-link-title ' . ($view->loc == $link['loc'] ? 'active' : false) . '">
							' . $link['title'] . '
							' . (isset($link['drop']) ? '<span class="h-ddown-icon">&#x25BC;</span>' : false) . '
						</p>
					</a>
				';

			//dropdown
			if (isset($link['drop'])) {

				$content .= '<div class="h-ddown bgr-c1">';

				foreach ($header['dropdown'][$link['drop']] as $dropdownLink) {
					$content .= '
						<a href="' . $dropdownLink[1] . '">
							<p class="h-ddown-link">' . $dropdownLink[0] . '</p>
						</a>
					';
				}

				$content .= '</div>';
			}

			$content .= '</div>';
		}
	}

	//close tag
	$content .= '</nav>';

	return $content;
}

/*
* Mobile icon
*/
$headerComponent['mobile-navigation'] = '
	<div class="h-mob-icon" data-function="mobile-menu-toggle">
		<div class="h-mob-icon-part">
			<div class="h-mob-icon-line"></div>
		</div>
		<div class="h-mob-icon-part">
			<div class="h-mob-icon-line"></div>
		</div>
		<div class="h-mob-icon-part">
			<div class="h-mob-icon-line"></div>
		</div>
	</div>
';

/*
* Logo
*/
$headerComponent['logo'] = '
	<a class="h-logo icon-box" href="' . html_link() . '">
		' . icon_embed(__LOGO__ . 'logo') . '
	</a>
';

/*
* Name
*/
$headerComponent['name'] = '
	<div class="name-box">
		<a href="' . html_link() . '">
			<h3 class="name desk1024">' . $header['name'] . '</h3>
		</a>

		<a href="' . html_link() . '">
			<h3 class="name mob1024">' . $header['name-mob'] . '</h3>
		</a>
	</div>
';

/*
* Search bar
*/
$headerComponent['search'] = '
	<form class="h-search" action="' . html_link('shop#shop') . '" method="GET">
		<input type="checkbox" class="hidden" id="h-srch-cbx">
		<label class="h-search-cta stack-items" for="h-srch-cbx">
			<div class="h-search-icon icon-box">
				' . icon_embed('search') . '
			</div>
		</label>

		<div class="h-search-body stack-items">
			<h3 class="h-search-title clickable">' . __('Search') . '	</h3>
			<div class="h-search-inp">
				<input type="text" name="search" placeholder="' . __('Search') . '">
			</div>
		</div>
	</form>
';

$headerComponent['search-simple'] = '
	<form class="h-search h-search_simple" action="' . html_link('shop#shop') . '" method="GET">
		<input type="checkbox" class="hidden" id="h-srch-cbx">
		<div class="h-search-body stack-items">
			<div class="h-search-inp">
				<input type="text" name="search" placeholder="' . __('Search') . '">
			</div>
		</div>
		
		<label class="h-search-cta stack-items" for="h-srch-cbx">
			<div class="h-search-icon icon-box">
				' . icon_embed('search') . '
			</div>
		</label>
	</form>
';

/*
* Languages
*/
/*$headerComponent['languages'] = '

	<div class="h-languages load ld-bot ld-del2">

			<div class="h-language-icon h-language-icon_active bgr-fill" <?= icon_css('languages/' . $_SESSION['language']) ?>></div>

			<div class="h-languages-ddown">

				<?php foreach ($header['languages'] as $h_lang) { ?>

					<a href="?lang=<?= $h_lang[1] ?>" class="h-language <?= $_SESSION['language'] == $h_lang[1] ? 'active' : '' ?>">

						<div class="h-language-icon bgr-fill" <?= icon_css('languages/' . $h_lang[1]) ?>></div>

						<p class="h-language-name"><?= $h_lang[0] ?></p>

					</a>

				<?php } ?>

			</div>

	</div>
';*/

/*
* Theme switch
*/
/*$headerComponent['theme-switch'] = '
					<!-- Theme switch -->
					<div class="h-theme-switch h-nav-icon">
						<div class="light-icon icon-box" data-theme="light">
							<?= icon_embed('sun') ?>
						</div>
						<div class="dark-icon icon-box" data-theme="dark">
							<?= icon_embed('moon') ?>
						</div>
					</div>

*/

/*
* Cart icon
*/
$headerComponent['cart'] = '
	<a class="h-cart h-nav-icon icon-box stack-items" href="' . html_link('cart') . '">
		' . icon_embed('bag') . '
		<p class="h-cart-num txt-bold">' . $user->cart_count . '</p>
	</a>
';

/*
* Wishlist icon
*/
$headerComponent['wishlist'] = '
	<a class="h-wishlist h-nav-icon icon-box stack-items" href="' . html_link('wishlist') . '">
		' . icon_embed('love') . '
	</a>
';

/*
* Profile icon
*/
$headerComponent['profile'] = '
	<a class="h-profile h-nav-icon icon-box stack-items" href="' . html_link('profile') . '">
		' . icon_embed('profile') . '
	</a>
';
