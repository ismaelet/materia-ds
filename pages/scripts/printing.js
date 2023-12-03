$(window).ready(function() {

	$('.video').click(function() {

		const self = this;

		if (this.paused) {

			self.play()
			self.classList.add('playing')

		} else {

			self.pause()
			self.classList.remove('playing')

		}

	})

})