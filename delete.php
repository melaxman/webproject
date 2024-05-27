<?php 
include "connect.php";
if(isset($_GET['id'])){
    $user1_id=$_GET['id'];
    $sql="DELETE FROM user1 WHERE id='$user1_id'";
    $result=mysqli_query($conn,$sql);
    if($result==true){
        echo"Record delete sucessfully";
    }
    else{
        echo"error".$sql."<br>".mysqli_error($conn);
    }
}
?>