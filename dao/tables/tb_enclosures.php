<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `admission`.`tb_enclosures` ( 
        `enclosure_id` INT(50) NOT NULL AUTO_INCREMENT ,
        `general_id` INT(50) NOT NULL,
        `seatAllotmentLetter` VARCHAR(3) NOT NULL , 
        `jeeRankCard` VARCHAR(3) NOT NULL , 
        `PhotoIdProof` VARCHAR(3) NOT NULL , 
        `CertificateDob` VARCHAR(3) NOT NULL ,
        `QualifyingExamMarksheet` VARCHAR(3) NOT NULL , 
        `IC-EWS` VARCHAR(3) NOT NULL , 
        `CC` VARCHAR(3) NOT NULL ,
        `CV` VARCHAR(3) NOT NULL , 
        `NCL-Certificate` VARCHAR(3) NOT NULL , 
        `disabilityCertificate` VARCHAR(3) NOT NULL , 
        `transferCertificate` VARCHAR(3) NOT NULL , 
        `migrationCertificate` VARCHAR(3) NOT NULL , 
        `aadharCard` VARCHAR(3) NOT NULL , 
        `gapCertificate` VARCHAR(3) NOT NULL , 
        PRIMARY KEY (`enclosure_id`),
        FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
    ) ;" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table enclosures created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>