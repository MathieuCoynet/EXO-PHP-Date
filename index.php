<!DOCTYPE html>
<html>
	<head>
		<title>EXO DATE</title>
	</head>
	<body>

		<?php
			echo date(' j\/ m \/ Y ');
			echo "<br/>";

			/*Exo 1 ci dessus*/

			echo date(' j\- m\- Y ');
			echo "<br/>";

			/*Exo 2 ci dessus*/

			echo date('l \/ F \/ Y');
			echo "<br/>";
			/* Version FR */
			$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
			$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
       			 "septembre", "octobre", "novembre", "décembre");
			list($nom_jour, $jour, $mois, $annee) = explode('/' , date("w/d/n/y"));
			echo "date du jour en français : ";
			echo $nom_jour_fr[$nom_jour] . ' ' . $jour. ' ' . $mois_fr[$mois] . ' ' . $annee;
			echo "<br/>";

			/*Exo 3 ci dessus*/

			$date = new DateTime();
			echo $date -> getTimestamp(); 
			echo "<br/>";
			/* <-Date de mardi-> */
			echo "Timestamp du mardi 2 août 2016 à 15h00 : " . mktime("03, 0, 0, 08, 02, 2016") . " secondes";
			echo "<br/>";

			/*Exo 4 ci dessus*/

			$annee = date('Y');
			$jour_final = mktime('0,0,0,08,16,' , $annee);
			$tps_restant = $jour_final - time();
			echo $tps_restant;
			echo "<br/>";

			/*Exo 5 ci dessus*/

		/*	$nombre = cal_days_in_month(CAl_GREGORIAN, 1, 2016);			Alternative mais 
			echo "Il y a {$nombre} jours en Fèvrier 2016";					qui marche pas
			echo "<br/>";													
		*/

			$mois = mktime(0,0,0, 2, 1, 2016);
			setlocale('LC_ALL','fr_FR');
			echo "le mois de " . date("F Y", $mois) . " possède " . date("t", $mois) . " jours.";
			echo "<br/>";

			/*Exo 6 ci dessus*/

		/*	$date_debut = date('Y-m-d');
			list($annee, $mois, $jour) = split ("[-]", $date_debut);
			$jour_supp = '20';
			$date_fin = date("Y-m-d", mktime('0,0,0, $mois, $jour + $jour_supp, $annee'));
			echo $date_fin;

			Essai non concluant
		*/

			$date = '2016-11-23';
			$date_format = 'Y-m-d';

			$array_date = date_parse_from_format($date_format, $date);
			$more_days = 20;
			$next_date = date(
				$date_format,
				mktime(0,0,0, $array_date['month'], $array_date['day'] + $more_days, $array_date['year'])
				);
			echo $next_date;
			echo "<br/>";

			/*Exo 7 ci dessus*/

			$date = '2016-11-23';
			$date_format = 'Y-m-d';

			$array_date = date_parse_from_format($date_format, $date);
			$more_days = 22;
			$next_date = date(
				$date_format,
				mktime(0,0,0, $array_date['month'], $array_date['day'] - $more_days, $array_date['year'])
				);
			echo $next_date;
			
			/*Exo 8 ci dessus*/

			

		?>

	</body>
</html>