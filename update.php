<?php
include "connect.php";
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $password=$_POST['password1'];
    $gender=$_POST['gender'];
    $sql="UPDATE user1 SET name1='$name',email='$email',password1='$password',gender='$gender' WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo"Recorded update sucessfully";
        header('location:view.php');
    }
    else{
        echo"error:".$sql."<br>".mysqli_error($conn);
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM user1 WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['name1'];
            $email=$row['email'];
            $password=$row['password1'];
            $gender=$row['gender'];
          
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration_form</title>
        <link rel="icon" type="image/x-icon" href="icon2.jpg">
        <style>
         fieldset,table,tr,th{
            width: 100px;
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
        <div>
        <h2 style="color:white">Update your form</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
        <table>
        <tr>
                <th><label>Name:</label></th>
                <th><input type="text" name="name1" value="<?php echo $name;?>"><br></th>
            </tr>
            <tr>
               <th><label>Email:</label></th>
               <th><input type="text" name="email" value="<?php echo $email;?>"><br></th>
            </tr>
           <tr>
              <th><label>Password:</label></th>
              <th><input type="password" name="password1" value="<?php echo $password;?>"></th>
           </tr>
           <tr>
               <th><label>Gender:</label></th><br>
               <th><input type="radio" name="gender" value="male" <?php if($gender=='male'){echo"checked";} ?>>Male
                <input type="radio" name="gender" value="female"  <?php if($gender=='female'){echo"checked";} ?>>Female
                <input type="radio" name="gender" value="other"  <?php if($gender=='others'){echo"checked";} ?>>Others</th><br><br>
           </tr>
            <tr>
                <th><label>ID:</label></th>
                <th><input type="text" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>" readonly><br></th>
            </tr>
           <th colspan="2"><input type="submit" id="re" value="update" name="update"></th>     
        </table>
        </fieldset>
    
         </form>
        </div>
    </body>
</html>\

