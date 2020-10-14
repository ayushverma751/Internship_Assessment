<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*
 *  /
 * 
 */
$con2= mysqli_connect('localhost','root','','example');

$q="SELECT * from table1";
$query=mysqli_query($con2,$q);
$data=array();
    while($result=mysqli_fetch_array($query))
    {
        $data[]=$result;
    }
    echo json_encode($data);