<?php

//lat tat ca
function getAllPersonal()
{
    global $db;
    $personals = $db->query("select * from personal");
    $personals = $personals->fetchAll(PDO::FETCH_ASSOC);
    return $personals;
}

//lay 1 item
function getPersonalById($personal_id)
{
    global $db;
    $personal = $db->query("select * from personal where personal_id = $personal_id");
    $personal = $personal->fetch(PDO::FETCH_ASSOC);
    return $personal;
}

//them
function addPersonal($fullname, $mail, $phone, $birthday, $sex, $address, $carrer)
{
    //kiem tra xem mail da trung lap hay chua
    global $db;
    //echo $mail;
    $personals = $db->query("select * from personal where mail = '$mail'");
    $personals = $personals->fetchAll(PDO::FETCH_ASSOC);

    if (count($personals) > 0) {
        echo 'mail bi trung';
    } else {
        //them moi vao co so du lieu
        $count = $db->exec("insert personal(fullname, mail, phone, birthday, sex, address, carrer) values('$fullname', '$mail', $phone, '$birthday', $sex, '$address', '$carrer')");
        if($count > 0){
            echo 'tao thanh cong';
        }
        else{
            echo 'khong biet la loi gi nhưng ma ko tao duoc';
        }
    }
}


//sua

//xoa


// class Personal {
//     private $db;

//     public function __construct($db)
//     {
//         $this->db = $db;
//     }

//     public function addPersonal($fullname, $mail, $phone, $birthday, $sex, $address, $carrer){
//         //kiem tra xem mail da trung lap hay chua
//         $personals = $this->db->query("select * from personal where mail = $mail");
//         $personals = $personals->fetchAll(PDO::FETCH_ASSOC);
//         if(count($personals) > 1){
//             //mail da ton tai
//             echo 'loi';
//         }
//         else{
//             //them moi vao co so du lieu
//             $count = $this->db->exec("insert personal(fullname, mail, phone, birthday, sex, address, carrer) values('$fullname', '$mail', $phone, '$birthday', $sex, '$address', '$carrer')");
//             return $count;
//         }
//     }
    
//     public function getAllPersonal(){
//         $personals = $this->db->query("select * from personal");
//         $personals = $personals->fetchAll(PDO::FETCH_ASSOC);
//         return $personals;
//     }
    
//     public function getPersonalById($personal_id){
//         $personal = $this->db->query("select * from personal where personal_id = $personal_id");
//         $personal = $personal->fetchAll(PDO::FETCH_ASSOC);
//         return $personal;
//     }
// }
