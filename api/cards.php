<?php

require '../core/init.php';
require 'Statement.php';

$id = $_GET['id'];

//grab card data
$stmt = new Statement();
$cards = $stmt->getData($mysqli, "SELECT * FROM cards WHERE topic_id = ?", $id);
echo json_encode($cards);