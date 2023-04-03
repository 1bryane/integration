<?php
include '../Controller/eventC.php';
$eventC = new eventC();
$eventC->deleteevent($_GET["idevent"]);
header('Location:index.php');
