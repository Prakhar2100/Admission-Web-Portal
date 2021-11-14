<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `admission`.`tb_education` (`education_id`, `general_id`, `ssc10BoardName`, `ssc10YOP`, `ssc10Marks`, `ssc10Percentage`, `hsc12BoardName`, `hsc12YOP`, `hsc12Marks`, `hsc12Percentage`, `hsc12Sub`, `ssc10Sub`) 
        VALUES (NULL, '1', '$boardName1', '$yop1', '$marksObtained1', '$grade1', '$boardName2', '$yop2', '$marksObtained2', '$grade2', ' $subject1', '$subject2 ');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into education successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>