<?php
//Create authentication

//Start session
session_start();

if(!isset($_SESSION['ADMIN_ID']) || count($_SESSION['ADMIN_ID']) == 0) {
    header("location: https://demo.trevizo.co.id/sandbox/index.php");
    exit();
}