<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name=""viewport="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapiscom">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet"href="CSS/style.css">
<title>Форма регистрации</title>

</head>
<body>
<form action="vendor/singin.php" method="post">
<div class="container">
<main>
<div class="circle"></div>
<div class="register-form-container">
<h1 class="form-title">
Вход
</h1>
<div class="form-fields">
<div class="form-field">
<input type="text" placeholder="Логин" name="login" required>
</div>
<div class="form-field">
<input type="password" placeholder="Пароль" name="password" required>
</div>
<p>У вас нет аккаунта? - <a href="register.php">Регистрация</a></p>
<br>

<?php
        if($_SESSION['message']){
            echo '<p class="msg"> ' .$_SESSION['message'] . ' </p>';
        }
        unset ($_SESSION['message']);
        ?>
        <br>
</div>
<div class="form-buttons">
<button><registerbtn type="submit" class="registerbtn">Авторизация</registerbtn></button>

<div class="divider">или</div>

<button><a href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https://mail.google.com/mail/&flowName=GlifWebSignIn&flowEntry=AccountChooser"class="registerbtn registerbtn-google">Google</a></button>

</div>
</div>
</main>
</div>
</form>
</body>
</html>
