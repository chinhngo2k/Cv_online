<?php
// class Database {
//     private $dsn = 'mysql:host=localhost;dbname=cv';
//     private $username = 'root';
//     private $password = '';
//     private $db = '';


//     public function __construct(){}

//     public function connect(){
//         try{
//             $this->db = new PDO($this->dsn, $this->username, $this->password);
//         }
//         catch(exception $e){
//             exit();
//         }
//         return $this->db;
//     }
// }

//viet kieu huong cau truc

$dsn = 'mysql:host=localhost;dbname=cv';
$username = 'root';
$password = '';
try{
    $db = new PDO($dsn, $username, $password);
}
catch(exception $e){
    echo $e;
}