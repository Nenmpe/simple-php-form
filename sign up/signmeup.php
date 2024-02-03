<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
         $name=$_POST['name'];
         $address=$_POST['add'];
         $contact=$_POST['contact'];
         $email=$_POST['email'];
         $password=$_POST['pass'];

         $encryptedPass=password_hash($password,PASSWORD_DEFAULT);

        $con=mysqli_connect('localhost','root','','student');
        $sql="insert into info(name,address,contact,email,password) values('$name','$address','$contact','$email','$encryptedPass')";

        $result= mysqli_query($con,$sql);
    }
    ?>