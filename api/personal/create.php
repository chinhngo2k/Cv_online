<?php
require_once '../../model/personal.php';
require_once '../../config.php';

$fullname = $_POST['fullname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$carrer = $_POST['carrer'];

addPersonal($fullname, $mail, $phone, $birthday, $sex, $address, $carrer);
