$(window).ready(function() {

	$('.part').hover(function() {

		const id = $(this).data('id');

		$('.part').removeClass('active');
		$('.part' + id).addClass('active');

	}, function() {

		$('.part').removeClass('active');

	});

});