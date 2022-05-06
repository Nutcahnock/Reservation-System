<?php 
    session_start();
    include('server/db.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
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
                <div class = "card-img">
                    <!-- image in css -->
                </div>
                <div class = "card-content">
                <?php include('errors.php'); ?>
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="error">
                            <h3>
                                <?php 
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                    <center><img src="img/logo.png" alt="LOGO" width="60" height="60"></center>
                    <h3>Make a Reservation</h3>
                    <form action="reservformdb.php"method= "POST">
                        <div class = "form-row">
                            <input type="date" name = "date" required/>                               
                            <input type="time" name = "time" min="11:00" max="20:00" required>                  
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name"name = "fullname" required>
                            <input type = "text" placeholder="Phone Number"name = "phone" required>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?"name = "person" min = "1" required>
                            <input type = "number" placeholder="Desired table number?"name = "table" min = "1" max="7" required>
                        </div>
                        <br>
                        <center> <input class="confirm" type="submit"value="Find a table" name ="goreserv"></center>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <center><h15>Oregano's seating chart</h15></center>
            <br>
            <center><img src="img/plan 1.png" alt="plan" width="926" height="520"></center>
            <br>
            <br>
        </section>
        
    </body>
</html>