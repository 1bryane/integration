<?php
include '../Controller/DomaineC.php';
$DomaineC = new DomaineC();
$DomaineC->deleteDomaine($_GET["idDomaine"]);
header('Location:domaine.php');
