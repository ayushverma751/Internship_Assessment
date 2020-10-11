<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con1= mysqli_connect("localhost","root","","example");
if($con1)
{
        $name1= mysqli_real_escape_string($con1,$_POST['name1']);
        $city1= mysqli_real_escape_string($con1,$_POST['city1']);
        $occupation1= mysqli_real_escape_string($con1,$_POST['occupation1']);
        $sel1="INSERT INTO `table1` (`name`, `city`, `occupation`) VALUES ('$name1', '$city1', '$occupation1')";
        $res1=mysqli_query($con1,$sel1);
        header('location: index.php');
}