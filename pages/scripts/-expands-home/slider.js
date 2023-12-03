$(window).on('load', function() {
	
	var i = 0;

	var automatic = true;

	$('.dot-box').click(function() {

		automatic = false;

		slide($(this).data('pos'));

	});

	
	(function cycle() {

		if (automatic) {

			i++;

			if (i > 4) {
				i = 1;
			}
					
			slide(i);

			setTimeout(cycle, 5000);

		}

	})();

	function slide(pos) {

		$('#slider .dot-box').removeClass('active');

		$('#slider .dot-box[data-pos="' + pos + '"]').addClass('active');

		$('#slider .title-box').removeClass('active');
		$('#slider .background').removeClass('active');

		$('#background' + pos).addClass('active');
		$('#title-box' + pos).addClass('active');

	}

});