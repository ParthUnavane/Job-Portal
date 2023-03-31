<?php include 'Header.php'?>
<?php include 'Config.php'?>

    <!-- Page content -->
    <div class="content">
      <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Link with href
    </a> -->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">
          Post Job
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form  method="POST">
            <div class="mb-3">
              <label for="companyname" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="" name="cname" required>
            </div>
            <div class="mb-3">
              <label for="position" class="form-label">Position</label>
              <input type="text" class="form-control" id="position" name="position" required>
            </div>
            <div class="mb-3">
              <label for="Description" class="form-label">Job Description(Optional)</label>
              <input type="text" class="form-control" id="Jdesc" name="Jdesc" required>
            </div>
            <div class="mb-3">
              <label for="skills" class="form-label">Skills Required</label>
              <input type="text" class="form-control" id="skills" name="skills" required>
            </div>
            <div class="mb-3">
              <label for="CTC" class="form-label">CTC</label>
              <input type="text" class="form-control" id="CTC" name="CTC" required>
            </div>
            <button type="submit" class="btn btn-primary" name="job">Submit</button>
          </form>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Position</th>
            <th scope="col">CTC</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $server='localhost';
          $username='root';
          $password='';
          $database='jobs';
          
          $conn= mysqli_connect($server,$username,$password,$database);
          if($conn->connect_error){
              die("Connection Failed:".$conn->connect_error);
          }
          echo"";  
          $sql="SELECT cname,position,CTC FROM jobs";
          $result=mysqli_query($conn,$sql);
          $i=0;
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

          if(mysqli_num_rows($result)>0){
            echo"
            <tbody>
            <tr>  
              <td>".++$i."</td>
              <td>".$row['cname']."</td>
              <td>".$row['position']."</td>
              <td>".$row['CTC']."</td>
            </tr>";
          while($row=$result->fetch_assoc()){
            echo"
            <tbody>
            <tr>  
              <td>".++$i."</td>
              <td>".$row['cname']."</td>
              <td>".$row['position']."</td>
              <td>".$row['CTC']."</td>
            </tr>";
    }
  }

    else{
        $error='email id or password is incorrect';
    }
    mysqli_close($conn);
    ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>