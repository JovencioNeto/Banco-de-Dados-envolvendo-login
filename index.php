<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style/style.css">
    <script src="./src/js/script.js" defer></script>
    <title>Login</title>
</head>
<body>
    <div class="background">
        <div class ="box_form" >
            <form method="post" id="form" class="login_form">

                <img src="./src/img/DRM.png" alt="DRM Logo" class="icon_logo">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="email" placeholder="Digite seu Email">
                

                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="password" placeholder="***************"> 

                <div class ='button_area'>
                    <button type="submit" class="button_entrar" id="button_entrar" value ="entrar" name="entrar">Entrar</button>
                </div>
                <p>Já possui uma conta? <a href="#">Entrar</a></p>
            </form>
        </div>
    </div>

    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'biblioteca';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn) {
            die('Falha ao conectar ao banco de dados'.mysqli_error($conn));
        }

        if(isset($_POST['entrar'])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql ="SELECT email, senha FROM usuarios WHERE email = '$email';";
            $result = mysqli_query($conn, $sql);
            $login = mysqli_fetch_array($result);

            if(is_null($login)){
                echo"<script type = 'text/javascript'> alert('Conta inexistente'); </script>";
            }else{
                $login_m = $login['email'];
                $login_p = $login['senha'];

                if(($login_m == $email) && ($login_p == $password)) {
                    echo "<script type = 'text/javascript'> alert('Login realizado.');</script>";
                } else{
                    echo "<script type = 'text/javascript'> alert('Email ou senha invalido.');</script>";
                }  
            }
        }
    ?>
</body>
</html>