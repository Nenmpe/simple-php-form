<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    
</head>
<body>
<?php
include_once("nav.php");
 $connection=mysqli_connect('localhost','root','','student');
$query1="SELECT * FROM information";
$result1 = mysqli_query($connection, $query1);
if($result1){     
?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>DoB</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Course</th>
    <th>Actions</th>

</tr>
<?php
    while($user = $result1->fetch_assoc()){
?>
<tr>
    <td>
        <?php echo $user["id"];?>
    </td>
    <td>
        <?php echo $user["name"];?>
    </td>
    <td>
        <?php echo $user["address"];?>
    </td>
    <td>
        <?php echo $user["dob"];?> 
    </td>
    <td>
         <?php echo $user["gender"];?>
    </td>
    <td>
        <?php echo $user["phone"];?>
    </td>
    <td>
        <?php echo $user["course"];?>
    </td>
    <td>
        <a href="std.php?id=<?=$user["id"]?>">Edit</a> | 
        <a href="delete.php?id=<?=$user["id"]?>" role="button" onclick="return msg()">Delete</a>
    </td>
</tr>
<?php
    }

}
?>

<script type="text/javascript">  
    function msg(){  
        var v= confirm("Are u sure?");  
        if(v==true){  
            return true;  
        }  
        else{  
            return false;
        }  
}  
</script>  
</table>
</body>
</html>
