<?php
include 'config.php';

if(isset($_POST['submit'])){
    $fname= $_POST['FName'];
    $lname= $_POST['LName'];
    $email= $_POST['Eamil'];
    $phonenbr= $_POST['pnbr'];

    $sql = "insert into `admin` (FirstName,LastName,Email,phoneNumber)
    values('$fname', '$lname', '$email', ' $phonenbr')";
    $result=mysqli_query($con, $sql);
    if($result){
        echo ("data inserted");
    }
    else{
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
  </head>

 

<body>
<div class="container">

    <form method="post">
        <h3>Sign Up Here</h3>
        
    
        <input type="text" placeholder="FirstName" id="FirstName" name="FName">

       
        <input type="LastName" placeholder="LastName" id="LastName" name="LName">
        
        <input type="Email" placeholder="Email" id="Eamil" name="Eamil">
        

        <input type="Phone number" placeholder="Phone number" name="pnbr" id="pnbr">

        <button type="submit" name="submit">Log In</button>
        
    </form>
</div>
</body>
</html>