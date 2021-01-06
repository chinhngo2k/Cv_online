<?php
require_once '../../model/personal.php';
require_once '../../config.php';

$personals = getAllPersonal();

echo json_encode($personals);

?>