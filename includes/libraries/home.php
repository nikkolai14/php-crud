<?php

include 'Database.php';

$pdo = Database::connect();

$sql = "SELECT * FROM customers ORDER BY id DESC";