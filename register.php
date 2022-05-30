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
                border:1px solid black;
                border-radius: 10px;
                background-color: lightgrey;
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
    </nav>
        <div class="container">
            <form class="row g-3" name="myform" action="datainsert.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> Registration </h1>
                </div>
                <div class="col-md-12">
                    <label for="custfname" class="form-label">Customerfirstname</label>
                    <input type="text" class="form-control" id="" placeholder="Enter custfname" name="n1" />
                    <span id="fname location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="custlname" class="form-label">Customerlastname</label>
                    <input type="text" class="form-control" id="" placeholder="Enter custlname" name="n2" />
                    <span id="lname location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="custemail" class="form-label">Customeremail</label>
                    <input type="email" class="form-control" id="" placeholder="Enter Custemail" name="n3" />
                    <span id="email location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="custmobile" class="form-label">Customermobile</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter custmobile" name="n4" />
                    <span id="mobile location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Custcity" class="form-label">Customercity</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter custcity" name="n5" />
                    <span id="city location" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="custstate" class="form-label">Customerstate</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter custstate" name="n6" />
                    <span id="statelocation" style="color:blue"> </span>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Register</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validateform(){
                var fname=document.myform.n1.value;
                var lname=document.myform.n2.value;
                var email=document.myform.n3.value;
                var mobile=document.myform.n4.value;
                var city=document.myform.n5.value;
                var state=document.myform.n6.value;
                var s=true;
                if(fname==""){
                    document.getElementById("fname location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("fname location").innerHTML="";
                }
                if(lname==""){
                    document.getElementById("lname location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("lname location").innerHTML="";
                }
                if(email==""){
                    document.getElementById("email location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("emaillocation").innerHTML="";
                }
                if(mobile==""){
                    document.getElementById("mobile location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("mobile location").innerHTML="";
                }
                if(city==""){
                    document.getElementById("city location").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("city location").innerHTML="";
                }
                if(state==""){
                    document.getElementById("statelocation").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("statelocation").innerHTML="";
                }
                return s;
            }
        </script> 
    </body>
</html>

