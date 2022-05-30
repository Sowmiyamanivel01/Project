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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script><br>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Customername</th>
                    <th>Journeydate</th>
                    <th>Routes</th>
                    <th>No of seats</th>
                    <th>Cost</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
            </thead>
        
        <?php
           include "db/connection.php"; session_start();
           $name=$_SESSION['sname'];
                ?>
    <?php
    $sql="SELECT *  FROM `tickettable`INNER JOIN customertable ON tickettable.custid=customertable.custid where custfname='$name'";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){

                echo "<tr>";
                $custid=$row['custid'];
                echo "<td>" .$row['custfname']."</td>";
                echo "<td>" .$row['journydate']."</td>";
                echo "<td>" .$row['routes']."</td>";
                echo "<td>" .$row['numofseats']."</td>";
                echo "<td>" .$row['cost']."</td>";
                echo "<td>" .$row['status']."</td>";
                echo "<td> <a href='cancel.php?id=".$custid."'onclick='return confirm(\"Do you want to cancel the ticket?\")'><button type='submit' class='btn btn-danger'> cancel </button></a></td>";
                 
             }
            echo "</table>";
            mysqli_free_result($res);
        }
        else{
            echo "Record not found";
        }

        }else{
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
</table>
</div>
</form>
</body>
</html>


  </body>
</html>
