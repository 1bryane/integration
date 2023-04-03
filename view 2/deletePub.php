<?php
include '../Controller/PubC.php';
$PubC = new PubC();
$PubC->deletePub($_GET["idPub"]);
header('Location:acceuil.php');
