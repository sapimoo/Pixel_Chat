<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'"); //lets check that email already exists in the database or not
        if(mysqli_num_rows($sql) > 0){ //if user credentials exists
            $row = mysqli_fetch_assoc($sql);
            $status = "Online";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success"; 
            }
        }else{
            echo "Email atau Password Salah!";
        }
    }else{
        echo "Semua kolom harus diisi!";
    }
?>