<?php $url = $_SESSION['index']; 
$img = $_SESSION['image'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title> CV </title>
		<link rel='stylesheet' href="<?= $url.'/view/cv/cvStyle.css'?>">
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<p><img src="<?= $img.'/morad_photo_cv.jpg'?>" alt="photo"></p>
			<h2>Formation</h2>
			<div> 
				<p><em>2022</em> :  Certificats de cours dispensée par l’<strong>Université du Michigan</strong> sur la plateforme Coursera :
				<ul>
					<li><strong> Building Web Applications in PHP</strong></li> 
					<li><strong>Introduction to Structured Query Language</strong></li> 
					<li><strong>Building Database Applications in PHP</strong></li> 
					<li><strong>JavaScript, jQuery and JSON</strong></li> 
				</ul></p>
			
				<p><em>2015</em> : <strong>MASTER</strong> sciences, technologies, santé, mention Mathématiques et application
					spécialité <strong>MATHÉMATIQUES FONDAMENTALES</strong> 
					obtenu à l’Université de Strasbourg.</p>
				<p><em>2006</em> : <strong>MASTER</strong> sciences, santé et applications,  mention structure, protéome et génomique
					spécialité <strong>BIOPHYSIQUE MOLÉCULAIRE ET CELLULAIRE</strong> 
					obtenu à l’Université Paris Diderot.</p>
			</div>
			
			<h2>Expériences professionnelles</h2>
			<div> 
				<p><em>Juin 2006 – décembre 2009</em> : Ingénieur en Biophysique au Laboratoire de Neurophysiologie et 	
					Nouvelles Microscopies à Paris.</p>
				<p><em>Septembre 2014 - en cours</em> : Intervenant pédagogique à domicile pour les mathématiques tous niveaux.</p>
			</div>
			
			<h2>Compétences</h2>
			<div> 
				<p>Anglais technique.<br>
				Langage : PHP, SQL, HTML, CSS </p>
				
				<p>Programmation orientée objet (notamment gestion d’erreur à l’aide des exceptions).<br>
				Modélisation de projet (UML).<br>
				Architecture MVC.</p>
			</div>
			
			<h2>Savoir-être</h2>
			<div> 
				<p> Capacité d'analyse, rigueur, abstraction, logique.</p>
			</div>
		</section>
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>
