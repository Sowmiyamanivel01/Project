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
   <center> <a href="datainsert2.php" ><input type="submit" value="Add Driver" class="btn btn-primary" name="" id=""></a></center><br>
  <form action="datainsert2.php" method="get">  
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Busno</th>
                    <th>Drivername</th>
                    <th>Vehiclenumber</th>
                    <th>Startloc</th>
                    <th>Endloc</th>
                    <th>Bustype</th>
                    <th>Cost</th>
                    <th colspan="3">Action</th>
                    </tr>
            </thead>
        
        <?php
           include "db/connection.php";
                ?>
    <?php
    $sql="SELECT * FROM bustable";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){

                echo "<tr>";
                echo "<td>" .$row['busno']."</td>";
                echo "<td>" .$row['drivername']."</td>";
                echo "<td>" .$row['vecnum']."</td>";
                echo "<td>" .$row['startloc']."</td>";
                echo "<td>" .$row['endloc']."</td>";
                echo "<td>" .$row['bustype']."</td>";
                echo "<td>" .$row['cost']."</td>";
                echo "<td><a href='ddelete.php?busno=".$row['busno']."' onclick='return confirm(\"Do you want to delete this record?\")'><i class=\"fa fa-trash-o\"></i></a></td>";
                echo "<td><a href='dupdate.php?busno=".$row['busno']."'><i class=\"fa fa-wrench\"></i></a></td>";
                echo "<td><a href='dview.php?busid=".$row['busid']."'><i class=\"fa fa-eye\"></i></a></td>"; 
                 
             }
            echo "</table>";
            mysqli_free_result($res);
        }
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
</table>
</div>
</form>
</body>
</html>

