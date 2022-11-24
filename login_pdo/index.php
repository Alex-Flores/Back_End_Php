<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Login con singleton y pdo</title>
    <style type="text/css">
        body{
            background: #d1e0e5;
        }
        .content{
             margin: 0 auto;
             width: 500px;
             height: 300px;
             margin-top: 9%;
             background: #000;
             color: #fff;
             border: 6px solid #dc2d29;
        }
        label{
            display: block;
        }
        .caja_login{
            margin: 30px 0px 0px 70px;
        }
        .caja_login input[type=text],input[type=password]{
            width: 280px;
            padding: 8px 6px;
            border-radius: 8px;
        }
        .caja_login input[type=submit]{
            padding: 5px 60px;
            text-align: center;
            border-radius: 4px;
            color: #fff;
            background: #dc2d29; 
            border: 1px solid #fff;
            margin-top: 10px;
        }
    </style>
</head>
 
<body>
<div class="content">
    <div class="caja_login">
    <h2>Login con PDO y php</h2>
    <form class="form" action="login.php" method="post">
        
        <label>Nick</label>
        <input type="text" name="nick" required="true" placeholder="Introduce tu nick" />
        
        <label>Password</label>
        <input type="password" name="password" required="true" placeholder="Introduce tu password" />
        
        <input type="submit" value="Login" />
        
    </form>
    </div>
</div>
</body>
</html>