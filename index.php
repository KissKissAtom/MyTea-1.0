
<?php

// on cherche un user-agent apparenté à une plateforme mobile dans la variable
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
$android = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
$blackberry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');

// puis on détermine si une chaîne de caractères a été trouvée
if($iphone || $ipad || $android || $blackberry > -1){
    header('Location: http://localhost/Mytea2copie/page_choix_mobile.html'); // si c'est le cas, on redirige
    die; // puis on arrête le chargement de la page actuelle
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_accueil_index_p.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tenor+Sans" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--<link rel="stylesheet" media="screen and  (max-width: 800px)" href="mobile/style_phone_index.css">-->
	 <!-- <link rel="stylesheet" media="(orientation: portrait)" href="mobile/style_portrait_a.css">-->
	  	<link rel="stylesheet" media="screen and (max-width: 1600px)" href="mobile/style_index_ecran_portable_b.css">
	<title>MyTea,constructeur de Thé et d'Infusions</title>
</head>
<body id="color">

							<!--TRAIT DECO-->

<svg version="1.1" id="traitdeco" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1800px" height="1000px" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve">
<path fill="none" stroke="#939089" stroke-miterlimit="10" d="M-111.483,330.896c0,0,238.569,20.314,508.224-95.547
	s346.948-321.694,505.569-79.625"/>
<path fill="none" stroke="#A07D2D" stroke-miterlimit="10" d="M956.794,532.275c0,0-191.034,60.001-270.345,8.276
	S328.52,599.862-26.654,477.793"/>
<path fill="none" stroke="#A39F94" stroke-miterlimit="10" d="M956.794,532.275c0,0-191.034,72.979-270.345,21.254
	S328.52,599.862-26.654,477.793"/>
<path fill="none" stroke="#A07D2D" stroke-miterlimit="10" d="M-111.483,330.896c0,0,231.035,11.034,500.69-104.828
	s354.482-312.414,513.104-70.345"/>
</svg>

						<!-- FIN-->

<div id="loader" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 
  <div id="box"><img id="boite_promo" src="images/pubvrac1.jpg" alt="image vrac"><br>
  		<p id="info_pub"> Découvrez dés septembre notre nouvelle gamme PAGÈS Vrac </p><br>
  		<p id="c">Chargement...Laissez le thé infuser ;)</p><br>
  		</div>
  		<div id="shadow">
  		 <img id="loader1" src="images/loader3.gif" alt="loader"><br>
  		 

  </div>
  

</div>


<div class="container-fluid">



<nav class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
<div class="col-lg-3" id="base_menu">
				<img id="menu1" class="menu" src="images/menu.png" alt="menu">
				<img id="menu2" class="menu" src="images/fin_menu.png" alt="fin_menu">
				</div>

</nav>
	<div id=menu_fond></div>
				<div class="col-lg-9" id="navigation">

<!--<svg version="1.1" id="menu_fond" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="595.28px" height="1500px" viewBox="0 0 595.28 1500" enable-background="new 0 0 595.28 1500" xml:space="preserve">
<g>
	<path d="M92.754,1499.074c4.903,0.615,9.812,0.926,14.723,0.926c162.598,0,294.409-330.789,294.409-738.84
		c0-408.048-131.812-738.839-294.409-738.839c-1.384,0-2.769,0.026-4.154,0.076"/>
	<path d="M96.274,1500c-45.888,0-95.286,0-95.286,0V22.321c0,0,59.005,0,104.334,0"/>
</g>
</svg>-->




<ul id="ul">
	<li id="li1"><a class="lien" href="index.php">Accueil</a></li>
	<li id="li2"><a class="lien" href="page_the.php">Créer votre thé</a></li>
	<li id="li3"><a class="lien" href="page_infusion.php">Créer votre infusion</a></li>
	<li id="li4"><a class="lien" href="reglement.html">Réglement et Conditions</a></li>
	<li><a class="lien" href="galerie.php">Galerie</a></li>
	<li id="li5"><a class="lien" href="http://www.pages.fr">Découvrir PAGÈS</a></li>

</ul>

</div>





	<header class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  				<a href="index.php"><img id="logo" src="images/logo.png" alt="logo pages thés et infusions"></a>
  				
  			</div>

<div id="titre_mytea" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  					<h1>MyTea</h1>
  					<h6>Constructeur de Thé et d'Infusions</h6>
  					</div>

		
		
  					<!-- NAVIGATION ET TITRE-->

	
									<!--FIN NAVIFATION ET MENU-->

  			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
  				
  			
  			</div>

</header>
		
						<!-- FIN HEADER-->




		<section class="row">
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="couleur_deco"></div>

	<h2 id="title2"><svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="795.28px" height="841.89px" viewBox="0 0 595.28 841.89" enable-background="new 0 0 595.28 841.89" xml:space="preserve">
<text transform="matrix(1 0 0 1 31.999 284.2563)"  fill="#FFFFFF" font-family="'Tenor Sans'" font-size="81.5367">CRÉEZ</text>
<text transform="matrix(1 0 0 1 74.29 313.9624)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="22.1845">VOTRE</text>
<text transform="matrix(1 0 0 1 165.376 338.4233)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="59.1818">PROPRE</text>
<text transform="matrix(1 0 0 1 40.9438 338.4233)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="26.954">RECETTE</text>
<text transform="matrix(1 0 0 1 40.9438 365.8467)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="26.0763">DE</text>
<text transform="matrix(1 0 0 1 77.2192 395.2637)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="57.3352">THÉ </text>
<text transform="matrix(1 0 0 1 193.8398 396.0205)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="30.4974">OU</text>
<text transform="matrix(1 0 0 1 243.4473 395.2065)" fill="#FFFFFF" font-family="'Tenor Sans'" font-size="58.2391">D'INFUSIONS</text>
</svg>

</h2><br/>


	<div id="texte_info">



			<p>Avec cette application web, <strong>PAGÈS</strong> vous offre la possibilité de créer<br/>
			votre propre thé ou infusion de A à Z.<br/>

			Du design de la boite, jusqu'aux ingrédients qui la composeront, on laisse <br/>
			libre cours à votre imagination.<br/>

			Vous pourrez retrouver votre boite dans la <strong>galerie</strong>.<br/>

			Attention, votre boite ne pourra pas être modifié une fois validé<br/>
			et vous ne pourrez créer qu'une <strong>seule boite</strong> par mail.<br/>

			Amusez-vous bien ! <br/>

			<strong>L'Equipe PAGÈS.</strong><p>


</div>


		
<div id="fond_nature">
<img class="test" id="img_nature" src="images/fleurs.jpg" alt="fleurs">
</div>

<div id="fond_nature2">
<img  id="img_nature2" src="images/tasseinfusion5.jpg" alt="tasse dessin">
</div>

<div id="fond_nature3">
<img id="img_nature3" src="images/boite2.png" alt="boite design">
</div>

<div id="rond_slide"><a href="#"><img id="slide" src="images/fleche.png" alt="slide"></a></div>




		<h3 id="choix">---------------------- Faites votre choix ------------------------</h3><br/>
			<em><strong>Dans quelle équipe voulez-vous jouer ?
					La puissance du thé ou la douceur de l'infusion.</strong></em>

<h1 id="choix_the">THÉ</h1>
<h1 id="choix_infusion">INFUSION</h1>


<!--<h5 id="titre_crea1">Cliquez ici</h5>-->
<!--		<svg version="1.1" id="fleche1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1000px" height="1000px" viewBox="0 0 200 100" enable-background="new 0 0 200 100" xml:space="preserve">
<g>
	<g>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M10.688,86.938c0,0,1.044-1.932,3.007-5.188"/>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.0051,12.0051" d="M20.15,71.631
			c21.355-31.762,75.735-97.34,130.822-40.847"/>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M155.043,35.183
			c1.287,1.462,2.574,2.993,3.861,4.596"/>
	</g>
</g>
<polygon points="150.354,56.784 150.354,56.784 174.646,56.784 174.646,32.492 174.646,32.492 "/>
</svg>-->


<!--<h5 id="titre_crea2">Cliquez ici</h5>-->
		<!--<svg version="1.1" id="fleche2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="100px" viewBox="0 0 200 100" enable-background="new 0 0 200 100" xml:space="preserve">
<g>
	<g>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M169.281,11.816c0,0-1.039,1.947-2.986,5.2"/>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.5739,12.5739" d="
			M159.529,27.611C139.537,57.117,91.622,113.41,42.351,64.75"/>
		<path fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M38.018,60.2
			c-1.299-1.446-2.598-2.968-3.897-4.567"/>
	</g>
</g>
<polygon points="41.846,40.056 41.846,40.056 19.655,40.176 19.776,62.367 19.776,62.367 "/>
</svg>-->




							<div id="image_boite">
							
<a href="page_the.php"><img id="the" class="img_boite" src="images/boitesite4.png" alt="boite de thé"></a>

</div>

							<div id="image_boite_the" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
<a href="page_infusion.php"><img id="infusion" class="img_boite" src="images/boitesite3.png" alt="boite d'infusion"></a>
</div>
		<div id="pages_texte">
<p id="guillemet1">“</p>
<p id="guillemet2">”</p>
<p id="slogan">Laissez infuser le bien-être</p>
</div>

</article>
</section>




	<footer class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
			<div id="adresse"><p>PAGÈS - route des Estreys<br/>
			43000 LE Puy-En-Velay<br/>
			+33 (0)4 71 09 93 40</p></div><br/>

				<h5>Retrouvez-nous sur :</h5>
						<div id="reseau">

				<a href="https://fr-fr.facebook.com/PAGES.theinfusions/"><img class="twitter" src="images/facebook.png"></a>
				<a href="https://twitter.com/pagesthes"><img class="twitter" src="images/twitter.png"></a>
				<a href="https://www.instagram.com/?hl=fr"><img class="twitter" src="images/instagram.png"></a>
				<a href="http://www.pages.fr/"><img class="twitter" src="images/site.png"></a>
						</div>


<div id="copyright">copyright PAGÈS, tout droit réservés</div>

					
								
						
						
			</div>
		
	</footer>







</div>




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
<script src="anime.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery/jquery_n.js"></script>
<script src="jquery/jquery_animation_t.js"></script>



<!--<script type="text/javascript">
if(window.matchMedia("(max-width:1000px)").matches) {
  // Chargement de jQuery dans un nouvel élément <script> ajouté à la section <head>
  var script1 = document.createElement('script');
  script1.type='text/javascript';
  script1.src = '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js';
  script1.onload = function() {
    // Lorsque jQuery est chargé...
    // On fait la même chose : chargement dynamique // mais cette fois-ci avec jQuery (c'est plus simple)
    $.getScript('jquery/jquery_mobile_animation.js');
  }
  // Insertion dans le DOM de la balise script initiale
  document.getElementsByTagName('head')[0].appendChild(script1);
}
else{

  // Chargement de jQuery dans un nouvel élément <script> ajouté à la section <head>
  var script1 = document.createElement('script');
  script1.type='text/javascript';
  script1.src = '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js';
  script1.onload = function() {
    // Lorsque jQuery est chargé...
    // On fait la même chose : chargement dynamique // mais cette fois-ci avec jQuery (c'est plus simple)
    $.getScript('jquery/jquery_animation.js');
  }
  // Insertion dans le DOM de la balise script initiale
  document.getElementsByTagName('head')[0].appendChild(script1);


}
</script>-->

</body>
</html>