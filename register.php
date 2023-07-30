<?php 
  include("bd.php");
  if(isset($_POST['submit'])){
  $name=htmlspecialchars(trim(strtolower($_POST['uname'])));
  $email=htmlspecialchars(trim(strtolower($_POST['email'])));
  $password= md5($_POST['upassword']);
  $pswd= md5($_POST['password']);


  $query="SELECT * FROM register WHERE name='$name' && email='$email' && password='$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
    $error[] = 'user already exist!';

}else{

    if($password != $pswd){
        $error[] = 'password not matched !';
    }else{
        $insert = "INSERT INTO `register`(name, email, password) VALUES('$name','$email','$password')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    };
};

  }
  
  
  
   
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .bg{
            background: #1690A7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            width:500px ;
            border: 2px solid #ccc ;
            padding: 30px;
            background: #fff;
            border-radius:40px;
        }
        h2{
            text-align: center;
            margin-bottom: 40px;
        }
        input{
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }
        label{
            color:#888;
            font-size: 18px;
            padding: 10px;
        }
        button{
            float: right;
            background: #555 ;
            padding: 10px 15px;
            color: #fff;
            border-radius: 15px;
            margin-right: 10px;
            border: none;
        }
        button:hover{
            opacity:.7;
        }
    </style>
</head>
<body>
<?php include("nav.php"); ?>
  <div class="bg">
 <form action="" method="POST">
    <h2>Login</h2>

    <?php
                
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                
                ?>

    <label for="">User Name</label>
    <input type="text" name="uname" placeholder="user name"><br>
    <label for="">Email</label>
    <input type="email" name="email" placeholder="your email"><br>
    <label for="">Password</label>
    <input type="password" name="upassword" placeholder=" your password"><br>
    <input type="password" name="password" placeholder=" confirm password"><br>

    <button type="submit" name="submit">Register</button>
    <p>already have an acount? <a class ="btn btn-primary" href="login.php">login</a></p>

 </form>
 </div>













</body>
</html>












