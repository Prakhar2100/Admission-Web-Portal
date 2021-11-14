<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //connection to the server
        include_once('./connection/config.php');

        //including the variables from the frontend
        include_once('./variables/variable.php');

        //query to create the database
        include_once('./dao/createDatabase.php');


        // query to create student table
        include_once('./dao/tables/tb_general.php');

        // query to create student table
        include_once('./dao/tables/tb_jeeDetails.php');
         
        // query to create student table
        include_once('./dao/tables/tb_feePayment.php');

        // query to create student table
        include_once('./dao/tables/tb_enclosures.php');

        // query to create student table
        include_once('./dao/tables/tb_education.php');

        // query to create student table
        include_once('./dao/tables/tb_requirements.php');

        // query to create student table
        include_once('./dao/tables/tb_address.php');


        // query to insert general table
        include_once('./dao/inserts/tb_general.php');

        // query to insert student table
        include_once('./dao/inserts/tb_address.php');

        // query to insert student table
        include_once('./dao/inserts/tb_education.php');

        // query to insert student table
        include_once('./dao/inserts/tb_enclosures.php');

        // query to insert student table
        include_once('./dao/inserts/tb_feePayment.php');

        // query to insert student table
        include_once('./dao/inserts/tb_jeeDetails.php');

        // query to insert student table
        include_once('./dao/inserts/tb_requirements.php');

    }
?>