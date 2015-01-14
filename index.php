<!DOCTYPE html PUBLIC "..//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="SIO2" />
		<meta name="keywords" content="Mon Appli Web" />
		<meta name="description" content="Appli Web pour le TP Git" />
		<meta name="date" content="2012-12-22T08:30:45+01:00" />
		<!-- <link rel="shortcut icon" type="image/x-icon" href="monIcon.ico" /> -->
		<link rel="stylesheet" href="monCss.css">
		<title>Mon application Web</title>
		<script type="text/javascript" src="monScript.js"></script>
	</head>
	<?php include 'header.php';
	if (!isset($_GET['page']))
	{
		include 'calculatrice.html';
	}
	else 
	{
		if($_GET['page']=="articles")
		{
			include 'articles.html';
		}
	}
	include 'footer.html'; ?>
	</body>
</html>