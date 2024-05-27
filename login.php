<?php
include "connect.php";
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password1'];
    if(!empty($email)&&!empty($password)){
        $sql="SELECT * FROM user1 WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['email']=$email;
            $_SESSION['loggedin']=true;
            header("location: home_page.php");        
        }
        else{
            echo"<p style='color:red'><b>invalid Credentials</b></p>";
        }
    }
    else{
        echo"<p style='color:red'><b>Enter credentials first</b></p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/x-icon" href="images/icon2.jpg">
  <title>Login </title>
  <style>
          table,th{
            border: solid;
            border-color: ghostwhite;
            background-color: ghostwhite;
            padding: 9px;
          }
          body{
            padding: 70px 0 0 480px;
            background-image: url(images/vect.jpg);
            background-size: cover;
          }
          .ree{
            padding: 3px;
           border-radius: 5px;
            background-color: green;
          }
          .ree:hover{
            padding: 3px;
            background-color: red;
            border-color: red;
          }
  </style>
    </head>
  <body>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">       
    <table> 
      <div>   
        <tr>
            <th colspan="2"><h1 >Congratulation!</h1>
        
        </tr>
        <tr>
            <th colspan="2"><p>Please Enter your information</p></th>
        </tr>
        <tr>
             <th><label>Email :</label></th>
             <th><input type="text" name="email" value="<?php if(isset($_COOKIE['email'])){
                 echo $_COOKIE['email'];
                 };?>"></th>
        </tr>
        <tr>
             <th><label>Password :</label></th>
             <th><input type="password" name="password1" value="<?php if(isset($_COOKIE['password1'])){
                  echo $_COOKIE['password1'];
                };?>" required></th><br><br>
        </tr>
        <tr>
             <th colspan="2" ><input type="submit" class="ree"   value="Login" name="submit"></th>
              <br><br>
        </tr> 
            <th colspan="2"><p ><a href="registered.php" class="ree">Registered</a></p></th>
      </div>
    </table>
    </form>  
  </body>
</html>


