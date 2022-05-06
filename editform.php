<?php 
    session_start();
    include('server/db.php'); 


    
    $sql = "SELECT * FROM reservetion2" ;
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
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
        
        <section class = "banner">
            <h2>Oregano's</h2>
            <div class = "card-container">
                <div class = "card-img2">
                    <!-- image in css -->
                </div>
                <div class = "card-content">
                    <center><img src="img/logo.png" alt="LOGO" width="60" height="60"></center>
                    <h3>Edit a Reservation</h3>
                    <form action="editformdb.php" method="POST">
                        <div class = "form-row">
                            <input type="date" name="date">                              
                            <input type="time" name="time">  
                        </div>
                        <div class = "form-row">
                            <input type = "text" name="fullname" placeholder="Full Name" >
                            <input type = "text" name="phone"placeholder="Phone Number" >
                        </div>

                        <div class = "form-row">
                            <input type = "number" name="person" placeholder="How Many Persons?" min = "1">
                            <input type = "number" name="table" placeholder="Desired table number?" min = "1" max="7">
                        </div>
                        <br>
                        <center><button name="edit" type="submit" class="confirm" >
   
                            Find a Table! 

                        </button></center>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>