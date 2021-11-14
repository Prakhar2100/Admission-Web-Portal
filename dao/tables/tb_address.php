<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_address` ( 
        `address_id` INT(50) NOT NULL AUTO_INCREMENT , 
        `general_id` INT(50) NOT NULL,
        `correspondenceAddress` VARCHAR(200) NOT NULL , 
        `correspondenceCity` VARCHAR(15) NOT NULL , 
        `correspondenceState` VARCHAR(15) NOT NULL ,
        `correspondencePincode` INT(8) NOT NULL , 
        `correspondenceMob` BIGINT(12) NOT NULL ,  
        `permanentAddress` VARCHAR(200) NOT NULL , 
        `permanentCity` VARCHAR(15) NOT NULL , 
        `permanentState` VARCHAR(15) NOT NULL , 
        `permanentPincode` INT(8) NOT NULL , 
        `PermanentMob` BIGINT(12) NOT NULL , 
        PRIMARY KEY (`address_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    ) ;" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table address created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>