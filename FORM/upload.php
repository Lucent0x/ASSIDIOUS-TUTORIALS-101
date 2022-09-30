<?php

// creating the connection 

$conn = new mysqli('localhost', 'root', '', 'lucidity');
if($conn){
    $response = "suceeded";

    // get data tranfered through the POST method

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    // transfer data to the server
    if(!empty($name) && !empty($email) && !empty($phone) && !empty($msg)){
       $stmt = mysqli_query($conn, "INSERT INTO contactus (name, email, phone, msg ) VALUES ('{$name}', '{$email}', '{$phone}', '{$msg}' )");

       if($stmt){
        $response = md5("sent");
      
       }else{
        $response = "$conn->error";
       }
    }else{
        $response = " You have to provide value for every input";
    }

}else{
    $response = "failed: $conn->error";
}

echo $response;
?>