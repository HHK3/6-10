<?php

require('../private/connectvars.php');
include('helloworld.php');

//MYSQL OBJECT AANMAKEN
$mysqli = new mysqli(HOST, USER, PASS, DBNAME);

//TESTEN OP CONNECTIE FOUTEN
if ($mysqli->connect_errno) {
    exit('Error code: ' . $mysqli->connect_errno);
}

//QUERY SCHRIJVEN
$query = "INSERT INTO klasgenoten VALUES (0, ?, ?, ?, ?)";

//PREPAREN
$stmt = $mysqli->prepare($query);

//BINDEN
$stmt->bind_param('ssss', $voornaam, $tsv,$achternaam,$mailadres);

//INVULLEN
$voornaam = 'LOL';
$tsv = '';
$achternaam = 'HALLO';
$mailadres = 'lol@gmail.com';

//EXECUTEN
$stmt->execute();




