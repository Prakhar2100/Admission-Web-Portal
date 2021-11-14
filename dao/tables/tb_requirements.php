<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_requirements` ( 
        `requirements_id` INT(50) NOT NULL AUTO_INCREMENT , 
        `general_id` INT(50) NOT NULL,
        `marksheet10` VARCHAR(3) NOT NULL , 
        `marksheet12` VARCHAR(3) NOT NULL , 
        `aashar` VARCHAR(3) NOT NULL , 
        `cc` VARCHAR(3) NOT NULL , 
        `pc` VARCHAR(3) NOT NULL , 
        `ews` VARCHAR(3) NOT NULL , 
        `hostelReq` VARCHAR(3) NOT NULL ,
        `chronicDisease` VARCHAR(3) NOT NULL , 
        `chronicDetails` LONGTEXT NOT NULL , 
        `dateOfFilling` DATE NOT NULL , 
        PRIMARY KEY (`requirements_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    ) ;" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table requirements created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>