<?php

//declaring MuSQL variables

    $db_host = "localhost";
    $db_user ="root";
    $db_pwd ="";
    $db_name ="Report";

//Connect query

    $conn = new mysqli($db_host, $db_user, $db_pwd, $db_name) or die ("FAILED TO CONNECT");

?>