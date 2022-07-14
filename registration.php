<?php 
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
        if(isset($_POST['create'])){
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (name, email, password) VALUES(?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute
            ([$name, $email, $password]);
            if($result){
                echo 'Successfully saved.';
            } else {
                echo 'There were errors while saving the data.';
            }
        }
        ?>
    </div>
    <header>
        <img id="amazon_logo" src="assets/amazon-com-br-logo.png" alt="amazon logo">
    </header>
    <div class="register_div">
        <form action="registration.php" method="post">
            <h1>Criar conta</h1>
            <h4>Seu nome</h4>
            <input type="text" placeholder="Nome e sobrenome" name="username" required>
            <h4>Seu e-mail</h4>
            <input type="email" name="email" required>
            <h4>Senha</h4>
            <input type="password" placeholder="Pelo menos 6 caracteres" name="password" required>
            <h5>As senhas devem ter pelo menos 6 caracteres.</h5>
            <h4>Insira a senha nova mais uma vez</h4>
            <input type="password" required>
            <br>
            <button type="submit" name="create">Continuar</button>
        </form>
        <p class="terms">Ao criar uma conta, você concorda com as <a href="">Condições de Uso</a> da Amazon. Por favor verifique a <a href="">Notificação de Privacidade</a>, <a href="">Notificação de Cookies</a> e a <a href="">Notificação de Anúncios Baseados em Interesse</a>.</p>
        <p class="if_login">Você já tem uma conta? <a href="">Fazer login</a></p>
    </div>
</body>
</html>