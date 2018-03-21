<?php
include ('../private/connectvars.php');


$mysqli = new mysqli(HOST,USER,PASS,DBNAME) or die ('Error connecting.');

$query = "INSERT INTO studenten_12345 VALUES (0,'a','b','c')";

$mysqli->query($query) or die ('Error querying.');
