
$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 1000) {
			$('.anchor').css({
				"opacity" : ".5",
				"display" : "block"
			}).fadeIn(333)
		}else {
			$('.anchor').css({
				"opacity" : "0",
				"display" : "none"
			}).fadeIn(333)
		}
	})
})