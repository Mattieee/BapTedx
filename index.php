<?php
/**
* Template Name: index
*/
get_header();
?>	

<!-- HEADER -->

<!-- Accueil -->

<div id="accueil" class="accueil">
	<div class="row">
		<h2>Image head</h2>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri();?>/img/logoted.png">
		</div>
		<div class="bandeau">
			<img class="bande" src="<?php echo get_template_directory_uri();?>/img/bandeau_déroulant_baptedx.png"/>
			<img class="bande2" src="<?php echo get_template_directory_uri();?>/img/bandeau_déroulant_baptedx.png"/>
		</div>
	</div>
</div>

<!-- Billeterie -->

<div id="billeterie" class="billeterie">
	<div id="test" class="test">
		<h1 class="col-md-12" style="text-align: center; color:#E62B1E; font-size: 50px; "><strong>Billeterie</strong></h1>

		<div class="col-md-6 " style="border-radius: 1px; text-align:center;padding:0px;">
			<button  href="equipe" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: black;" >
				<div style="font-size:35px; color:white;">Professionnels</div>
				<div style="border-radius: 4px;color:white; background-color: #363636;padding: 10px;
				margin: 5px;">-Lorem ipsum dolor sit <br>amet, consectetur adipisicing <br> elit. <br>-Officiis eaque  in facilis<br> ullam sint recusandae beatae. <br> -Suscipit doloribus,<br>ullam rerum accusamus?</div>
				<span style="background-color: white;" class="caret"></span>
				<div style="border-radius: 4px; margin:8px; background-color: #E62B1E; background-size: 40px;">
					<a style="color:white;font-size: 20px; padding-top:50%;"  title="">99€</a>
				</div>
			</button>
			
		</div>


		<div class="col-md-6" style="border-radius: 1px; text-align:center; padding:0px;">
			<button href="equipe" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: black;">
				<div style="font-size:35px; color:white;">Etudiants</div>
				<div style="border-radius: 4px;color:white; background-color: #363636;padding: 10px;
				margin: 5px;">-Lorem ipsum dolor sit <br>amet, consectetur adipisicing <br> elit. <br>-Officiis eaque  in facilis<br> ullam sint recusandae beatae. <br> -Suscipit doloribus,<br>ullam rerum accusamus?</div>
				<span style="background-color: white;" class="caret"></span>
				<div style="border-radius: 4px; margin:8px; background-color: #E62B1E; background-size: 40px;"><a style="color:white;font-size: 20px; padding-top:50%;" href="#" title="">99€</a>
				</div>

			</button>
		</div>

		<div class="load-5">
			<div class="ring-2">
				<div class="ball-holder">
					<div class="ball"></div>
				</div>
			</div>
		</div>

		<div class="time">
			<div id="countdown">
				<div class="col">
					<span id="countdown_day" >--</span>
					<span id="countdown_txt_day"><strong>days</strong></span>
				</div>

				<div class="col">
					<span id="countdown_hour">--</span>
					<span id="countdown_txt_hour"><strong>hours</strong></span>
				</div>

				<div class="col">
					<span id="countdown_min" >--</span> 
					<span id="countdown_txt_min"><strong>minutes</strong></span>
				</div>

				<div class="col">
					<span id="countdown_sec" >--</span>
					<span id="countdown_txt_sec"><strong>seconds</strong></span>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Actualités -->

<div id="actualites" class="actualites">
	<h2>Actualités</h2>


	<div class="container" style="">
	</div>
</div>

<!-- Équipe -->

<div id="equipe" class="equipe">
	<h2>Équipe</h2>
</div>

<!-- Partenaire -->

<div id="partenaire" class="partenaire">
	<h2>Partenaires</h2>
</div>

<!-- FOOTER -->


<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>



<script  src="/wp-content/themes/BapTedx/BapTedx/rebour/js/index.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js'></script>

































</body> 
</html>