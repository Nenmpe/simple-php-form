<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #1ad7b7;
}

form {
    margin: auto;
    width: 25vw;
    padding: 20px;
    border: 1px solid rgb(158, 166, 218);
    border-radius: 10px;
    background-size: cover;
    background-color: rgb(0, 255, 242);
}

h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}

label {
    display: block;
    /* margin-bottom: 5px; */
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"]{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    color: black;
    border-radius: 5px;
    box-sizing: border-box;
    opacity: 0.5;
}

/* #gen {
    margin-bottom: 5px;
} */

select, .cou {
    width: 343px;
    /* margin-bottom: 10px; */
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    
}
.cou{
    margin-bottom: 10px;
}

.submit {
    align-items:center;
    margin-left: 37%;
}

[type=submit]{
    background-color: rgb(223, 187, 139);
    font: bold;
    border: none;
    height: 35px;
    width: 100px;
    cursor: pointer;
    text-decoration: none;
    border-radius: 10px;
    color: black;
}

[type=submit]:hover{
    background-color: rgb(153, 94, 22);
}


    </style>
</head>
<body>
    
    <form action="signmeup.php" method="post">
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
                Contact : <input type="tel" name="contact" id="contact" required>
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

         <div class="submit">
            <input type="submit" value="Sign up">
         </div>
         <div>
            <span>Already have an account</span>
            <a href="login.php">Login</a>
    </div>
    </form>
</body>
</html>