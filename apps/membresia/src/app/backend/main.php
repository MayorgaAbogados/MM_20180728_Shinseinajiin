<?php

  // ----------------------------------------------//
  // ----- Backend Script for MM Tohyo Forms ------//
  // ----------------------------------------------//

  include('./header.php');
  include('./settings.php');

  
  $in_company = $_POST['company'];
  $in_industry = $_POST['industry'];
  $in_nit = $_POST['nit'];
  $in_city = $_POST['city'];
  $in_name = $_POST['contactName'];
  $in_email = $_POST['contactEmail'];
  $in_cellphone = $_POST['contactCellphone'];
  $in_phone = $_POST['phone'];
  $in_twitter = $_POST['twitter'];

    // Database Connection //
    $DB_Username = "mayorgac_abogado";
    $DB_Password = "suaita.monteria";
    $DB_Host     = "127.0.0.1";
    $DB_Database   = "mayorgac_abogados";
    $DB_Table = "db_passport";

    $connStatus = "";
    $Conn = new mysqli($DB_Host,$DB_Username,$DB_Password,$DB_Database);
    if ($Conn->connect_error) {
       $connStatus =  $connStatus.$Conn->connect_error;
       echo $connStatus;
    }

    if (!$Conn->set_charset("utf8")) {
         $connStatus =  $connStatus.$Conn->connect_error;
         echo $connStatus;
    }
    
    $sql = 'INSERT INTO '.$DB_Table' (company, industry, nit, city, name, email, cellphone, phone, twitter)';
    $sql = $sql." VALUES ('company', 'industry', 'nit', 'city', 'name', 'email', 'cellphone', 'phone', 'twitter')";


    if ( $Conn->query($sql) === TRUE ) {
        $returnvar = "New record created successfully";
    } else {
        $returnvar = "Error: " . $sql . "<br>" .  $Conn->error;
    }
  }

  echo $returnvar;


?>
