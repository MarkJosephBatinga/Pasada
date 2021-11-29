<?php

function CheckLoginQuery($userID)
{
    $SqlQuery = "SELECT user_id FROM user_info WHERE user_id = $userID";
    return $SqlQuery;
}


function SetUserQuery($lastName, $firstname, $email, $houseNum, $barangay, $phone_num, $password)
{
    $SqlQuery = "INSERT INTO user_info(last_name, first_name, email, house_num, barangay, phone_num, password) VALUES ('$lastName', '$firstname', '$email', '$houseNum', '$barangay','$phone_num', '$password')";
    return $SqlQuery;
}

function GetUserQuery($email, $password)
{
    $SqlQuery ="SELECT * FROM user_info WHERE email='$email' AND password='$password';";
    return $SqlQuery;
}

function GetAllUserInfoQuery($userId)
{
    $SqlQuery ="SELECT * FROM user_info WHERE user_id = $userId;";
    return $SqlQuery;
}

function UpdateUserInfoQuery($userId, $lastName, $firstname, $email, $houseNum, $barangay, $phone_num, $password)
{
    $SqlQuery ="UPDATE user_info SET last_name='$lastName', first_name='$firstname',email='$email',house_num='$houseNum',barangay='$barangay',phone_num='$phone_num',password='$password' WHERE user_id = $userId;";
    return $SqlQuery;
}