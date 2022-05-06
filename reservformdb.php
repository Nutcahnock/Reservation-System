<?php 
    require_once './server/db.php';
    session_start();
    $errors = array();
    
    
    
    

    if (isset($_POST['goreserv'])) {
        $date = $_POST ['date'];
        $fullname = $_POST ['fullname'];
        $phone = $_POST ['phone'];
        $person = $_POST ['person'];
        $table = $_POST ['table'];
        $time = $_POST ['time'];
        


        $post_timeHour = explode(":", $time)[0];
        $post_timeMin = explode(":", $time)[1];
        $post_time = $post_timeHour.'.'.$post_timeMin;

        $query = "SELECT * FROM reservetion2 WHERE tb='$table' AND Time_s='$time' AND `Days`='$date' LIMIT 1";
        $query = $conn->query($query);
        $result = $query->fetch_assoc();
        echo "<script>console.log(". json_encode($result) .")</script>";


        if(!$result){

            $query = "SELECT * FROM reservetion2 WHERE fullname='$fullname' LIMIT 1";
            $query = $conn->query($query);
            $result = $query->fetch_assoc();

            if(!$result ){
                $sql = " INSERT INTO `reservetion2`(`Days`, `Time_s`, `fullname`, `phone`, `person`, `tb`)
                VALUES ('$date',' $time','$fullname','$phone','$person ','$table')";
                $conn->query($sql);


                $_SESSION['name'] = $fullname;
                $_SESSION['table'] = "table " . $table . " on ";
                $_SESSION['date'] = $date;
                $_SESSION['Time'] = " at " . $time ." " ;
                $_SESSION['AMPM'] = " " . intval($time) < 12 ? 'AM' : 'PM' . " ";
                
                header('location: confirm_book.php');
                    
            }else{
                echo "<script>console.log('NO ADD!')</script>" ;
                echo "<script>alert('1 Person can only reserved 1 table! Please cancel you old table or contact admin in shop.')</script>";
                header("Refresh:0; url=reservform.php");
            }

            
        } else {
            echo "<script>console.log('NO ADD!')</script>" ;
            echo "<script>alert('This table has already reserved. Please increase or decrease time around 30 minutes. ')</script>";
            header("Refresh:0; url=reservform.php");
        }

    }
?>