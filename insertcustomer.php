<?php

include 'db.php';

$response = array();
 

    $reg_no = $_POST['reg_no'];
    $model = $_POST['model'];
    $c_name = $_POST['c_name'];
    $c_address = $_POST['c_address'];
    $c_mobile = $_POST['c_mobile'];
    $chasis_no =$_POST['chasis_no'];
    $engine_no=$_POST['engine_no'];
   
    $kilometer=$_POST['kilometer'];
    $status=$_POST['status'];
    $olddatafound=$_POST['olddatafound'];
    $olddatadate=$_POST['olddatadate'];
    $lastdate_service=$_POST['lastdate_service'];
    



   // mysql inserting a new row
  $sql = "INSERT INTO customer (reg_no,model,c_name,c_address,c_mobile,chasis_no,engine_no,kilometer,status,olddatafound)
VALUES ('$reg_no','$model','$c_name','$c_address','$c_mobile','$chasis_no','$engine_no','$kilometer','1','N');";

$result = $conn->query($sql);


 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "New Record Created Successfully.";
 

$message2=$response["message"];
        // echoing JSON response
        //echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
$message2=$response["message"];
        // echoing JSON response
       // echo json_encode($response);
    }
													///////// Till here

			


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Status</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  <?php include_once "../backend/pageheader.php"; ?>
  <!--Card-->
  <center>
<div class="card">
    <!--Card image-->
    <div class="view overlay hm-white-slight">
       
        <a href="#">
            <div class="mask"></div>
        </a>
    </div>

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title"><?php echo $message2; ?></h4>
        <!--Text-->
        <p class="card-text"><?php echo $finalmessage; ?></p>
        <a href="http://shreelaxmiauto.com/frontend/landingpage.php" class="btn btn-primary">Go Back</a>
    </div>

</div>
<!--/.Card-->
</center>
               

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

