<?php

if (isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $result = $conn->query("SELECT * FROM user WHERE user_name = 'Admin'");
    $result = $result->fetch_assoc();
    if (password_verify($pwd, $result['user_password'])){
        $_SESSION['id'] = $result['user_id'];
    }else{
        "Votre nom d'utilisateur et/ou votre mot de passe est incorrect.";
    }

}

?>

<div id="userarea">
    <p class="login_input">Se connecter | <a href="register.php" class ="login-input">S'inscrire</a></p>
    <form action="#" method="post">
        <p class="login_input"><label for="username"></label><input type="text" id="username" name="username"></p>
        <p class="login_input"><label for="pwd"></label><input type="password" id="pwd" name= 'password'></p>
        <input type="submit" value = 'Se connecter'>
    </form>

</div>





