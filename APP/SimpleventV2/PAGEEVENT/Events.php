<?php
session_start();
require'fonctions_event.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="Events.css"/>
		<title>Evénements</title>	
	</head>
	<body>
		<?php include("Header.php");?>
		<div id="bandeaupresevent">
			<div class="bleft">
				<div class="bandeauhaut"><div class="Eventpic" style="background-image:url(http://www.rockenseine.com/wp-content/uploads/2015/09/VP2_7163RES-1024x683.jpg)"></div></div>
				<div class="bandeaubas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42028.32016165403!2d2.169811143748841!3d48.82444950573356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfad5c08e2b%3A0x36729832bbaf3b12!2sFestival+Rock+en+Seine!5e0!3m2!1sfr!2sfr!4v1446213297181" frameborder="0"  allowfullscreen id="map"></iframe></div>
			</div>
			<div class="bright">
				<div class="bandeauhaut" style="height:10%"><h2><?php echo $nom_e ?></h2></div>
				<div class="bandeaumilieu">
					<div class="bandeauhaut" style="height:50%">
						<div class="bleft" style="width:50%">
							<div class="bleft" style="width:10%">
								<a href="#"><img src="https://www.dropbox.com/s/jmzi3lowgiry5wf/Bonhommevert.png?raw=1" style="width:100%"/></a>
								<a href="#"><img src="https://www.dropbox.com/s/33ldf4ajvhvh3hz/EIpgSD2K.png?raw=1" style="width:100%"/></a>
								<a href="#"><img src="https://www.dropbox.com/s/vpzc9y04zixn2lg/fb_icon_325x325.png?raw=1"style="width:100%"/></a>
								<a href="#"><img src="https://www.dropbox.com/s/0h0kmbxsicya03r/ajouter-un-nouveau-bouton-plus_318-9157.png?raw=1" style="width:100%"/></a>
							</div>
							<div class="bright" style="width:90%">
								<div class="bandeauhaut" style="height:33%">
									<?php if ($prix==0)
										{
											echo "<p> Gratuit </p>";
										}
										else
										{
											echo "<p>Prix: $prix Euros</p>";
										}
									?>
								</div>
								<div class="bandeaumilieu" style="height:33%">
									<p>NOTE</p>
								</div>
								<div class="bandeaubas" style="height:33%">
									<p> Il reste 12 places</p>
								</div>
							</div>
						</div>
						<div class="bright" style="width:50%">
							<?php if ($privacy == 1)
								echo '<p> cet événement est privé</p>';
							?>
							<a href="#"><div class="Bouton" style="width:90%;Font-size:0.7em;"><p>S'inscrire à l'événement</p></div></a>
							<a href="#"><div class="Bouton" style="width:90%;Font-size:0.7em;"><p>Acheter un Billet</p></div></a>
							<a href="#"><div class="Bouton" style="width:90%;Font-size:0.7em;"><p>Site internet de l'événement</p></div></a>
							<a href="#"><div class="Bouton" style="width:90%;Font-size:0.7em;"><p>Modifier l'événement</p></div></a>
						</div>
					</div>
					<div class="bandeaubas" style="height:50%">
						<div class="bleft">
							<h2> Informations </h2>
							<p>Pouet</p>
						</div>
						<div class="bright">
							<p>Chiffres clés</p>
						</div>
					</div>
				</div>
				<div class="bandeaubas" style="height:10%">
					<p>Catégories de l'événement</p>
					<div class="carroussel">
						<?php carroussel(7);?>
					</div>
				</div>
			</div>
		</div>
		<div id="bandeauimages">
			
		</div>
		<?php include("Footer.php");?>
	</body>

</html>