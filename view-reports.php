<?php
  require_once("validador_acesso.php");

   //array para guardar todos os chamados
   $chamados = array();

   //array para guardar os dados do explode em indiceas diferentes (detalhado)
   $chamados_aux = array();

   //abrindo o arquivo
   $arquivo = fopen('../../PHP_Projeto/registros.txt','r'); //abre o arquivo txt em modo leitura
   //fopen(nome do arquivo , modo de abertura)

   //percorrer o arquivo enquanto houverem registros (linhas) a serem recuperados
   while(!feof($arquivo)){ //feof() testa pelo fim de um arquivo (end of file)
      $registro = fgets($arquivo); //recupera o que está escrito na linha ate achar a quebra de linha (registro = conteudo linha)

      // recuperar e adicionar no array $chamados apenas os chamados que atendam aos critérios da aplicação
      if($_SESSION['perfil_id'] == 2){ //significa que é user normal, NÃO administrativo
        $chamados_aux = explode('#' , $registro);
        
        if($_SESSION['id'] != $chamados_aux[0]){ //se o id dos dois for diferente, significa que é de outro usuário aquele chamado
          continue;
        }
      }
      $chamados[] = $registro; //array com cada indice numerico contendo uma linha
    }

   //fechar o arquivo
   fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Desk - Veja os chamados</title>

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
    <link rel="stylesheet" href="./css/view-reports.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/title-subtitle.css" />
    <link rel="stylesheet" href="./css/main-button.css" />
    <link rel="stylesheet" href="./css/secundary-button.css" />
    <link rel="stylesheet" href="./css/double-buttons.css" />
  </head>

  <body>
    <div id="page-view-reports">
      <!--Inicio page-view-report-->
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
        <div class="container">
          <!--Inicio container-->
          <div class="chamada animate-up">
            <!--Inicio chamada-->
            <h1>Consulte os chamados!</h1>
            <h3>Veja os chamados já cadastrados</h3>
          </div>
          <!--Fim chamada-->

          <div class="report-group animate-up"> <!-- Inicio report-group-->

          <?php
            foreach($chamados as $chamado) { // abrindo o foreach para percorrer o array chamados
            $chamado_dados = explode('#', $chamado);

            if(count($chamado_dados) < 5){ //se está faltando o id ou titulo ou a categoria ou a descricao
              continue; //ele pula aquele chamado
            }
          ?> <!-- abertura foreach -->

              <div class="report"> <!-- Inicio report-->
                  <h2><?=$chamado_dados[2]?></h2>
                  <h3><?=$chamado_dados[3]?></h3>
                  <p><?=$chamado_dados[4]?></p>
              </div> <!-- Fim report-->

          <?php } ?>

          </div> <!-- Fim report-group-->

          <div class="double-buttons animate-up">
            <a class="secundary-button" href="select-action.php">Voltar</a>
          </div>
        </div>
        <!--Fim container-->
      </main>
    </div>
    <!--Fim page-view-report-->
    <script src="./script/hamburguer-menu.js"></script>
  </body>
</html>
