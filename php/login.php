<?php

    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        //check users entered email and pass matched to db
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = "Active now"; //update user status
            
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id']; //use SESSION to use unique_id in other php file
                echo "success";
            }
        }else {
            echo "Email or Password is incorrect!";
        }
    }else {
        echo "All input fields are required!";
    }

?>