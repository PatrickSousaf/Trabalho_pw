<?php

$dsn = "mysql:host=localhost;dbname=pk-biblioteca";
$user="root";
$pass="";

return new PDO(
$dsn,
$user,
$pass
);