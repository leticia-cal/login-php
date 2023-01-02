<?php
  require_once 'validador_acesso.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Desk - Selecione uma ação</title>

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
    <link rel="stylesheet" href="./css/select-action.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/title-subtitle.css">
  </head>

  <body>
    <div id="page-select-action"> <!--Inicio page-select-action-->
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
            <h1>Selecione uma ação!</h1>
            <h3>
              Você pode escrever um novo chamado ou verificar os chamados já
              cadastrados
            </h3>
          </div> <!--Fim chamada-->

          <div class="cards-container"> <!--Inicio cards-container-->
            <div class="card animate-up"> <!--Inicio card-->
              <a href="write-report.php">
                <h3>Escrever novo chamado</h3>
                <hr />
                <p>
                  Nos conte qual o problema que você está enfrentando. Seja
                  hardware, software, rede ou impressora, a Help Desk pode te
                  ajudar a encontrar a solução.
                </p>
              </a>
            </div> <!--Fim card-->

            <div class="card animate-up"> <!--Inicio card-->
              <a href="view-reports.php">
                <h3>Consultar chamados</h3>
                <hr />
                <p>
                  Verifique os chamados anterioremente cadastrados na plataforma
                </p>
              </a>
            </div> <!--Fim card-->
          </div> <!--Fim cards-container-->
        </div> <!--Fim container-->
      </main>
    </div> <!--Fim page-select-action-->
    <script src="./script/hamburguer-menu.js"></script>
  </body>
</html>
