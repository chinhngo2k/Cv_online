<?php
require_once '../../model/education.php';
require_once '../../config.php';

//lay education theo peronal_id
if(isset($_GET['personal_id'])){
    $personal_id = $_GET['personal_id'];
}