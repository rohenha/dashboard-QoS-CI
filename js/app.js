$(document).ready(function() {
	bodymovin.loadAnimation({
	  	container: document.getElementById('whiteSun'), // the dom element
	  	renderer: 'svg',
	  	loop: true,
	  	prerender: true,
	  	autoplay: true,
		autoloadSegments: true,
	  	path:'animations/whiteSun.json'
	});
});
