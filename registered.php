<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password1'];
    if(!empty($name)&&!empty($email)&&!empty($gender)&&!empty($password)){
        $sql="SELECT * FROM user1 WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=0){
            echo"<p style='color:red'><b>* Email is already exist.. try another one</b></p>";
        }
        else{
            $sql="INSERT INTO user1(name1,email,gender,password1)values('$name','$email','$gender','$password');";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo"<p style='color:green'>Data inserted sucessfully</p>";
                setcookie('email',$email,time()+86400,"/");
                setcookie('password1',$password,time()+86400,"/");
                header("location:login.php");
            }
            else{
                echo"<p style='color:red'><b>Error in inserting data</b></p>";
            }
        }
    }
    else{
        echo"<p style='color:red'><b>* Empty Field is not allowed</b></p>";
    }

}
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Registration_form</title>
        <link rel="icon" type="image/x-icon" href="images/icon2.jpg">
        <style>
          table,th{
            border: solid;
            border-color: ghostwhite;
            background-color: ghostwhite;
            padding: 9px;
          }
          body{
            padding: 100px 0 0 430px;
            background-image: url(images/vect.jpg);
          
          }
          #re{
           border-radius: 5px;
            background-color: green;
          }
          #re:hover{
            background-color: red;
            border-color: red;
          }
        </style>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table>
            <tr>
                <th><label>Name:</label></th>
                <th><input type="text" name="name1"><br></th>
            </tr>
            <tr>
               <th><label>Email:</label></th>
               <th><input type="text" name="email"><br></th>
            </tr>
           <tr>
              <th><label>Password:</label></th>
              <th><input type="password" name="password1" ></th>
           </tr>
           <tr>
               <th><label>Gender:</label></th><br>
               <th><input type="radio" name="gender" value="male" checked>Male
                <input type="radio" name="gender" value="female" checked>Female
                <input type="radio" name="gender" value="other" checked>Others</th><br><br>
           </tr> 
           <th colspan="2"><input type="submit" id="re" value="submit"name="submit"></th>
        </table>
         </form>
    </body>
</html>