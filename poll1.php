<?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '#msdian';  
    $dbname = 'login';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    } 
 
    
    $a = $_POST['poll'];

$a.click(function() {
    if ($(this).val() === '1') {
      $count1++;
$sql='UPDATE rating SET 1count="'.$count1.'"';

    } else if ($(this).val() === '2') {
      $count2++;
$sql='UPDATE rating SET 2count="'.$count2.'"';
    } 
    else if ($(this).val() === '3') {
      $count3++;
$sql='UPDATE rating SET 3count="'.$count3.'"';}
    else if ($(this).val() === '4') {
      $count4++;
$sql='UPDATE rating SET 4count="'.$count4.'"';
  }
    else if($(this).val() === '5'){
	$count5++;
$sql='UPDATE rating SET 5count="'.$count5.'"';
});

    $retval=mysqli_query($conn, $sql);  

 if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}
else
{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
      
?>
