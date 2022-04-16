<?php
require'connect.php';
$first = $last  = $email = $mobile = $ticket = ''; 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sql = "INSERT INTO registration (First, Last, Email, Mobile, Ticket) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[email]', '$_POST[mobile]', '$_POST[ticket]')";
        if (mysqli_query($conn,$sql)) {
            sleep(15);
            header("Location: index.php");
        } else {
            echo "Registered Failed";
        }       
}
