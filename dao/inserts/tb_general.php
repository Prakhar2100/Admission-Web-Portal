<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `admission`.`tb_general` (`general_id`, `name`, `gender`, `bloodGroup`, `dob`, `mob1`, `mob2`, `emailId`, `aadharNo`, `fatherName`, `fatherOccup`, `motherName`, `motherOccup`, `branch`, `minority`, `phyDis`, `image`) 
        VALUES (NULL, '$nameenglish', '$gender', '$bloodGroup', '$dob', '$mobile1', '$mobile2', '$emailid', '$aadhar', '$fatherName', '$fatherOccupation', '$motherName', '$motherOccupation', '$branch', '$religion', '$Disabled', NULL);";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into general successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>