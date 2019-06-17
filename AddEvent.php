<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
 
 $title = $_POST['title'];
 $start = $_POST['start'];
 $end = $_POST['end'];
 $color = $_POST['color'];
