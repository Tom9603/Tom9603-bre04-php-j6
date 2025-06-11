<?php
require 'connexion.php';

$query = $db->prepare('
    SELECT users.*, address.*
    FROM users
    JOIN address ON users.address = address.id
');

$query->execute();

$user = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($user);
?>

?>