<?php
    include "includes/Conn.php";
    include "includes/queries.php";

function CheckLogin() {
    if (isset($_SESSION["user_id"]))
    {
        $userId = $_SESSION['user_id'];

        $conn = ConnectionString();
        if(!$conn)
        {
            die("Database Connection Error");
        }
        $sql = CheckLoginQuery($userId);
        $myQuery = mysqli_query($conn, $sql);
        if (mysqli_num_rows($myQuery) > 0) 
            {
                $row = mysqli_fetch_assoc($myQuery);

                return $row['user_id'];
            }
    }
    header("Location:login.html");
}

function SetUserInfoData($lastName, $firstName, $email, $houseNum, $barangay, $phoneNum, $password)
{
    $conn = ConnectionString();
    if(!$conn)
    {
        die("Database Connection Error");
    }
    $sql = SetUserQuery($lastName, $firstName, $email, $houseNum, $barangay, $phoneNum, $password);
    mysqli_query($conn, $sql);

    $conn->close();
}

function GetUserInfo($email, $password)
{
    $conn = ConnectionString();
    if(!$conn)
    {
        die("Database Connection Error");
    }
    $sql = GetUserQuery($email, $password);
    $myQuery = mysqli_query($conn, $sql);
    if (mysqli_num_rows($myQuery) > 0) 
        {
            $row = mysqli_fetch_assoc($myQuery);

            $userId =  $row['user_id'];
        }
    else 
        {
            $userId = null;
        }

    $conn->close();

    return $userId;
}

function GetAllUserInfo($userId)
{
    $conn = ConnectionString();
    if(!$conn)
    {
        die("Database Connection Error");
    }
    $sql =  GetAllUserInfoQuery($userId);
    $myQuery = mysqli_query($conn, $sql);
    if (mysqli_num_rows($myQuery) > 0) 
        {
            $userInfo = mysqli_fetch_assoc($myQuery);

            return $userInfo;
        }
    else 
        {
            return null;
        }

    $conn->close();
}

function UpdateUserInfoData($userId, $lastName, $firstName, $email, $houseNum, $barangay, $phoneNum, $password)
{
    $conn = ConnectionString();
    if(!$conn)
    {
        die("Database Connection Error");
    }
    $sql = UpdateUserInfoQuery($userId, $lastName, $firstName, $email, $houseNum, $barangay, $phoneNum, $password);
    mysqli_query($conn, $sql);

    $conn->close();
}