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
            border-radius: 5px;
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
 <form action="log.php" method="POST">
    <h2>Login</h2>
    <label for="">User Name</label>
    <input type="text" name="uname" placeholder="user name"><br>

    <label for="">Password</label>
    <input type="password" name="upassword" placeholder="password"><br>
    <button type="submit" name="submit">Login</button>
 </form>
 </div>













</body>
</html>
   