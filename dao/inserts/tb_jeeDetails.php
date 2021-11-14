<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `admission`.`tb_jeeDetails` (`jeeDetail_id`, `general_id`, `roundOfAllotment`, `jeeRollNo`, `air`, `mark`, `score`, `year`, `allotmentCategory`, `candidateCategory`)
        VALUES (NULL, '1', '$allotmentRound', '$jeeRollno', '$jeeAir ', '$jeeMark', '$jeeScore', '$jeeyear', '$category1', ' $category2');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into jeeDetails successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>