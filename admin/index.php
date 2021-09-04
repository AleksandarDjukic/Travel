<?php
if (isset($_SESSION['login'])){
    header('Location: ponuda.php');
}
    require 'konekcija.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prijava</title>
    <link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'greska') {
        echo '<script>alert("Nepostojeće korisničko ime ili šifra !");</script>';
    }
    elseif ($_GET['msg'] == 'odjava') {
        echo '<script>alert("Uspješno ste se odjavili !");</script>';
    }
}
?>
<body style="background-color: #4DE4ED;">
    <form action="login/login.php" method="post" class="prijava-forma">
        <p>Username</p>
        <input type="text" name="uname" class="i-p" autocomplete="off">
        <p>Password</p>
        <input type="password" name="pass" class="i-p">
        <input type="submit" name="submit" class="dugme-prijava i-p" value="Prijavi se">
    </form>
    <a href="../index.php"><button class="nazad">Travel.com</button></a>
</body>
</html>