<!DOCTYPE html>
<html>
<head>


</head>
<body>


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

$requete=$bdd->query('SELECT boite_choix,nom,allegation_choix,plante_principale,arome,planteA,planteB, dessin_choix, imgplante1, imgplante2, imgplante3, imgplante4 FROM boite ORDER BY nom');
	echo "<div class='test' class='col-lg-12'>";
	while($donnees=$requete->fetch())
	{
		echo '<div class="resultat" class="col-lg-3">';
		echo '<strong>'.($donnees['nom']).'</strong><br/>'.' '.'<img class="test2" src='.$donnees['boite_choix'].'><br/>';
		echo '<img class="test3" src='.($donnees['allegation_choix']).'><br/>'.$donnees['plante_principale'].'<br/>';
		echo $donnees['arome'].'<br/>';
		echo $donnees['planteA'].'<br/>';
		echo $donnees['planteB'].'<br/>';
		echo "<div id='plantes'>";
		echo '<img class="test4" src='.$donnees['dessin_choix'].'>';
		echo '<img class="test5" src='.$donnees['imgplante1'].'>';
		echo '<img class="test6" src='.$donnees['imgplante2'].'>';
		echo '<img class="test7" src='.$donnees['imgplante3'].'>';
		echo '<img class="test8" src='.$donnees['imgplante4'].'>';
		echo "</div>";
		echo '</div>';

	}
	echo "</div>";
	$requete->closeCursor();
?>






</body>
</html>