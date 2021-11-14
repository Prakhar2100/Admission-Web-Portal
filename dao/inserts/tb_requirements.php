<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = " INSERT INTO `admission`.`tb_requirements` (`requirements_id`, `general_id`,`marksheet10`, `marksheet12`, `aashar`, `cc`, `pc`, `ews`, `hostelReq`, `chronicDisease`, `chronicDetails`, `dateOfFilling`)
    VALUES (NULL, '1', '$scanitem', '$scanitem2', '$scanitem3', '$scanitem4', '$scanitem5', '$scanitem6', '$hostelyn', '$sufferitem', '$diseaseText', '$declarationDate');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into requirements successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>