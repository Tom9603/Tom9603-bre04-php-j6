<?php
require 'connexion.php';

$query = $db->prepare('SELECT * FROM users.first_name, users.last_name, adress.*FROM users JOIN address ON users.address = address.id WHERE id = :id');

$parameters = [
    'id' => $_GET['id'],
    'address' => $_GET['addresse']
];

$query->execute($parameters);

$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);

?>