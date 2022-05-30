<?php session_start();
include "db/connection.php";
?> 
<?php
    $fname=$_POST['n1'];
    $pass=$_POST['n2'];
    $sql="SELECT * FROM logintable where username='$fname'";
    //echo $sql;
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
               $dbpass = $row['password'];
               $dbrole = $row['role'];

                if($pass==$dbpass){
                    $_SESSION['sname'] = $fname;
                    $_SESSION['srole'] = $dbrole;
                    if($row['role']=='a'){
                        header("location:dashboard.php");

                    }else{
                        header("location:user.php");
                    }
                }
        }
    }
}
  
 
    ?>
