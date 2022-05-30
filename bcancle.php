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
   
 <center><h3>BOOKING LIST</h3></center>
    <div class="container">
        <table class="table  table-striped table-bordered">
            <thead>
                <tr>
                    <th>Busid</th>
                    <th>Ticid</th>
                    <th>Custname</th>
                    <th>Drivername</th>
                    <th>Vecnum</th>
                    <th>startloc</th>
                    <th>endloc</th>
                    <th>journeydate</th>
                    <th>bustype</th>
                    <th>numofseats</th>
                    <th>cost</th>
                    <th>status</th>
                    </tr>
            </thead>
        
        <?php
           include "db/connection.php";
              
    $sql="SELECT tickettable.busid,ticid,customertable.custfname,bustable.drivername,bustable.vecnum,
                 bustable.startloc,bustable.endloc, journydate,bustable.bustype,numofseats,tickettable.cost,status
                 FROM `tickettable` INNER JOIN bustable ON tickettable.busid=bustable.busid INNER JOIN customertable ON tickettable.custid=customertable.custid where status='cancel'";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){

                echo "<tr>";
                echo "<td>" .$row['busid']."</td>";
                echo "<td>" .$row['ticid']."</td>";
                echo "<td>" .$row['custfname']."</td>";
                echo "<td>" .$row['drivername']."</td>";
                echo "<td>" .$row['vecnum']."</td>";
                echo "<td>" .$row['startloc']."</td>";
                echo "<td>" .$row['endloc']."</td>";
                echo "<td>" .$row['journydate']."</td>";
                echo "<td>" .$row['bustype']."</td>";
                echo "<td>" .$row['numofseats']."</td>";
                echo "<td>" .$row['cost']."</td>";
                echo "<td>" .$row['status']."</td>";
                 
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

