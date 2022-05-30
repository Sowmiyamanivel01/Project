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
        <style>
            body{
                background-color:white;
            }
            div.container{
                width:400px;
                margin:30px 35%;
                padding:10px 25px 20px 25px;
                border:1px solid black;
                border-radius: 10px;
                background-color:seashell;
            }
            h1.h2{
                margin: 20px 10px;
            }
            #B1{
                width:350px;
            }
        </style>
    </head>
 
        <div class="container">
            <form class="row g-3" name="myform" action="tinsert.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> BUS TICKET BOOKING </h1>
                </div>
                <div class="col-md-12">
                   <h6>customer name</h6>
                   <select class="form-control" name="n1" id="" style="width:350px;">
                    <option id="0"></option>
                        <?php
                        include "db/connection.php";
                        $sql="select * from customertable";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option  value='".$row['custid']."'>".$row['custfname']."</option>";
                           
                            }
                        }
                    }
                    ?></select>
                </div>
                <div class="col-md-12">
                    <h6><label for="Journeydate" class="form-label">Journeydate</label><h6>
                    <input type="date" class="form-control" id="" placeholder="" name="n3" />
                </div>
                <div class="col-md-12">
                <h6>Routes</h6>
                    <select class="form-control"name="n4" id="" style="width:350px;">
                    <option id="0"></option>
                        <?php
                        include "db/connection.php";
                        $sql="select * from bustable";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option  value='".$row['busid']."'>".$row['startloc']. " to " .$row['endloc']."</option>";
                            
                            }
                        }
                        }
                        ?></select>
                    </div>
                    <div class="col-md-12">
                   <h6> <label for="no of seats" class="form-label">No of seats</label></h6>
                    <input type="text" class="form-control" id=" " placeholder="" name="n6" />
                <div class="col-md-12">
                   <h6> <label for="pay" class="form-label">Pay</label></h6>
                    <input type="radio"  id=" " placeholder="" name="n7" />
                </div>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">BOOK</button>
                </div>
            </form>
        </div>
                    </body>
                    </html>