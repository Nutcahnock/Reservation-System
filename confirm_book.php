<?php
    require_once './server/db.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Confirm Reservation</title>
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
        <form >
            <img src="img/logo.png" alt="LOGO" width="100" height="100">
            <br>
            <h8>Bravo, your  reservation is ready!</h8>
            <br>
            <h9>Still going to make it?</h9>
            <br>
            <a href="home.html" class="succes">I’ll be there!</a>
            <br>
            <br>
            <h10><?php 
                    echo $_SESSION['table'];
                    echo $_SESSION['date'];
                    echo $_SESSION['Time'];
                    echo $_SESSION['AMPM'];
                  ?></h10>
            <br>
            <h11><?php
             echo "Name : " . $_SESSION['name'] . " "; 
                ?></h11><br>
            <br>
            <h12>**Please remember your confirmation number for later</h12>
            <br><br>
            <a href="editform.php"><img src="img/Edit info.png" alt="Edit info" width="94" height="125" ></a>
            <img src="img/empty.png" alt="Cancel" width="132" height="136">
            <a href="cancel_choice.php"><img src="img/Cancel.png" alt="Cancel" width="132" height="136"></a>
            

        </form>

      </div>
    </center>
</body>
</html>