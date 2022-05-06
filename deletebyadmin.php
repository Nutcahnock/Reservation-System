<?php 
    session_start();
    include('server/db.php'); 

    $fullname = $_REQUEST["fullname"];

    $sql = "DELETE FROM reservetion2 WHERE fullname='$fullname'";
    $query = $conn->query($sql);
 
	
    if($query){
        echo "<script type='text/javascript'>";
        echo "alert('delete Succesfuly');";
        echo "window.location = 'admin.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }

    mysqli_close ( $conn );
    
?>