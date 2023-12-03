$(window).ready(function () {
	var loc = ''

	//loading
	setTimeout(function () {
		$('.svg-logo').addClass('active')
	}, 200)

	//smooth scrolling
	$('html').addClass('smooth-scrolling')

	//scroller
	scroller()

	$(window).scroll(function () {
		scroller()
	})

	function scroller() {
		const scroller = $('#scroller')
		const top = $(window).scrollTop()
		const window_bot = top + $(window).height()
		const main = $('main').height()

		const topSkill1 = $('#skill1').offset().top
		const topSkill2 = $('#skill2').offset().top
		const topSkill3 = $('#skill3').offset().top
		const topSkill4 = $('#skill4').offset().top
		const topProjects = $('#projects').offset().top
		const topContacts = $('#contacts').offset().top

		if ($(window).width() > 1400) {
			if (top) {
				scroller.removeClass('start')
			} else {
				scroller.addClass('start')
			}

			if (window_bot < main) {
				scroller.removeClass('end')
			} else {
				scroller.addClass('end')
			}
		} else {
			if (top) {
				scroller.removeClass('start')
			} else {
				scroller.addClass('start')
			}
		}

		if (top < topSkill1 - 1) {
			if (loc != 'slider') {
				loc = 'slider'
				$('.scroll-up').attr('href', '#slider')
				$('.scroll-down').attr('href', '#skill1')
			}
		} else if (top < topSkill2 - 1) {
			if (loc != 'skill1') {
				loc = 'skill1'
				$('.scroll-up').attr('href', '#slider')
				$('.scroll-down').attr('href', '#skill2')
			}
		} else if (top < topSkill3 - 1) {
			if (loc != 'skill2') {
				loc = 'skill2'
				$('.scroll-up').attr('href', '#skill1')
				$('.scroll-down').attr('href', '#skill3')
			}
		} else if (top < topSkill4 - 1) {
			if (loc != 'skill3') {
				loc = 'skill3'
				$('.scroll-up').attr('href', '#skill2')
				$('.scroll-down').attr('href', '#skill4')
			}
		} else if (top < topProjects - 1) {
			if (loc != 'skill4') {
				loc = 'skill4'
				$('.scroll-up').attr('href', '#skill3')
				$('.scroll-down').attr('href', '#projects')
			}
		} else if (top < topContacts - 1) {
			if (loc != 'projects') {
				loc = 'projects'
				$('.scroll-up').attr('href', '#skill4')
				$('.scroll-down').attr('href', '#partners')
			}
		} else {
			if (loc != 'contacts') {
				loc = 'contacts'
				$('.scroll-up').attr('href', '#partners')
				$('.scroll-down').attr('href', '#contacts')
			}
		}
	}
})

//loading
$(window).on('load', function () {
	const time = $('#load-time').data('time')

	if ($('#load-pan').length) {
		setTimeout(function () {
			$('#load-pan').fadeOut(400)
		}, time)
	}
})
