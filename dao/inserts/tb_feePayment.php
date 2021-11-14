<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `admission`.`tb_feePayment` (`feePayment_id`, `general_id`, `dd-ecs1`, `councelDate`, `councelAmount`, `dd-ecs2`, `admissionDate`, `admissionAmount`, `totalAmount`) 
    VALUES (NULL, '1', '$dd1', '$date1', ' $amount1', '$dd2', '$date2', '$amount2', ($amount1 + $amount2));";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into feePayment successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>