<?php

//school, degree, address, descripition, datestart, dateend, personal_id

function getEducationByPersonalId($personal_id)
{
    global $db;
    $education = $db->query("select * from education where personal_id = '$personal_id'");
    $education = $education->fetchAll(PDO::FETCH_ASSOC);
    return $education;
}

function addEducation($school, $degree, $address, $descripition, $datestart, $dateend, $personal_id)
{
    global $db;
    $query = "insert education(school, degree, address, descripition, datestart, dateend, personal_id) values('$school', '$degree', '$address', '$descripition', '$datestart', '$dateend', $personal_id)";
    $count = $db->exec($query);
    if ($count > 0) {
        //thuc hien duoc ne
        return true;
    } else {
        return false;
    }
}

function editEducation(){
    
}
