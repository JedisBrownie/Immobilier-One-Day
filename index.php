<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
            <div class="form">
                <h2>Sing In</h2>
                <div class="inputBox">
                    <form action="treat.php" method="post">
                            <input type="text" required="required" name="name">
                            <span>Username</span>
                            <i></i>
                        </div>
                    
                        <div class="inputBox">
                            <input type="password" required="required" name="password">
                            <span>Password</span>
                            <i></i>
                        </div>
                        <div class="links">
                            <a href="">Forgot password</a>
                            <a href="singUp.php">SingUp</a>
                        </div>
                        <a href="home.php">
                            <center>
                                <input type="submit" value="Valider">
                            </center>
                        </a>
                    </form>
            </div>
    </div>
</body>
</html>