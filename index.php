<?php
require_once './model/personal.php';
require_once './model/education.php';
require_once './config.php';

// header('Access-Control-Allow-Origin: *');
// //header('Content-Type: application/json');
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

// $database = new Database();

// $db = $database->connect();

if(isset($_POST['action'])){
    $action = $_POST['action'];
}
else if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'getAllPerson';
}

if($action == 'getAllPerson'){
    $personals = getAllPersonal();
    echo (json_encode($personals));
}
else if($action == 'addPersonal'){
    // "fullname": "cuong",
    // "mail": "vietcuong500@gmail.com",
    // "phone": "0389885803",
    // "birthday": "2000-01-22",
    // "sex": 1,
    // "address": "ha noi",
    // "carrer": "khong co gi ca"

    $request_body = file_get_contents('php://input');
    $request_body = json_decode($request_body, true);

    $fullname = $request_body['fullname'];
    $mail = $request_body['mail'];
    $phone = $request_body['phone'];
    $birthday = $request_body['birthday'];
    $sex = $request_body['sex'];
    $address = $request_body['address'];
    $carrer = $request_body['carrer'];
    
    $temp = addPersonal($fullname, $mail, $phone, $birthday, $sex, $address, $carrer);
    echo $temp;
}
else if($action == 'addEducation'){
    // "school": "dai hoc thuy loi",
    // "degree": "dai hoc",
    // "address": "ha noi",
    // "descripition": "khong co gi noi bat",
    // "datestart": "2018-09-18",
    // "dateend": "2020-01-28",
    // "personal_id": 1
    $req = file_get_contents('php://input');
    $req = json_decode($req, true);

    var_dump($req);

    $school = $req['school'];
    $degree = $req['degree'];
    $address = $req['address'];
    $descripition = $req['descripition'];
    $datestart = $req['datestart'];
    $dateend = $req['dateend'];
    $personal_id = $req['personal_id'];

    $check = addEducation($school, $degree, $address, $descripition, $datestart, $dateend, $personal_id);
    echo $check;
}
else if($action == 'getCvByPersonalId'){
    //lay cai id
    $req = json_decode(file_get_contents('php://input'), true);
    $personal_id = $req['personal_id'];

    $res = getPersonalById($personal_id);

    $education = getEducationByPersonalId($personal_id);
    //var_dump($education);

    $res['education'] = $education;

    //var_dump($res);
    echo(json_encode($res));
}
else{
    echo 'error';
}
?>