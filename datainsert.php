<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/home.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
      <h2>SRM TRAVELS<h2>
</div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03"style="margin-left:40%">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
           
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Registration</a>
          </li>
        </ul>
      </div>
    </nav><br>
<?php
include "db/connection.php";

    $fname=$_POST['n1'];
    $lname=$_POST['n2'];
    $email=$_POST['n3'];
    $mobile=$_POST['n4'];
    $city=$_POST['n5'];
    $state=$_POST['n6'];
    
    
    $sql1="INSERT INTO customertable(custfname,custlname,custemail,custmobile,custcity,custstate) values('$fname','$lname','$email','$mobile','$city','$state')";
   // echo $sql;
    if(mysqli_query($con,$sql1)){
       
            echo "<h6>Registration is successfully done</h6>";
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
            echo "<br>";
        }
        $stri='srm@123';
        $pass=str_shuffle($stri);
        echo "<br>";
        echo "Use this password to login:" .$pass."<br>";
        $sqlins="INSERT INTO logintable (username,password)values('$fname','$pass')";
        if(mysqli_query($con,$sqlins)){
            echo "<br>";
           // echo" login password disply successfully";
        }
        else{
            echo $query."Error while running the query<br/>".mysqli_error($con);
            $fp=fopen('logs/text.txt','a');
            $tmp=date('d-m-y h-m-s');
            $str=$tmp."\n".$query."\n".mysqli_error($con)."\n";
            fwrite($fp,$str);
            fclose($fp);
            echo "<br/> <br/><div> <a href='index.php'> 
            <button class='btn btn-secondary' > << Go Back </button> </a> <div>";
              
                 
        }
        ?><br>
        <div align="left">
        <a href="index.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
