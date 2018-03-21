<?php

$zoekwoord = $_POST['zoekwoord'];


////SANITIZEN
//$zoekwoord = htmlentities($zoekwoord, ENT_QUOTES, 'utf-8');

echo 'U hebt gezocht voor: ' . htmlentities($zoekwoord, ENT_QUOTES, 'utf-8');