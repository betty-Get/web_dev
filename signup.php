<?php
include 'config.php';

if(isset($_POST['submit'])){
    $fname= $_POST['FName'];
    $lname= $_POST['LName'];
    $gender= $_POST['Gender'];
    $email= $_POST['Eamil'];
    $dob= $_POST['dob'];
    $phonenbr= $_POST['pnbr'];
    $address= $_POST['add'];

    $sql = "insert into `employees` (FirstName,LastName,Gender,Email,dateofbirth,phoneNumber,Address)
    values('$fname', '$lname', ' $gender', '$email', ' $dob',' $phonenbr', '$address')";
    $result=mysqli_query($con, $sql);
    if($result){
        alert ("data inserted");
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

        
        <input type="Gender" placeholder="Gender" id="Gender" name="Gender">
        
        <input type="Email" placeholder="Email" id="Eamil" name="Eamil">
        
        <input type="DateOfBirth" placeholder="DateOfBirth" id="DateOfBirth" name="dob">


        <input type="Phone number" placeholder="Phone number" name="Phone number" id="pnbr">

        
        <input type="Address" placeholder="Address" id="Address" name="add">

        <button type="submit" name="submit">Log In</button>
        
    </form>
</div>
</body>
</html>


