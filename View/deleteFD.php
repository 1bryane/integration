<?php
include '../Controller/FDC.php';
$FDC = new FDC();
$FDC->deleteFD($_GET["idFD"]);
header('Location:feedback.php');
