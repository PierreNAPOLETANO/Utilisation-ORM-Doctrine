<?php
include_once './autoload.php';
$db = new PDO('mysql:host=localhost;dbname=tp_data', 'root', 'Monopoli@74');
$barManager = new BarManager($db);
$bar = new Bar([
    'id' => $_GET['id'],
    'name' => $_GET['name'],
    'address' => $_GET['address'],
    'type' => $_GET['type']
]);
$barManager->delete($bar);
header('Location: index.php');