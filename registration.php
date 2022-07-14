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
    <header>
        <img id="amazon_logo" src="assets/amazon-com-br-logo.png" alt="amazon logo">
    </header>
    <div class="register_div">
        <form action="registration.php" id="theForm" method="post">
            <h1>Criar conta</h1>
            <h4>Seu nome</h4>
            <input type="text" id="name" placeholder="Nome e sobrenome" name="username" required>
            <h4>Seu e-mail</h4>
            <input id="email" type="email" name="email" required>
            <h4>Senha</h4>
            <input id="password" type="password" placeholder="Pelo menos 6 caracteres" name="password" required>
            <h5>As senhas devem ter pelo menos 6 caracteres.</h5>
            <h4>Insira a senha mais uma vez</h4>
            <input type="password" id="confirm_password" required>
            <br>
            <button id="register" type="submit" name="create">Continuar</button>
        </form>
        <p class="terms">Ao criar uma conta, você concorda com as <a href="" class="a_link">Condições de Uso</a> da Amazon. Por favor verifique a <a href="" class="a_link">Notificação de Privacidade</a>, <a href="" class="a_link">Notificação de Cookies</a> e a <a href="" class="a_link">Notificação de Anúncios Baseados em Interesse</a>.</p>
        <p class="if_login">Você já tem uma conta? <a href="" class="a_link">Fazer login</a></p>
    </div>
    <div class="links_cc">
        <div class="links_div">
            <div class="links_subdiv">
                <h6><a href="#" class="a_link">Condições de Uso</a></h6>
                <h6><a href="#" class="a_link">Política de Privacidade</a></h6>
                <h6><a href="#" class="a_link">Ajuda</a></h6>
                <h6><a href="#"class="a_link">Cookies</a></h6>
                <h6><a href="#" class="a_link">Anúncios Baseados em Interesses</a></h6>
            </div>
        </div>
        <div class="cc">
            <h6>© 2021-2022 Amazon.com, Inc. ou suas afiliadas</h6>
        </div>
    </div>

    <!--SCRIPT SECTION -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                var re = /^.{6,}$/

                if (re.test(password)) {
                    if (password === confirm_password) {
                        if (valid){
                            var username = $('#name').val();
                            var email = $('#email').val();
                            
                            e.preventDefault();    

                            $.ajax({
                                type: 'POST',
                                url: 'process.php',
                                data:{username: username, email: email, password: password},
                                success: function(data){
                                    Swal.fire({
                                        'title': 'Successful',
                                        'text': data,
                                        'icon': 'success',
                                        confirmButtonText: 'Awesome!'
                                    });
                                },
                                error: function(data) {
                                    Swal.fire({
                                        'title': 'Error',
                                        'text': 'There were errors while saving the data.',
                                        'icon': 'error',
                                        confirmButtonText: 'Try Again'
                                    });
                                }
                            });
                        } else {
                            alert('false');
                        }
                    } else {
                        e.preventDefault();
                        Swal.fire({
                            'title': 'Erro',
                            'text': 'Você inseriu duas senhas diferentes.',
                            'icon': 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                } else {
                    e.preventDefault();
                    Swal.fire({
                        'title': 'Erro',
                        'text': 'Sua senha deve ter no mínimo 6 caracteres.',
                        'icon': 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            })
        });
    </script>
</body>
</html>