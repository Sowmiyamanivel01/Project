<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head><br>
<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-info">
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
            <a class="nav-link" href="dashboard.php">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="drivertable.php">ADD DRIVER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">LIST OF BOOKING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bcancle.php">LIST OF CANCEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
    </nav><br>
<?php

    include "db/connection.php";
 
    $busno=$_GET['busno'];
    $sql="SELECT  busno,drivername,vecnum,startloc,endloc,bustype,cost FROM bustable where busno='$busno'";
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
                $busno=$row['busno'];
                $dname=$row['drivername'];
                $vname=$row['vecnum'];
                $startloc=$row['startloc'];
                $endloc=$row['endloc'];
                $bustype=$row['bustype'];
                $cost=$row['cost'];  
                
                }
            mysqli_free_result($res);
        }else{
            echo "No Records Found";
        }
    }else{
        echo $sql."<br/> Error: ".mysqli_error($con);
    }
   
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>Add Student </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
        <style>
            body{
                background-color:white;
            }
            div.container{
                width:400px;
                margin:30px 35%;
                padding:10px 25px 20px 25px;
                border:1px solid none;
                border-radius: 10px;
                background-color:lightgray;
                border:2px solid black;
            }
            h1.h2{
                margin: 20px 10px;
            }
            #B1{
                width:350px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form class="row g-3" action="dupdate1.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center">Update Driver</h1>
                </div>
                <div class="col-md-12">
                    <label for="busno" class="form-label">busno</label>
                    <input type="text" class="form-control" id="" placeholder="Enter busno" name="n1" value="<?php echo $busno?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="Drivernum" class="form-label">Drivernum</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Drivername" name="n2" value="<?php echo $dname?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="vecname" class="form-label">vecname</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter vecname" name="n3" value="<?php echo  $vname?>" required />
                </div>
                <div class="col-md-12">
                    <label for="Startloc" class="form-label">Startloc</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Startloc" name="n4"value="<?php echo  $startloc?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="Endloc" class="form-label">Endloc</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Endloc" name="n5"value="<?php echo  $endloc?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="bustype" class="form-label">bustype</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter bustype" name="n6"value="<?php echo  $bustype?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="Cost" class="form-label">Cost</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Cost" name="n7"value="<?php echo $cost?>" required/>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Update Record</button>
                </div>
            </form>
        </div>
        
    </body>
</html>

