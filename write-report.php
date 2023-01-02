<?php
  require_once 'validador_acesso.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Desk - Escreva um chamado</title>

    <!--Icone que fica do lado do title-->
    <link rel="icon" href="./images/icon.png" />

    <!--Icones usados do Phospor Icons-->
    <script src="https://unpkg.com/phosphor-icons"></script>

    <!--Fontes usadas-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!--Css externo-->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/write-report.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/title-subtitle.css">
    <link rel="stylesheet" href="./css/main-button.css">
    <link rel="stylesheet" href="./css/secundary-button.css">
    <link rel="stylesheet" href="./css/double-buttons.css">
  </head>

  <body>
    <div id="page-write-report"> <!--Inicio page-write-report-->
    <nav>
        <div class="container animate-fadein"> <!--Inicio container-->
          <ul>

            <li>
              <a href="./select_action.html">
                <img src="./images/Logo_Help_Desk.svg" alt="Logo Help Desk" />
              </a>
            </li>

            <div class="centraliza"> <!--Inicio div que centraliza nome, icone perfil e sair-->
              <li id="menu_nome">
              <p><?=$_SESSION['nome']?></p>
              </li>
  
              <li id="menu_icone">
                <i class="ph-user-circle-light"></i>
              </li>
  
              <li id="menu_sair">
                <h4>
                  <a href="logoff.php">Sair</a>
                </h4>
              </li>
            </div> <!--Fim div que centraliza nome, icone perfil e sair-->

            <div class="hamburguer"> <!--Inicio hamburguer-->
              <i class="ph-list-light"></i>
            </div> <!--Fim hamburguer-->
          </ul>
        </div> <!--Fim container-->
      </nav>

      <main>
        <div class="container"> <!--Inicio container-->
          <div class="chamada animate-up"> <!--Inicio chamada-->
            <h1>Cadastre um chamado!</h1>
            <h3>
              Descreva o seu problema
            </h3>
          </div> <!--Fim chamada-->

          <form action="registra_chamado.php" method="post">
            <div class="input-block animate-up">
              <label for="title">Titulo</label>
              <input type="text" id="title" name="title" required>
            </div>

            <div class="input-block animate-up" id="div-selector">
              <label for="category">Categoria</label>
              <select name="category" id="category">
                <option>Criação Usuário</option>
                <option>Impressora</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Rede</option>
              </select>
            </div>

            <div class="input-block animate-up">
              <label for="description">Descrição</label>
              <textarea name="description" id="description"></textarea>
            </div>

            <div class="double-buttons animate-up">
              <a class="secundary-button" href="select-action.php">Voltar</a>
              <button class="main-button">Concluir</button>
            </div>

          </form>
        </div> <!--Fim container-->
      </main>
    </div> <!--Fim page-write-report-->
    <script src="./script/hamburguer-menu.js"></script>
  </body>
</html>
