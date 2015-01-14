<?php include 'header.php';
if (!isset($_GET['page']))
include 'calculatrice.html';
else {
if($_GET['page']=="nous-contacter")
include 'nous-contacter.html';
if($_GET['page']=="articles")
include 'articles.html';}
include 'footer.html'; ?>