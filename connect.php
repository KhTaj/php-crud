<?php

$conn=new mysqli('localhost','root','','crudoperation01');

if(!$conn){

    die(mysqli_error($conn));
}
