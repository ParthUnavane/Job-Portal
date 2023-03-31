<?php include 'Config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="img.png">
    <style>
      body{
        background-image: url("Background 1.jpg") ;
        background-size: cover;
      }
      form{
          margin-top: 6em;
          margin-left: 25em;
          margin-right: 20em;
          padding: 30px;
          box-shadow: 10px 10px 10px 5px black;
          background-color: white;
          }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" >
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputConfirmPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputConfirmPassword2">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br><br>
  Already Registered? <a href="Login.php">Login</a>
    </form>
    </div>
</body>
</html>