$(document).ready(function () {
	const openModal = $('[data-function="open-modal"]')
	const closeModal = $('.modal, [data-function="close-modal"]')

	openModal.click((e) => {
		const target = e.target.getAttribute('data-target')
		const modal = document.querySelector('#' + target)

		document.querySelector('body').classList.add('fixed')

		modal.classList.add('open')
	})

	closeModal
		.click((e) => {
			const modal = e.target.closest('.modal')

			document.querySelector('body').classList.remove('fixed')

			modal.classList.remove('open')
		})
		.children()
		.click(function (e) {
			return false
		})

	/*
	 * OLD
	 */
	//open
	$('.lbox-open').click(function () {
		const tar = $($(this).data('tar'))

		if ($('.lbox.open').length) {
			$('.lbox').removeClass('open')
		} else {
			$('body').addClass('fixed')
		}

		tar.addClass('open')
	})

	//close
	$('.lbox').click(function (e) {
		if (e.target != this) return

		close()
	})

	$('.lbox-close').click(function () {
		close()
	})
	$('.lbox .close-icon').click(function () {
		close()
	})

	function close() {
		$('.lbox').removeClass('open')
		$('body').removeClass('fixed')
	}
})
