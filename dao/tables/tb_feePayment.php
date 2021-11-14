<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_feePayment` ( 
        `feePayment_id` INT(50) NOT NULL AUTO_INCREMENT ,
        `general_id` INT(50) NOT NULL,
        `dd-ecs1` VARCHAR(30) NOT NULL , 
        `councelDate` DATE NOT NULL , 
        `councelAmount` INT(5) NOT NULL , 
        `dd-ecs2` VARCHAR(30) NOT NULL , 
        `admissionDate` DATE NOT NULL , 
        `admissionAmount` INT(5) NOT NULL , 
        `totalAmount` INT(6) NOT NULL , 
        PRIMARY KEY (`feePayment_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    ) ; " ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table feePayment created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>