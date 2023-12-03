$(window).ready(function() {

	set_min_height()

	$(window).on('resize', function() {

		set_min_height()

	})

	function set_min_height() {

		const windowHeight = $(window).height()
		
		$('main').css('height', windowHeight + 'px')

	}

})