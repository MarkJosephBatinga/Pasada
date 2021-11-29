<?php
    session_start();
    session_unset();
    if(session_destroy())
    {
        $userId = $_SESSION['user_id'];
        echo "<script>alert('$userId')</script>";
    
        header("location:index.html");
    }
   
?>