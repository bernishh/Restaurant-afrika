<?php
$conn = new mysqli('localhost', 'root', '', 'mama_africa');
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
²