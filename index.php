<?php include 'header.php';
if (!isset($_GET['page']))
include 'calculatrice.html';
else {
if($_GET['page']=="nous-contacter")
include 'nous-contacter.html';}
include 'footer.html'; ?>