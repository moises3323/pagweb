<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 8/08/2018
 * Time: 11:25 AM
 */
session_start();
//$_SESSION['username']="carlos";
//$_SESSION['pass']="1234";

if(isset($_POST[submit])){
    $username="carlos";
    $password="1234";
}
else{
    header("location: login.php");
}