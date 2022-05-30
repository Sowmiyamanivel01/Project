<?php
include "db/connection.php";
    $custid=$_GET['id'];
    $sql="update tickettable set status='cancel' where custid=$custid";
    echo $sql;
   if($result=mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_array($result)){
            $result=$sql($sql);
    echo $result;
   }
}
   }
    header("location:user.php");
?>
