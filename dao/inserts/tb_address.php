<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = " INSERT INTO `admission`.`tb_address` (`address_id`, `general_id`, `correspondenceAddress`, `correspondenceCity`, `correspondenceState`, `correspondencePincode`, `correspondenceMob`, `permanentAddress`, `permanentCity`, `permanentState`, `permanentPincode`, `PermanentMob`)
    VALUES (NULL, '1', '$correspondenceAddress', '$correspondenceCity', '$correspondenceState', '$correspondencePincode', '$correspondenceMobile', '$permanentAddress', '$permanentCity', '$permanentState', '$permanentPincode', '$permanentMobile');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into address successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>