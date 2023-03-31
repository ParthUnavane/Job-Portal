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

    if(isset($_POST['job'])){
      $cname=$_POST['cname'];
      $position=$_POST['position'];
      $Jdesc=$_POST['Jdesc'];
      $skills=$_POST['skills'];
      $CTC=$_POST['CTC'];
      $sql="INSERT INTO jobs VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";
      if(mysqli_query($conn,$sql)){
          echo"New Job Posted";
      }
      else{
          echo"ERROR:Failed to Post the Job $sql." .mysqli_error($conn);
      }
  }
  
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users VALUES ('$name','$email','$password','$number')";
    if($conn->query($sql)){
      echo"Inserted";
    }
}

    if(isset($_POST['Login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$query);
    
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            header("location:Dashboard.php");
        }
        else{
            $error='email id or password is incorrect';
            print $error;
        }
    }
    if(isset($_POST['apply'])){
        $name=$_POST['name'];
        $applying=$_POST['applying']; 
        $qual=$_POST['qual'];
        $year=$_POST['year'];
        
        $sql="INSERT INTO candidates VALUES ('$name','$applying','$qual','$year')";
        if(mysqli_query($conn,$sql)){
            echo"Applied Succesfully";
        }
        else{
            echo"ERROR:Failed to Apply for the Job $sql." .mysqli_error($conn);
        }
      }
      mysqli_close($conn);
?>