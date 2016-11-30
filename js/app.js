$(document).ready(function() {
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
});
