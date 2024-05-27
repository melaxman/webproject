<!-- <?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    echo"eror";
}
echo"sucess";
$sql="CREATE DATABASE IF NOT EXISTS laxman1";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo"error";
}
echo"sucess";
?>  -->
<!-- //creating database first -->
<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,"laxman1");
if(!$conn)
{
    echo"eror";
}
// echo"sucess";
?>