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
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
        <li class="nav-item active">
            <a class="nav-link" href="user.php">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="tbooking.php">TICKET BOOKING</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
</nav>
<?php
include "db/connection.php";
    $custid=$_POST['n1'];
    $jodate=$_POST['n3'];
    $date=date('y-m-d');
    $route=$_POST['n4'];
    $nseats=$_POST['n6'];
    $sql="SELECT * FROM bustable where busid = '$route'";
    if($result=mysqli_query($con,$sql)){
        if(mysqli_num_rows($result)){
            while($row=mysqli_fetch_array($result)){
                $totalamount=$row['cost'];
                $rout=$row['startloc']." to ".$row['endloc'];
            }
        }
    }
    $sql1="SELECT DATE_ADD('$date',INTERVAL 2 day) as date";
    if($result=mysqli_query($con,$sql1)){
        if(mysqli_num_rows($result)){
            while($row=mysqli_fetch_array($result)){
                $date1=$row['date'];
            }
        }
    }
   
  
    echo "<br>";
    echo  "Amount:" .$totalamount;
    echo "<hr>";
    echo  "No of seats:" .$nseats;
    echo "<hr>";
    $total=$totalamount*$nseats;
    echo  "Total Amount:".$total;
    echo "<hr>";
    echo "<br>";

    $sql1="INSERT INTO tickettable(custid,busid,journydate,routes,numofseats, status,cost) values('$custid','$route','$date1','$rout','$nseats','Booked','$total')";
    if(mysqli_query($con,$sql1)){
        echo "<h3>Tickets are booked sucessfully
              have a great journey</h3>";
       
        //header("location:user.php");
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
        ?> <br><br>
        <div align="left">
        <a href="user.php">
            <button class='btn btn-secondary' > << Go Back </button>
        </a>
        </div>