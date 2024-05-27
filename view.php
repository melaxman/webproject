<?php
include "connect.php";
$sql="SELECT * FROM user1";
$result=mysqli_query($conn,$sql);
?>
<!-- <?php include'navbar.php'?> -->
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="icon" type="image/x-icon" href="icon2.jpg">
        <style>
            body{
                 padding: 0;
                 background-image: url(images/vect.jpg);
            }
            table,th,td{
                border: solid;
                border-collapse: collapse;
                padding:3px 45px;
                background-color: beige;
                        }
            #re:hover{
                color: red;
            }
            #ree:hover{
                color: red;
            }
            th:hover{
                background-color: yellowgreen;
            }
            td:hover{
                background-color: greenyellow;
               color: blue;
            }
        </style>
    </head>
    <body>
        <div style="margin:10px 50px;">
        <h2 style="text-align:center"><b style="font-size :25px">Data of Users</b></h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Registered</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name1'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['password1'];?></td>
                            <td><?php echo $row['registered_at'];?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id'];?>" class="my_buttom sucess" id="ree">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>" class="my_buttom danger" id="re">Delete</a>
                            </td>
                        </tr>
            
                    <?php
                    }
                }
                else{
                    echo "no data found";
                }
                   ?>
                   
            </tbody>
        </table>
        </div>
    </body>
</html>