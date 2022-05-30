<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin:30px 10%;
            }
    </style>
</head>
<body>
    <center><h2>VIEW PAGE</h2></center>
    <div>   
    <?php 
        include "db/connection.php";
        

    $id=$_GET['busid'];

    $sql="SELECT * FROM bustable where busid='$id'"; ?>
    <table class="table table-striped" align="center">
            <tr>
                    <th>budno</th>
                    <th>Drivername</th>
                    <th>Vehiclenum</th>
                    <th>Startloc</th>
                    <th>Endloc</th>
                    <th>bustype</th>
                    <th>cost</th>
            </tr>
    <?php
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
                echo "<td>" .$row['busno']."</td>";
                echo "<td>" .$row['drivername']."</td>";
                echo "<td>" .$row['vecnum']."</td>";
                echo "<td>" .$row['startloc']."</td>";
                echo "<td>" .$row['endloc']."</td>";
                echo "<td>" .$row['bustype']."</td>";
                echo "<td>" .$row['cost']."</td>";
        }
        echo "</table> <br/>";
        mysqli_free_result($res);
        }
    }else{                
        echo "Error while running the query"."<br/>".mysqli_error($con);
        $err=$sql."<br/>".mysqli_error($con);
        $fp=fopen('logs/view.txt','a');
            fwrite($fp,$err);
            fclose($fp);
    }
    ?> </div>
        <div align="right">
        <a href="drivertable.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
</body>
</html>