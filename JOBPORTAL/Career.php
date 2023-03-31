<?php include 'Config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Apply</title>
  <link rel="shortcut icon" href="img.png">
  <style>
  .jumbotron {
    background-image: url("Background.jpg");
    background-size: cover;
    opacity: 1;
    height:400px;
  }
  .row{
    margin:50px;
  }
  .jobs{
    padding: 10px 20px ;
    border-radius: 5%;
    box-shadow: 5px 5px 15px 0 green;
    margin-left:10px;
    margin-top:20px;
  }
</style>
</head>

<body>
    <div class="jumbotron">
        <div class="container" style="height: 400px; text-align:bottom">
	      <h1 class="display-4" style="color:#2010FB; font-weight:500;">Apply For JOB</h1>
	      <p class="lead" style="color:yellow; font-weight:500;">Best Job Available matching your skills</p>
	      </div>
    </div>
<div class="row">
  <?php
    $server='localhost';
    $username='root';
    $password='';
    $database='jobs';
    
    $conn= mysqli_connect($server,$username,$password,$database);
    if($conn->connect_error){
        die("Connection Failed:".$conn->connect_error);
    }
    $sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align:center;">'.$rows['position'].'</h3>
        <h4 style="text-align:center;">'.$rows['cname'].'</h4>
        <p style="color:black; text-align:">'.$rows['Jdesc'].'</p>
        <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
        <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
          aria-expanded="true" aria-controls="collapseExample">
          Apply Now
        </button>
        </div>
        </div>';
      }
    }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="True">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply For Job</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="applying"> 
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Passout Year</label>
            <input type="text" class="form-control" name="year">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="apply" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>