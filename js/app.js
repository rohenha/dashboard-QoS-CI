$(document).ready(function() {
	// Initialiser les animations
	$('.anim').each(function(index, anim) {
		switch (true) {
			case $(this).hasClass('whiteSun'):
				var animationName = "whiteSun";
			break;
			case $(this).hasClass('purpleSun'):
				var animationName = "purpleSun";
			break;
			default:
		}
		bodymovin.loadAnimation({
			container: anim, // the dom element
			renderer: 'svg',
			loop: true,
			prerender: true,
			autoplay: true,
			autoloadSegments: true,
			path:'animations/'+animationName+'.json'
		});
	});

	// Listener pour écouter les blocks carrés
	if ($(document).width()< 768) {
		$('.block.square').on('click', function(event) {
			$(this).toggleClass('active');
		});
	}
});
