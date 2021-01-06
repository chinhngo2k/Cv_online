<?php
require_once '../../config.php';
require_once '../../model/personal.php';


//lay thong tin nguoi dung theo id
if(isset($_GET['personal_id'])){
    $personal_id = $_GET['personal_id'];
    $personal = getPersonalById($personal_id);
    echo json_encode($personal);
}

?>