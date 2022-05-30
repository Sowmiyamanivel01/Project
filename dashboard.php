<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <scritpt src="JS/bootstrap.min.js"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
         
    </head>
    <style>
            body{
                margin-top:20px;
                background:#FAFAFA;
            }
            .order-card {
                color: #fff;
            }

            .bg-c-blue {
                background: linear-gradient(45deg,#4099ff,#73b4ff);
            }

            .bg-c-green {
                background: linear-gradient(45deg,#2ed8b6,#59e0c5);
            }

            .bg-c-yellow {
                background: linear-gradient(45deg,#FFB64D,#ffcb80);
            }


            .card {
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
                box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
                border: none;
                margin-bottom: 30px;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .card .card-block {
                padding: 40px;
            }

            .order-card i {
                font-size: 36px;
            }

            .f-left {
                float: left;
            }

            .f-right {
                float: right;
            }
        </style>
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
      <h4>SRM TRAVELS<h4>
</div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03"style="margin-right:20%">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
        <li class="nav-item active">
            <a class="nav-link" href="dashboard.php" style="font-size:20px">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="drivertable.php" style="font-size:20px">ADD DRIVER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php" style="font-size:20px">LIST OF BOOKING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bcancle.php" style="font-size:20px">LIST OF CANCEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="font-size:20px">LOGOUT</a>
          </li>
        </ul>
      </div>
    </nav><br>
            <?php
         include 'db/connection.php';
                 ?>
                

                    
                <br/><br/><br/><br/>
<!--   new code  -->

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Driver </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-book f-left"></i><span>
                        <?php 
                                      $sql="SELECT busid FROM bustable";
                                      if($res=mysqli_query($con,$sql)){
                                         $count=mysqli_num_rows($res);
                                             
                                          echo $count;
                                          }
                                          else{
                                              echo "error";
                                          }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Booking List </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-gears f-left"></i><span>
                    <?php 
                                     $sql1="SELECT ticid FROM tickettable where status='Booked'";
                                     if($res=mysqli_query($con,$sql1)){
                                        $count1=mysqli_num_rows($res);
                                            
                                         echo $count1;
                                         }
                                         else{
                                             echo "error";
                                         }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Cancel List </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-users f-left"></i><span>
                    <?php 
                                     $sql="SELECT ticid FROM tickettable WHERE status='cancel'";
                                     if($res=mysqli_query($con,$sql)){
                                        $count=mysqli_num_rows($res);
                                            
                                         echo $count;
                                         }
                                         else{
                                             echo "error";
                                         }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        

<!--new code -->
                    
                

       </div>
        
    </body>