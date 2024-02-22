 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        width: 40%;
        height: 300px;
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
        color:black;
    }
    .btn{
        height: 30px;
        border-radius: 6px;
        font-weight: bold;
    }
</style> 

 <?php
     include "db_connect.php";

     if(isset($_POST['login'])){
        $email=$_POST['email'];
        $passwords=$_POST['passwords'];

        $sql="select * from registration_form where email='$email' AND passwords='$passwords'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        //echo "$num";
        if($num == 1){   
            // header("location:home.php");
            ?>
            <meta http-equiv="refresh" content="1; url=http://localhost/education/education%20website/home.html" />
            <?php
       }
       else{
        echo ".";
        ?>
        <script src="js/sweetalert.js"></script>
        <script>
            swal("Wrong email or password ");
        </script>
        <?php
       }
     }
 ?> 
 

  <body>
    <div class="container">
        <form class="register-form" action="/education/education website/login.php" method="POST">
            <h3>LOGIN HERE</h3>
            <input type="email" placeholder="enter your email" class="box" name="email"><br><br>
            <input type="password" placeholder="enter your password" class="box" name="passwords"><br><br>
            <input type="submit" value="Login" class="btn" name="login">   
        </form>
        
        
    </div>
    
</body> 


</html>  