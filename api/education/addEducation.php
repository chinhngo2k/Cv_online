<?php
header('Access-Control-Allow-Origin: *');
require_once '../../model/education.php';

$school = $_POST['school'];
$degree = $_POST['degree'];

// addEducation($school, $degree)

var_dump($school);