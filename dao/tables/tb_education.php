<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_education` ( 
        `education_id` INT(50) NOT NULL AUTO_INCREMENT , 
        `general_id` INT(50) NOT NULL,
        `ssc10BoardName` VARCHAR(20) NOT NULL , 
        `ssc10YOP` INT(4) NOT NULL , 
        `ssc10Marks` INT(3) NOT NULL ,
        `ssc10Percentage` VARCHAR(3) NOT NULL , 
        `hsc12BoardName` VARCHAR(20) NOT NULL , 
        `hsc12YOP` INT(4) NOT NULL , 
        `hsc12Marks` INT(3) NOT NULL , 
        `hsc12Percentage` VARCHAR(3) NOT NULL , 
        `hsc12Sub` VARCHAR(150) NOT NULL , 
        `ssc10Sub` VARCHAR(150) NOT NULL , 
        PRIMARY KEY (`education_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    ) ;" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table education created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>