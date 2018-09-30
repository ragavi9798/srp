<?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '#msdian';  
    $dbname = 'login';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    echo "successful";
    $a = $_POST['usr'];
    $b = $_POST['pwd'];
$sql = "delete from details where name='$a' AND password='$b'";  
 $retval=mysqli_query($conn, $sql);  
if(mysqli_query($conn, $sql))
{  
 echo "Record deleted successfully";  
}
else
{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  

 if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else
{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
      
?>
