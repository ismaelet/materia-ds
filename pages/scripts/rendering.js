$(document).ready(function() {

	//carousel
	const slidesN = 4;

	var pos = 1

	$('#carousel .arrow').click(function() {

		pos++

		if (pos > slidesN) {
			pos = 1;
		}

		const scroll = (-100 / slidesN) * (pos - 1);

		$('#carousel .images img').removeClass('active');
		$('#carousel .images img[data-id="' + pos + '"]').addClass('active');

		$('#carousel .images').css('transform', 'translateX(' + scroll + '%)')

	})

	//slider
	var dragging = false;

	$('body').on('mousedown', '.draggable', function(e) {
		e.preventDefault()
		sliderDown()
	})

	$('body').on('touchstart', '.draggable', function(e) {
		sliderDown()
	})

	$('body').on('mouseup', function() {
		dragging = false;
	})
	
	$('#slider .wrapper').mouseenter(function(e) {
		if (!e.which) {
			dragging = false;
		}
	})

	function sliderDown() {

		dragging = true

		$('body').on('mousemove', function(e) { sliderMove(e.pageX) })
		$('body').on('touchmove', function(e) {

			e = (e.changedTouches) ? e.changedTouches[0] : e;

			sliderMove(e.pageX)
		})

	}

	function sliderMove(offset) {

		const slider = $('.draggable')
		const wrapper = slider.parents('.wrapper');
		const sliderWid = slider.outerWidth()
		const totalWid = slider.parents('.wrapper').outerWidth()

		if (dragging) {

			var left = offset - wrapper.offset().left
			var imgWid = left / totalWid * 100

			if (imgWid > 100) {
				imgWid = 100
			} else if (imgWid < 0) {
				imgWid = 0
			} 

			slider.css({left: imgWid - 50 + '%'})
			$('.slider-img:nth-child(2)').width(imgWid + '%');

		}

	}

})