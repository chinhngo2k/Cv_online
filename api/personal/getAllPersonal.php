<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../../model/personal.php';
require_once '../../config.php';

$personal = getAllPersonal();

echo json_encode($personal);