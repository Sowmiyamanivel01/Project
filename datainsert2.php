<!DOCTYPE html>
<html>
    <head>
        <title> Register With Us </title>
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
                background-color: thistle;
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
        <div class="container">
            <form class="row g-3" name="myform" action="datainsert3.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> Add Driver </h1>
                </div>
                <div class="col-md-12">
                    <label for="busno" class="form-label">Busno</label>
                    <input type="text" class="form-control" id="" placeholder="Enter busno" name="n1" />
                    <span id="bus location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Drivernumber" class="form-label">Drivernumber</label>
                    <input type="text" class="form-control" id="" placeholder="Enter drivernumber" name="n2" />
                    <span id="dname location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="vechiclename" class="form-label">vechiclename</label>
                    <input type="text" class="form-control" id="" placeholder="Enter vechiclename" name="n3" />
                    <span id="vname location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Startloc" class="form-label">Startloc</label>
                    <input type="text" class="form-control" id="" placeholder="Enter startloc" name="n4" />
                    <span id="start location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Endloc" class="form-label">Endloc</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Endloc" name="n5" />
                    <span id="end location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Bustype" class="form-label">Bustype</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter bustype" name="n6" />
                    <span id="bus location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Cost" class="form-label">Cost</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Cost" name="n7" />
                    <span id="costlocation" style="color:blue"> </span>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Register</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validateform(){
                var bno=document.myform.n1.value;
                var dname=document.myform.n2.value;
                var vname=document.myform.n3.value;
                var startloc=document.myform.n4.value;
                var endloc=document.myform.n5.value;
                var bustype=document.myform.n6.value;
                var cost=document.myform.n7.value;
                var s=true;
                if(bno==""){
                    document.getElementById("bus location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("bus location").innerHTML="This field is required";
                }
                if(dname==""){
                    document.getElementById("dname location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("dname location").innerHTML="This field is required";
                }
                if(vname==""){
                    document.getElementById("vname location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("vname location").innerHTML="This field is required";
                }
                if(startloc==""){
                    document.getElementById("start location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("start location").innerHTML="This field is required";
                }
                if(endloc==""){
                    document.getElementById("end location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("end location").innerHTML="This field is required";
                }
                if(bustype==""){
                    document.getElementById("bustype location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("bustype location").innerHTML="This field is required";
                }
                if(cost==""){
                    document.getElementById("cost location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("cost location").innerHTML="This field is required";
                }
                return s;
            }
        </script> 
    </body>
</html>

