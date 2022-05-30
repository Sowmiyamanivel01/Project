<?php
            $con=mysqli_connect(
                'localhost',
                'root',
                '',
                'sowmiyadb');  
                if($con===false){
                    die("U have connection error");
                    mysqli_connect_error();
                }
                ?>