<?php
require_once "traitement.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Document</title>
</head>

<body>
    <section>

        <hgroup>
            <h2>Welcome back!</h2>
            <p>Please enter your details to sign into your account</p>
        </hgroup>

        <form method="post" class="log-form">

            <p>
                <?php if (isset($erreur)) { ?>
            <div>
                <?= $erreur ?>
            </div>
        <?php } ?>

        </p>

        <div class="group log-input">
            <input type="text" id="email" name="email" placeholder="email">
        </div>

        <div class="group log-input">
            <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <span class="check left-align">
            <input type="checkbox">
            <label>Remember Me</label>
        </span>

        <a class="right-align" href="#">Forgot Password</a>

        <br><br>

        <div class="container-log-btn">
            <button type="submit" name="submit" class="log-form-btn">
                <span>Login</span>
            </button>
        </div>

        </form>



    </section>
</body>

</html>