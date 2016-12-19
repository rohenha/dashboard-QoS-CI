<?php include "inc/header.php" ?>

<div class="container flex dirCol aiC jcC wrap">
	<div class="filters w100  flex dirRow aiC jcC">
		<a href="#">All</a>
		<a href="#" class="active">Design</a>
		<a href="#">Développement</a>
	</div>

	<div class="row w100">
		<div class="block-container w25 wd33 wt50 wm100">
			<a href="#" class="block project square w100">
				<span class="bar-color red"></span>
				<div class="block-content">
						<img src="imgs/logo-orange.png" alt="">
						<h3>Orange</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>50%</p>
							<span class="bar w50"></span>
						</div>
				</div>
			</a>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block project square w100">
				<span class="bar-color red"></span>
				<div class="block-content">
						<img src="imgs/logo_keley.jpg" alt="">
						<h3>Keley Live</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>0%</p>
							<span class="bar w0"></span>
						</div>
				</div>
			</div>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block project square w100">
				<span class="bar-color red"></span>
				<div class="block-content">
						<img src="imgs/logo_keley.jpg" alt="">
						<h3>Renault</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>50%</p>
							<span class="bar w50"></span>
						</div>
				</div>
			</div>
		</div>

		<div class="block-container w25 wd33 wt50 wm100">
			<div class="block project square w100">
				<span class="bar-color red"></span>
				<div class="block-content">
						<img src="imgs/logo_keley.jpg" alt="">
						<h3>SEO</h3>
						<div class="percentage w100 flex dirCol aiS jcB">
							<p>100%</p>
							<span class="bar w100"></span>
						</div>
				</div>
			</div>
		</div>
	</div>


	<div class="block-container w50 wt100 wm100">
		<div class="block graphic w100 flex dirCol aiC jcC wrap">
			<div class="block-title w100 flex dirRow aiC jcSB">
				<h3>
					Créer un projet
				</h3>
			</div>
			<div class="block-content flex dirCol aiC jcC wrap">
				<form action="#" class=" w75 wt100 flex dirCol aiC jcSB">
					<div class="input-container w100">
						<label for="">Label Input</label>
						<input type="text">
					</div>
					<div class="input-container w100">
						<label for="">Label Select</label>
						<div class="select w100">
							<select name="selectProject" id="">
								<option value="1">Keley-Live</option>
								<option value="2">Orange</option>
								<option value="3">Renault</option>
							</select>
						</div>
					</div>
					<div class="input-container w100">
						<label for="">Label Radio</label>
						<div class="checkbox-container">
							<div class="radio">
								<input type="radio" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 2</label>
						</div>
						<div class="checkbox-container">
							<div class="radio">
								<input type="radio" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 2</label>
						</div>

						<div class="checkbox-container">
							<div class="radio">
								<input type="radio" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 2</label>
						</div>

					</div>

					<div class="input-container w100">
						<label for="">Label Radio</label>
						<div class="checkbox-container">
							<div class="checkbox">
								<input type="checkbox" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 2</label>
						</div>
						<div class="checkbox-container">
							<div class="checkbox">
								<input type="checkbox" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 3</label>
						</div>
						<div class="checkbox-container">
							<div class="checkbox">
								<input type="checkbox" name="tarif" name="jour"><span class="overlay-checkbox"></span>
							</div>
							<label for="">Intitulé 4</label>
						</div>
					</div>

					<input type="submit" class="btn purple" value="Sélectionner">
				</form>
			</div>
		</div>
	</div>

</div>

<?php include "inc/footer.php" ?>
