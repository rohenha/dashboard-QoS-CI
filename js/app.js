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
			case $(this).hasClass('whiteNuageux'):
				var animationName = "whiteNuageux";
			break;
			case $(this).hasClass('whiteSemiEnsoleille'):
				var animationName = "whiteSemiEnsoleille";
			break;
			default:
			break;
		}
		// bodymovin.loadAnimation({
		// 	container: anim, // the dom element
		// 	renderer: 'svg',
		// 	loop: true,
		// 	prerender: true,
		// 	autoplay: true,
		// 	autoloadSegments: true,
		// 	path:'animations/'+animationName+'.json'
		// });
	});

	// Listener pour écouter les blocks carrés
	if ($(document).width()< 768) {
		$('.block.square').on('click', function(event) {
			$(this).toggleClass('active');
		});
	}

	// Open Objectifs
	$('#objectifBtn').on('click', function(event) {
		$('#objectifs').toggleClass('active');
		$.each($('.catObjectif'), function(i, el){
		    setTimeout(function(){
				$(el).toggleClass('show');
		    },200 + ( i * 170 ));
		});
		$('#objectifs .cross').on('click', function(event) {
			$('#objectifs').toggleClass('active');
			$('#objectifs .cross').off('click');
			$.each($('.catObjectif'), function(i, el){
				setTimeout(function(){
					$(el).toggleClass('show');
				},400 + ( i * 170 ));
			});

		});
	});

	// Check when checkbox cliqued
	$('.checkbox input[type="checkbox"]').on('change', function(event) {
		console.log('change');
		$(this).closest('li').toggleClass('active');
	});

	var ctxChartBDD = document.getElementById("chartBDD");
	var dataChartBDD = generateDatasLine("Données entrées dans la BDD",["January", "February", "March", "April", "May", "June", "July"],[65, 59, 80, 81, 56, 55, 40]);
	var chartBDD = new Chart(ctxChartBDD, { type: 'line', data: dataChartBDD });

	var ctxChartCommit = document.getElementById("chartCommit");
	var dataChartCommit = generateDatasLine("Nombre de Commit",["January", "February", "March", "April", "May", "June", "July"],[65, 39, 90, 81, 66, 95, 120]);
	var chartCommit = new Chart(ctxChartCommit, { type: 'bar', data: dataChartCommit });

	var ctxChartAProject = document.getElementById("chartAProject");
	var dataChartAProject = generateDatasLine("Avancement du Projet",["January", "February", "March", "April", "May", "June", "July"],[65, 39, 90, 81, 66, 95, 120]);
	var chartAProject= new Chart(ctxChartAProject, { type: 'bar', data: dataChartAProject});

	var ctxChartSEO = document.getElementById("chartSEO");
	var dataChartSEO = generateDatasPie("Avancement du Projet",["January", "February", "March"],[65, 39, 90]);
	var chartSEO= new Chart(ctxChartSEO, { type: 'pie', data: dataChartSEO});



	function generateDatasLine(name, labels,data){
		return {
		    labels: labels ,
		    datasets : [
		        {
		            label: "My First dataset",
		            fill: false,
		            lineTension: 0.1,
		            backgroundColor: "rgba(122, 7, 250,0.4)",
		            borderColor: "rgba(122, 7, 250,1)",
		            borderCapStyle: 'butt',
		            borderDash: [],
		            borderDashOffset: 0.0,
		            borderJoinStyle: 'miter',
		            pointBorderColor: "rgba(122, 7, 250,1)",
		            pointBackgroundColor: "#fff",
		            pointBorderWidth: 1,
		            pointHoverRadius: 5,
		            pointHoverBackgroundColor: "rgba(122, 7, 250,1)",
		            pointHoverBorderColor: "rgba(61, 61, 61,1)",
		            pointHoverBorderWidth: 2,
		            pointRadius: 1,
		            pointHitRadius: 10,
		            data: data,
		            spanGaps: false,
		        }
		    ]
		};
	}

	function generateDatasPie(name, labels,data){
		return {
		    labels: labels ,
		    datasets: [
		        {
		            data: data ,
		            backgroundColor: [
		                "#7A08FA",
		                "#3D3D3D",
						"#ae6afb"
		            ],
		            hoverBackgroundColor: [
						"#7A08FA",
		                "#3D3D3D",
						"#ae6afb"
		            ]
		        }]
		};
	}

});
