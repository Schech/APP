<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="Accueil.css"/>
		<link type="text/css" rel="stylesheet" href="Footer.css"/>
		<title>Accueil</title>
	</head>
	<body>
		<div id="header">
	        <div class="bandeauhaut">
				<div id="headergauche"> 
					<a href="#"><img src="https://www.dropbox.com/s/1yxbj2y807fn5eq/Logo4.png?raw=1" class="imagebandeau"/></a>
				</div>
				<div id="headerdroit">
					<!--<a href="#"><div class="Bouton"><p>Se connecter</p></div></a>-->
				</div>
			</div>
			<div class="bandeaubas">
				<div id="menu">
					<a href="#"><div class="Boutonmenu"><p>Accueil</p> 
					</div></a>
					<a href="#"><div class="Boutonmenu"><p>Evénements</p> 
					</div></a>
					<a href="#"><div class="Boutonmenu"><p>Mon Compte</p>
					</div></a>  
					<a href="#"><div class="Boutonmenu"><p>Déconnexion</p>
					</div></a>
				</div>
			</div>
			
	    </div>
	    
	    <div id="bandeau1">
			<div class="bandeauhaut">
				<form method="post" action="">
					<input type="search" name="recherche" id="recherche" placeholder="Ex:Tommorrow Land, Rock, Football..."> 
					<input type="submit" class="boutonrecherche" value="Recherche d'événements">
					
				</form>
				<div id="b1bas"><a href="#"><div class="Bouton" ><p>Recherche avancée</p></div></a></div>
			</div>
			<div class="bandeaubas">
				<a href="#"><div class="Bouton"><p>Créer un événement</p></div></a>
			</div>
	    </div>
	    <div id="bandeau2">
			<div id="carroussel">
				<a href="#"><div id="Eventcarr1" class="Eventcarr"><p>Rock en Seine</p></div></a>
				<a href="#"><div id="Eventcarr2" class="Eventcarr"><p>TomorrowLand</p></div></a>
				<a href="#"><div id="Eventcarr3" class="Eventcarr"><p>Color Run</p></div></a>  
				<a href="#"><div id="Eventcarr4" class="Eventcarr"><p>AC/DC Concert</p></div></a>
			</div>
	    </div>
		<div id="bandeau3">
			<p>BLABLABLABLA</p>
		</div>
	    <?php include("Footer.php"); ?>
	    
	</body>
</html>