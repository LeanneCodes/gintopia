<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['date']) &&
        isset($_POST['party']) && isset($_POST['time'])) {
        
        $User_Name = $_POST['name'];
        $User_Email = $_POST['email'];
        $User_Phone = $_POST['phone'];
        $User_Date = $_POST['date'];
        $User_PartySize = $_POST['party'];
        $User_Time = $_POST['time'];
        $host = "localhost";
        $dbUser_Name = "root";
        $dbName = "gintopia";
        $conn = new mysqli($host, $dbUsername, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM gintopia WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO gintopia(name, email, phone, date, party, time) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssidii",$User_Name, $User_Email, $User_Phone, $User_Date, $User_PartySize, $User_Time);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>