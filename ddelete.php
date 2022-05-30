<html>
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Page</title>
    <link rel="stylesheet" href="controller/css/bootstrap.min.css" />
	  <link rel="stylesheet" href="controller/css/home.css" />
    <link rel="stylesheet" href="controller/css/style.css" />
    <script src="controller/js/bootstrap.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin:30px 10%;
        }
    </style>
  </head>
  <body>
  <?php 
include "db/connection.php";
  $busno=$_GET['busno'];
  $sql="DELETE FROM bustable where  busno='$busno'";
  if(mysqli_query($con,$sql)){
    header("location:drivertable.php");
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
  </body>
</html>