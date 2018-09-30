    <?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '#msdian';  
    $dbname = 'login';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    $nm = $_POST["usr"];
    $ps = $_POST['pwd'];

   
     
    $sql = 'SELECT * FROM details where name ="'.$nm.'" and password="'.$ps.'"';  
    $retval=mysqli_query($conn, $sql);  
      
    if(mysqli_num_rows($retval) > 0){  
    echo"<h1>successfully logged in</h1>";?>
<html><body>
   <script type="text/javascript">location.href = 'https://www.google.com';</script>
</body></html>
   <?php }else{  
    echo "0 results";  
    }  
    mysqli_close($conn);  
    ?>  
