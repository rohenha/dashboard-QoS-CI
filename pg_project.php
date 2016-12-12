<?php include "inc/header.php" ?>

<div class="container">
	<div class="row flex jcSB nowrap aiC title">
		<div class="w50">
			<h1>
				<span class="date">13/09/2016 - 23/01/2017</span>
				Keley-Live
			</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellat porro amet voluptate fugit. Veritatis porro repellat perferendis temporibus, libero numquam, fugit quis deleniti alias nesciunt eaque officia laboriosam cum?</p>
		</div>
		<button id="objectifBtn" class="btn purple flex dirRow aiC jcC"><img src="imgs/objectifs.png" alt="">Objectifs</button>
	</div>
	<div class="row">
		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block square w100 gradient blue">
				<div class="block-content">
						<span class="anim whiteSun large" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
						<div class="notif-content">
							<p class="status">Status :<span>Success</span></p>
							<p>Lors du dernier push sur Gitlab, les tests de PHP MD n'ont détectés aucun problème</p>
						</div>
						<h3>PHP MD</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>50%</p>
							<span class="bar w50"></span>
						</div>
				</div>
			</div>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block square w100 gradient red">
				<div class="block-content">
						<span class="anim whiteNuageux large" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Nuageux"></span>
						<div class="notif-content">
							<p class="status">Status :<span>Failed</span></p>
							<p>Lors du dernier push sur Gitlab, les tests de PHP UNIT ont détectés des problèmes de compatibilité</p>
						</div>
						<h3>PHP UNIT</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>0%</p>
							<span class="bar w0"></span>
						</div>
				</div>
			</div>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block square w100 gradient yellow">
				<div class="block-content">
						<span class="anim whiteSemiEnsoleille large" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Semi Ensoleille"></span>
						<div class="notif-content">
							<p class="status">Status :<span>In progress</span></p>
							<p>L'intégration est en cours.</p>
						</div>
						<h3>Intégration</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>50%</p>
							<span class="bar w50"></span>
						</div>
				</div>
			</div>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block square w100 gradient blue">
				<div class="block-content">
						<span class="anim whiteSun large" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
						<div class="notif-content">
							<p class="status">Status :<span>Success</span></p>
							<p>Le référencement est optimal sur l'ensemble du projet.</p>
						</div>
						<h3>SEO</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>100%</p>
							<span class="bar w100"></span>
						</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum w33">
			<div class="block-container w100 wd33 wt50 wm100">
				<div class="block line w100 gradient blue">
					<div class="block-content">
							<span class="anim whiteSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
							<h3>Intégration</h3>
							<div class="percentage w100 flex dirCol aiS jcB">
								<p>100%</p>
								<span class="bar w100"></span>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colum w33">
			<div class="block-container w100 wd33 wt50 wm100">
				<div class="block line w100 gradient red">
					<div class="block-content">
							<span class="anim whiteSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
							<h3>Tests</h3>
							<div class="percentage w100 flex dirCol aiS jcB">
								<p>25%</p>
								<span class="bar w25"></span>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colum w33">
			<div class="block-container w100 wd33 wt50 wm100">
				<div class="block line w100 gradient yellow">
					<div class="block-content">
							<span class="anim whiteSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
							<h3>Jenkins</h3>
							<div class="percentage w100 flex dirCol aiS jcB">
								<p>50%</p>
								<span class="bar w50"></span>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="block-container w50 wt50 wm100">
			<div class="block graphic w100 lex dirCol aiC jcC wrap">
				<span class="bar-color red"></span>
				<div class="block-title w100 flex dirRow aiC jcSB">
					<h3>
						<span>Développement</span>
						Données entrées dans la BDD
					</h3>
					<span class="anim purpleSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
				</div>
				<div class="block-content">
					<canvas id="chartBDD" width="400" height="200"></canvas>
				</div>
			</div>
		</div>

		<div class="block-container w50 wt50 wm100">
			<div class="block graphic w100 lex dirCol aiC jcC wrap">
				<span class="bar-color blue"></span>
				<div class="block-title w100 flex dirRow aiC jcSB">
					<h3>
						<span>Intégration</span>
						Nombre de Commit
					</h3>
					<span class="anim purpleSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
				</div>
				<div class="block-content">
					<canvas id="chartCommit" width="400" height="200"></canvas>
				</div>
			</div>
		</div>

		<div class="block-container w75 wt50 wm100">
			<div class="block graphic w100 lex dirCol aiC jcC wrap">
				<span class="bar-color red"></span>
				<div class="block-title w100 flex dirRow aiC jcSB">
					<h3>
						<span>Général</span>
						Avancement du projet
					</h3>
					<span class="anim purpleSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
				</div>
				<div class="block-content">
					<canvas id="chartAProject" width="400" height="100"></canvas>
				</div>
			</div>
		</div>

		<div class="block-container w25 wt50 wm100">
			<div class="block graphic w100 lex dirCol aiC jcC wrap">
				<span class="bar-color yellow"></span>
				<div class="block-title w100 flex dirRow aiC jcSB">
					<h3>
						<span>SEO</span>
						Optimisation des textes
					</h3>
					<span class="anim purpleSun small" class="bodymovin" data-animation-path="animations/" data-anim-loop="true" data-name="White Sun"></span>
				</div>
				<div class="block-content">
					<canvas id="chartSEO" width="400" height="400"></canvas>
				</div>
			</div>
		</div>

	</div>
</div>

<?php include "inc/footer.php" ?>
