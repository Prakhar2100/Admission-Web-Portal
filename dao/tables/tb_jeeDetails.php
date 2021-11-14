<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_jeeDetails` ( 
        `jeeDetail_id` INT(50) NOT NULL AUTO_INCREMENT, 
        `general_id` INT(50) NOT NULL,
        `roundOfAllotment` INT(2) NOT NULL, 
        `jeeRollNo` VARCHAR(20) NOT NULL,
        `air` INT(7) NOT NULL, 
        `mark` INT(3) NOT NULL, 
        `score` FLOAT(4) NOT NULL, 
        `year` INT(4) NOT NULL, 
        `allotmentCategory` VARCHAR(5) NOT NULL, 
        `candidateCategory` VARCHAR(5) NOT NULL, 
        PRIMARY KEY (`jeeDetail_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    );" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table jeeDetail created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>