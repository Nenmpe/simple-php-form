<?php
session_start();
//  include_once(db.php);
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name='';
     $email=$_POST["email"];
    $pass=$_POST['password'];

    $connection=mysqli_connect('localhost','root','','student');
    $query="select * from info where email='$email' and password='$pass'";

    $result1 = mysqli_query($connection, $query);
if($result1){     
    while($user = $result1->fetch_assoc()){
        $name=$user["name"];
        $_SESSION["name"]=$name;
    }
}

if($name!=null){
    header("Location:homePage.php");
    exit(); 
}
else{
    header("Location:login.php?error");
    exit();
}
}
?>