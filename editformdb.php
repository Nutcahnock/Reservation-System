<?php 
session_start();
include('server/db.php'); 


if (isset($_POST['edit'])) {
    $select_data = $_SESSION['name']; // for select in database
    
    

    $date = $_POST['date'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $person = $_POST['person'];
    $table = $_POST['table'];
    $time = $_POST['time'];
    
    

    $query = "UPDATE  reservetion2 
    SET `Days`='$date',
    Time_s='$time',
    fullname='$fullname',
    phone='$phone',
    person='$person',
    tb='$table' 
    WHERE fullname='$select_data' ";

    $result = $conn->query($query);
    mysqli_close ( $conn );

    if($result){
        $_SESSION['name'] = $fullname;
        $_SESSION['table'] = "table " . $table . " on ";
        $_SESSION['date'] = $date;
        $_SESSION['Time'] = " at " . $time ." " ;
        $_SESSION['AMPM'] = " " . intval($time) < 12 ? 'AM' : 'PM' . " ";
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly');";
        echo "window.location = 'confirm_book.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Update again');";
            echo "window.location = 'home.php'; ";
        echo "</script>";
        }
}
?>