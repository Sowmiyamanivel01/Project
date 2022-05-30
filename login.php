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
                border:2px solid black;
                background-color:ghostwhite;
            }
            h1.h2{
                margin: 20px 10px;
            }
            #B1{
                width:350px;
            }
        </style>
    </head>
    
    <body><br>
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
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
    </nav>
    <body>
        <div class="container">
            <form class="row g-3" action="login2.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center">LOGIN </h1>
                </div>
                <div class="col-md-12">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter Username" name="n1" required/>
                </div>
                <div class="col-md-12">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id=" " placeholder="Enter Password" name="n2" required/>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary"onclick="return validateform()">Login</button>
                </div>
           </form>
        </div>
        </body>
</html>

