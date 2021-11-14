<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_general` ( 
        `general_id` INT(50) NOT NULL AUTO_INCREMENT , 
        `name` VARCHAR(50) NOT NULL ,
        `gender` VARCHAR(1) NOT NULL , 
        `bloodGroup` VARCHAR(5) NOT NULL , 
        `dob` DATE NOT NULL , 
        `mob1` VARCHAR(10) NOT NULL , 
        `mob2` VARCHAR(10) NOT NULL , 
        `emailId` VARCHAR(40) NOT NULL , 
        `aadharNo` VARCHAR(16) NOT NULL UNIQUE, 
        `fatherName` VARCHAR(50) NOT NULL ,
        `fatherOccup` VARCHAR(30) NOT NULL , 
        `motherName` VARCHAR(50) NOT NULL , 
        `motherOccup` VARCHAR(30) NOT NULL , 
        `branch` VARCHAR(3) NOT NULL ,
        `minority` VARCHAR(12) NOT NULL , 
        `phyDis` VARCHAR(3) NOT NULL , 
        `image` BLOB NULL , 
        PRIMARY KEY (`general_id`)
    );" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table general created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>