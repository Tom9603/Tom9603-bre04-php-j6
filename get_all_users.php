<?php

require 'connexion.php';

$query = $db->prepare('SELECT * FROM users');

$query->execute();

$users = $query->fetch(PDO::FETCH_ASSOC);

var_dump($users);

?>