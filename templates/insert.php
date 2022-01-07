<?php

    require_once("connection.php");

    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['party']) || empty($_POST['time'])) {
            echo ' Please fill in the blanks ';
        } else {
            $User_Name = $_POST['name'];
            $User_Email = $_POST['email'];
            $User_Phone = $_POST['phone'];
            $User_Date = $_POST['date'];
            $User_PartySize = $_POST['party'];
            $User_Time = $_POST['time'];

            $query = " insert into bookings (User_Name, User_Email, User_Phone, User_Date, User_PartySize, User_Time) values('$User_Name', '$User_Email', '$User_Phone', '$User_Date', '$User_PartySize', '$User_Time')";
            $result = mysqli_query($con, $query);

            if($result) {
                header("location:view.php");
            } else {
                echo ' Please check your input ';
            }
        }
    } else {
        header("location:bookaclass.php");
    }

?>