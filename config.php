<?php
    $server = "localhost";
    $user = "database";
    $pass = "asawawuh";
    $db = "zakarfitrah";

    $con = new mysqli($server, $user, $pass, $db);

    if(!$con){
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>