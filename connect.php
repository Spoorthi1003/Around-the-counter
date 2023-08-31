<?php
// $firstName=$_POST['firstName'];
// $lastName=$_POST['lastName'];
// $gender=$_POST['gender'];
// $email=$_POST['email'];
// $password=$_POST['password'];
// $number=$_POST['number'];
// //connect database
// $conn= new mysqli('localhost','root','','test');
// if($conn->connect_error){
//     die('Connection failed :'.$conn->connect_error);
// } else{
//     $stmt=$conn->prepare("insert into registration(firstName,lastName,gender,email,password,number) values(?,?,?,?,?,?) ");
//     $stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
//     $stmt->execute();
//     echo "registration completed";
//     $stmt->close;
//     $conn->close();

// }

    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $conn= new mysqli('localhost','root','','food');

    if($conn->connect_error){
        die('Connection failed :'.$conn->connect_error);
    } else {
        $stmt=$conn->prepare("insert into login(email,password) values(?,?) ");
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        echo "registration completed";
        $stmt->close();
        $conn->close();
    }
?>
