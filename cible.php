
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style_cible.css">
<link href="https://fonts.googleapis.com/css?family=Tenor+Sans" rel="stylesheet">
	<title></title>
</head>
<body>
				<section class="container-fluid">

<?php 

try
	{
		$bdd = new PDO
				('mysql:host=localhost;dbname=builder', 'root', '');

	}
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}


if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['boite_choix']) && !empty($_POST['plante_principale']) && !empty($_POST['arome']) && !empty($_POST['planteA']) && !empty($_POST['planteB']) && !empty($_POST['allegation_choix']) && empty($_POST['mail2'])) {/*!empty($_POST['possesseur'])&& !empty($_POST['console'])&& !empty($_POST['prix']&& !empty($_POST['nbre_joueurs_max'])&& !empty($_POST['commentaire']))
{*/

	$requete=$bdd->prepare('INSERT INTO boite(nom,prenom,mail,boite_choix,allegation_choix,plante_principale,intensite_principale,arome,intensite_arome,planteA,intensite_planteA,planteB,intensite_planteB,dessin_choix,imgplante1, imgplante2,imgplante3,imgplante4) VALUES (:nom, :prenom, :mail, :boite_choix, :allegation_choix, :plante_principale, :intensite_principale, :arome, :intensite_arome, :planteA, :intensite_planteA, :planteB, :intensite_planteB, :dessin_choix, :imgplante1, :imgplante2, :imgplante3, :imgplante4)' );

	$requete->execute(array(
				"nom"=> $_POST['nom'],
				"prenom"=>$_POST['prenom'],
				"mail"=>$_POST['mail'],
				"boite_choix"=>$_POST['boite_choix'],
				"plante_principale"=>$_POST['plante_principale'],
				"arome"=>$_POST['arome'],
				"planteA"=>$_POST['planteA'],
				"planteB"=>$_POST['planteB'],
				"allegation_choix"=>$_POST['allegation_choix'],
				"dessin_choix"=>$_POST['dessin_choix'],
				"intensite_principale"=>$_POST['intensite_principale'],
				"intensite_arome"=>$_POST['intensite_arome'],
				"intensite_planteA"=>$_POST['intensite_planteA'],
				"intensite_planteB"=>$_POST['intensite_planteB'],
				"imgplante1"=>$_POST['imgplante1'], 
				"imgplante2"=>$_POST['imgplante2'], 
				"imgplante3"=>$_POST['imgplante3'], 
				"imgplante4"=>$_POST['imgplante4'] 
				
				
		));
		
		echo "<div class='text'>Votre boite a bien été enregistrée</div><br/>";
		echo "<div class='text2'><a href='index.php'>Retour</a><div class='text'>";

		$objet = 'merci de votre participation';
		$text = "<html><head></head>
		<body>
					<a href='http://www.davidlucheportfolio.com/Mytea/galerie.php><img src='http://www.davidlucheportfolio.com/Mytea/images/newsletter.jpg' width='800px' height='1132px'/></a>
		</body>
		</html>";

		$entete='MIME-Version: 1.0' . "\r\n";
		$entete.= 'Content-Type: text/html; charset=UTF-8' . "\n";
		$entete.= 'Content-Transfer-Encoding: 8bit' . "\n";
		//$entete.= 'Content-Disposition = attachment; filename=images/infusion.jpg' . "\n";
		$entete.= 'From: stagiairedev1@pages.fr' . "\n";

		mail($_POST['mail'], $objet, $text, $entete);
}
else
{
	//echo "<img class='dessin' src='images/boite_infusion/312C.png'";
	echo "<div class='text'> Une erreur s'est produite, veuillez recommencer</div>" ;
	echo "<div class='text2'><a href='index.php'>Retour</a></div>";
}



?>

</section>

</body>
</html>