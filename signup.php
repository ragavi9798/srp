<?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '#msdian';  
    $dbname = 'login';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    $a = $_POST['name'];
    $b = $_POST['age'];
 $c = $_POST['dob'];
 $d = $_POST['mailid'];
 $e = $_POST['psw'];
 $f = $_POST['psw_repeat'];
 $g = $_POST['contact'];
 $h = $_POST['address'];
$i=$_POST['gender'];
$sql="INSERT INTO details(name,age,date,email,password,rept,num,address,gender) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
    $retval=mysqli_query($conn, $sql);  

 if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}
else
{  
echo "Could not insert record: ". mysqli_error($conn);  
?><form  action="signup.html">
    <button type="submit">Re-Enter</button>
</form>

<?php
}  
  
mysqli_close($conn);  
      
?>
