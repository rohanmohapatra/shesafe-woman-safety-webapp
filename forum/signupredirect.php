<?php
if(isset($_POST['fname']) && isset($_POST['lname']))
{
    echo '<script> alert(Hello'.$_POST['fname'].$_POST['lname'].')';
    header("Location:signup.php");
}
?>