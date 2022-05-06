<?php
    require_once './server/db.php';
    session_start();

    if (isset($_POST['check'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
       
        
        // echo "<script>alert(". json_encode($fullname) .")</script>";
        // echo "<script>alert(". json_encode($phone) .")</script>";

        $user_query = "SELECT * FROM reservetion2 WHERE fullname = '$fullname' AND phone = '$phone' ";
        $admin_query = "SELECT * FROM tbl_admin WHERE admin_name = '$fullname' AND admin_phone = '$phone' ";
        $query1 = $conn->query($user_query);
        $query2 = $conn->query($admin_query);


        if(mysqli_num_rows($query1) == 1){

            $queryUserData = "SELECT * FROM reservetion2 WHERE fullname='$fullname' LIMIT 1";
            $userData = $conn->query($queryUserData);
            $userData = mysqli_fetch_array($userData);
            
            $_SESSION['name'] = $fullname;
            $_SESSION['table'] = "table " . $userData['tb'] . " on ";
            $_SESSION['date'] = $userData['Days'];
            $_SESSION['Time'] = " at " . $userData['Time_s'] ." " ;
            $_SESSION['AMPM'] = " " . intval($userData['Time_s']) < 12 ? 'AM' : 'PM' . " ";
            
            header('location: confirm_book.php');
        }
        else if(mysqli_num_rows($query2) == 1){
            header('location: admin.php');
        }
        else{
            echo "<script>alert('User or phone incorect.')</script>";
            header("Refresh:0; url=verify_identity.html");
        }
    }
?>

