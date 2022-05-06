<?php 
session_start();
include('server/db.php'); 


if (isset($_POST['cancel_order'])) {
    $select_data = $_SESSION['name']; // for select in database
    //$fullname = $_POST['fullname'];
    //$phone = $_POST['phone'];
    //$phone = $_SESSION['phone'];
    
    // $date = $_POST['date'];
    // $person = $_POST['person'];
    // $table = $_POST['table'];
    // $time = $_POST['time'];
    
    $query = "SELECT * FROM reservetion2 WHERE fullname = '$select_data' ";
    $query = $conn->query($query);
    $result = $query->fetch_assoc();
    

    if($result){
        $sql = "DELETE FROM reservetion2 WHERE fullname ='$select_data'";
        $query = $conn->query($sql);
        
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly');";
        echo "window.location = 'cancel_success.html'; ";
        echo "</script>";
        }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Update again');";
        echo "window.location = 'home.html'; ";
        echo "</script>";
    }
    mysqli_close ( $conn );
}
?>