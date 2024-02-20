<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css" type="text/css"/>
</head>
<body>   
    <main>

        <div id="content">
            <?php
            session_start();
                $loginErr = "";
                $login =  "";
            
                if (empty($_POST["login"])) {
                    $loginErr = "*login is required";
                } else {
                    $login = test_input($_POST["login"]);
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                ?>

            <form method="post" action="<?php echo htmlspecialchars("login");?>">
                Login: <input type="text" name="login">
                <span class="error"><?php echo $loginErr;?></span>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </main>
</body>
</html>