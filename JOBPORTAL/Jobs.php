<?php include 'Header.php'?>

    <div class="content">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Candidate Name</th>
            <th scope="col">Qualification</th>
            <th scope="col">Passout Year</th>
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

        $sql="SELECT name,qual,year FROM candidates";
          $result=mysqli_query($conn,$sql);
          $i=0;
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

          if(mysqli_num_rows($result)>0){
            echo"
            <tbody>
            <tr>  
              <td>".++$i."</td>
              <td>".$row['name']."</td>
              <td>".$row['qual']."</td>
              <td>".$row['year']."</td>
            </tr>";
          while($row=$result->fetch_assoc()){
            echo"
            <tbody>
            <tr>
            <td>".++$i."</td>  
            <td>".$row['name']."</td>
            <td>".$row['qual']."</td>
            <td>".$row['year']."</td>
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
   
