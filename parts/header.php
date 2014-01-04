<?php
$meta_description = 'Québec numérique regroupe des individus et citoyens ayant en
commun la missionde rassembler, développer, promouvoir et valoriser la communauté
numérique de Québec.';
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="fr-FR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="fr-FR">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="fr-FR">
<!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="<?php echo $meta_description ?>">
	<meta name="author" content="Libéo - http://www.libeo.com">
	<meta name="google-site-verification" content="yv0gFgv3aDfNj4wxfyh79cgBuFcCwc1KeYDufOHOkIw" />

	<!-- Metas DC -->
	<meta name="dcterms.description" content="<?php echo $meta_description ?>">
	<meta name="dcterms.creator" content="Québec Numérique">
	<meta name="dcterms.title" content="Québec Numérique">

	<!-- Metas Facebook -->
	<meta property="og:url" content="http://quebecnumerique.com">
	<meta property="og:title" content="Québec Numérique">
	<meta property="og:description" content="<?php echo $meta_description ?>">
	<meta property="og:image" content="http://quebecnumerique.com/images/fb-logo.png">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link href='http://fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="/favicon.ico" />

	<title>Québec Numérique</title>

	<link rel="stylesheet" id="reset-css"  href="/css/reset.css" type="text/css" media="all" />
	<link rel="stylesheet" id="general-css"  href="/css/general.css" type="text/css" media="all" />
	<link rel="stylesheet" id="header-css"  href="/css/header.css" type="text/css" media="all" />
	<link rel="stylesheet" id="sections-css"  href="/css/sections.css" type="text/css" media="all" />
	<link rel="stylesheet" id="media-queries-css"  href="/css/media-queries.css" type="text/css" media="all" />
	<link rel="stylesheet" id="retina-css"  href="/css/retina.css" type="text/css" media="all" />

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php
		/**
		 * Les Javascripts et les CSS ne doivent pas être inclus ici!
		 * Ils doivent être ajouter dans la fonction add_my_scripts() et add_my_styles()
		 * dans le fichier functions.php (hint, allez voir la fichier functions.php)		 *
		 */
	?>

</head>
<body class="home blog">
