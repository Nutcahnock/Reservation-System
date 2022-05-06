<?php 
    session_start();
    include('server/db.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Cancel</title>
</head>
<body>
    <ul>
      <p><img src="img/logo.png" alt="LOGO" width="45" height="45"></p>
      <li><a href="contact.html">CONTACT US</a></li>
      <li><a href="showdata.php">TABLE LIST</a></li>
      <li><a href="verify_identity.html">LOGIN</a></li>
      <li><a href="reservform.php">BOOKING</a></li>
      <li><a class="active" href="home.html">HOME</a></li>
    </ul>
      <br>
      <center>
      <div  class="bg">
        <form action = "cancel_choicedb.php" method= "POST">
            <img src="img/logo.png" alt="LOGO" width="100" height="100">
            <br>
            <img src="img/women_cancel.png" alt="Cancel_choice" width="322" height="321">
            <br>
            <h13>Are you sure to cancel the reservation?</h13><br>
            <h14>It’s okay, you can reserve a new table whenever you want.</h14><br>
            <a href="home.html" class="buthome">No, I’m not sure</a>
            <img src="img/empty.png" alt="Cancel" width="132" height="90"> 
            <button  name ="cancel_order" class="buthome" type ="submit" >Yes, I’m sure</button>
            <br>

            

        </form>

      </div>
    </center>


</body>
</html>