<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
         $name=$_POST['name'];
         $address=$_POST['add'];
         $contact=$_POST['contact'];
         $email=$_POST['email'];
         $password=$_POST['pass'];

        $con=mysqli_connect('localhost','root','','student');
        $sql="insert into info(name,address,contact,email,password) values('$name','$address','$contact','$email','$password')";
        $result= mysqli_query($con,$sql);

    }
    ?>
    <form action="signup.php" method="post">
        <h2>Sign up</h2>
        <div class="name">
            <label for="name">
                Name : <input type="text" name="name" id="name" required>
             </label>
        </div>

        <div class="add">
            <label for="add">
                Address : <input type="text" name="add" id="add" required>
             </label>
        </div>

        <div class="contact">
            <label for="contact">
                Contact : <input type="text" name="contact" id="contact" required>
             </label>
        </div>

        <div class="email">
            <label for="email">
                Email : <input type="email" name="email" id="email">
             </label>
        </div>

        <div class="pass">
            <label for="pass">
                Password : <input type="password" name="pass" id="pass">
             </label>
        </div>

         <dib class="submit">
            <input type="submit" value="Sign up">
         </dib>
    </form>
</body>
</html>