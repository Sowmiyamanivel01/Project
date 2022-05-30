<?php
include "db/connection.php";
    $busno=$_POST['n1'];
    $dname=$_POST['n2'];
    $vname=$_POST['n3'];
    $startloc=$_POST['n4'];
    $endloc=$_POST['n5'];
    $bustype=$_POST['n6'];
    $cost=$_POST['n7'];
    
    
    $sql1="INSERT INTO bustable(busno,drivername,vecnum,startloc,endloc,bustype,cost) values('$busno','$dname','$vname','$startloc','$endloc','$bustype','$cost')";
    if(mysqli_query($con,$sql1)){
       
        header("location:drivertable.php");
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
        ?>