<?php include 'Config.php'; ?>
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
          margin-top: 10em;
          margin-left: 25em;
          margin-right: 20em;
          padding: 30px;
          box-shadow: 10px 10px 10px 5px black;
          background-color: white;
          }
    </style>
    <title>Login</title>
</head>
<body>

    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <br>
  <p style="text-align: center;">New User?<br> Create Account <a href="Register.php">Sign Up</a></p>
   
    </form>
    </div>
</body>
</html>