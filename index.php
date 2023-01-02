<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Desk</title>

    <!--Icone que fica do lado do title-->
    <link rel="icon" href="./images/icon.png">

    <!--Icones usados do Phospor Icons-->
    <script src="https://unpkg.com/phosphor-icons"></script>

    <!--Fontes usadas-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Css externo-->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/page-landing.css">
    <link rel="stylesheet" href="./css/animation.css">
  </head>

  <body>
    <div id="page-landing">
        <div id="container">
            <header>
                <img
                id="logo"
                class="animate-up"
                src="./images/Logo_Help_Desk.svg"
                alt="Logomarca Help Desk"
                >

                <h1 class="animate-up">Bem-vindo! Faça seu login</h1>
            </header>

            <main>
              <form action="valida_login.php" method="POST">
                <div class="login_input animate-up">
                    <label for="email">Seu e-mail</label>
                    <i class="ph-envelope-simple input-icon"></i>
                    <input type="email" name="email" id="email">
                </div>

                <div class="login_input animate-up">
                    <label for="senha">Senha</label>
                    <i class="ph-lock-simple input-icon"></i>
                    <input type="password" name="senha" id="senha">
                </div>

                <?php
                  if( isset($_GET['login']) && $_GET['login'] == 'erro' ){
                ?>
                <div class="text-danger animate-up">
                  Usuário ou senha inválido(s)!
                </div>
                <?php } ?>

                <?php
                  if( isset($_GET['login']) && $_GET['login'] == 'erro2' ){
                ?>
                <div class="text-danger animate-up">
                  Faça login antes de acessar as páginas!
                </div>
                <?php } ?>

                <button class="animate-up" type="submit">Entrar na plataforma</button>
              </form>
            </main>
        </div>
    </div>
  </body>
</html>
