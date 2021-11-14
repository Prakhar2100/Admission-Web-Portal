<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `admission`.`tb_enclosures` (`enclosure_id`, general_id,`seatAllotmentLetter`, `jeeRankCard`, `PhotoIdProof`, `CertificateDob`, `QualifyingExamMarksheet`, `IC-EWS`, `CC`, `CV`, `NCL-Certificate`, `disabilityCertificate`, `transferCertificate`, `migrationCertificate`, `aadharCard`, `gapCertificate`) 
    VALUES (NULL, '1', '$SeatAllotment', '$RankCard', '$IDProof', '$proofofdate', '$MarkSheet', '$IncomeCertificate', '$CastCertificate ', '$Castvalidity', '$layerCertificate', '$disabilities', '$Transfer', '$MigrationCertificate', '$AadhaarCard ', '$GAP');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into enclosures successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>