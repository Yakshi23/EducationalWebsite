 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    html{
        width: 100%;
        height: 100%;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
         width: 100%;
         height: 100%;
       
    }
    input {
        display: block;
        height: 20px;
    }
    .container{
        
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction:column;
        width: 42%;
        height: 310px;
        padding: 0;
        border-radius: 5px;
        border:3px solid green;
        box-shadow: 5px 10px 30px black;
        
    }
    .btn:hover{
        background-color: #062d21;
        color: white;
    }
    h3{
        font-size: 2rem;
        color: black;
    }
    .btn{
        height: 30px;
        border-radius: 6px;
        font-weight: bold;
        margin-left:40px;
    }
    a button{
        height: 30px;
        border-radius: 6px;
        font-weight: bold;
        width:100px
    }
</style> 

<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $passwords=$_POST['passwords'];
        

        $servername="localhost";
        $username="root";
        $password="";
        $database="db_educationwebsite";

        $conn=mysqli_connect($servername, $username, $password,$database);

        if(!$conn){
           die("Sorry we failed to connect".mysqli_connect_error());
        }
        else{
           $sql="INSERT INTO `registration_form` (`email`, `passwords`) VALUES ('$email', '$passwords')";
            $result=mysqli_query($conn,$sql);
            if($result){
                 echo".";
                 ?>
                 <script src="js/sweetalert.js"></script>
                <script>
                    swal("REGISTERED SUCCESSFULLY");
                </script>
                <?php
                
            }
            else{
                echo"not inserted";
                mysqli_error($conn);
            }
        }
    } 
?>
 

  <body>
    <div class="container">
        <form class="register-form" action="/education/education website/register.php" method="POST">
            <h3>Register Now</h3>
            <input type="email" placeholder="enter your email" class="box" name="email"><br><br>
            <input type="password" placeholder="enter your password" class="box" name="passwords"><br><br>
            <input type="submit" value="register now" class="btn"><br>       
        </form>
        <a href="login.php"><button>login</button></a>
    </div>
    
</body> 

</html> 