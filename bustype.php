<!DOCTYPE html>
<html>
    <head>
        <title> Register With Us </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
</head>
<body><br>
<center>  <a href='datainsert2.php' ><input type='submit' value='ADD BUS TYPE' class='btn btn-primary' name='' id=''> </a> </center><br>
    <form action="bustype1.php" method="get"> 
<center><h3>BUS TYPE</h3></center>


<select name="select" id="" style="margin-left:40%;width:20%;">
<option id="0">ALL</option>
    <?php
    include "db/connection.php";
    $sql="select * from bustable";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
        echo "<option  id='".$row['busid']."'>".$row['bustype']."</option>";
        
        }
    }
}echo"<input type='hidden' name='name' id=''>";
        ?>
       
        </select><button type="submit" style="width:20mm;">GO</button>
</form>
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>busno</th>
                    <th>Drivername</th>
                    <th>Vehiclenumber</th>
                    <th>Startloc</th>
                    <th>Endloc</th>
                    <th>bustype</th>
                    <th>cost</th>
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