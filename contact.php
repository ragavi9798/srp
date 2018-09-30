<?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '#msdian';  
    $dbname = 'login';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    $a = $_POST['fname'];
    $b = $_POST['lname'];
 $c = $_POST['country'];
 $d = $_POST['sub'];
$sql="INSERT INTO contact(fname,lname,country,subject) VALUES('$a','$b','$c','$d')";
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
