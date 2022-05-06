<?php 
    session_start();
    include('server/db.php'); 

    $sql = "SELECT * FROM reservetion2 ORDER BY tb" ;
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Admin</title>
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
        <form action="deletebyadmin.php" method= "POST">
            <img src="img/logo.png" alt="LOGO" width="100" height="100">
            <br>

            <table>
              <thead>
                <tr>
                  <th>TABLE</th>
                  <th>FULL NAME</th>
                  <th>PHONE NUMBER</th>
                  <th>DATE</th>
                  <th>TIME</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = $query->fetch_assoc()): ?>
                <tr>
                  <td><?php echo $row['tb']; ?></td>
                  <td><?php echo $row['fullname']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['Days']; ?></td>
                  <td><?php echo $row['Time_s']; ?></td>
                </tr>
                <?php endwhile ?>
              </tbody>
          </table>
        </form>

      </div>
    </center>
</body>