<h1 align="center">Help Desk - Registro de ocorrências 👩‍💻</h1>
<h2>🖥️ Sobre o projeto</h2>

Projeto Web desenvolvido para reforçar os conceitos de login e tráfego entre páginas em PHP do curso "Desenvolvimento Web Completo - 20 cursos + 20 projetos
" da Udemy.<br>
O objetivo consistem em criar um site que permite o login de usuários já cadastrados (lista contida no "registros.txt"), a autenticação dos mesmos, a criação de um novo chamado reportando alguma ocorrência relacionada à tecnoligia e a visualização desses chamados de acordo com o nível do usuário logado.<br><br>
<strong>Obs:</strong> projeto responsivo.

<h2>🎨 Layout</h2>
Disponível para copiar no link: https://www.figma.com/file/KSbqs1B7QDxFmRcYjYEMiT/Help_Desk_Updated/duplicate
<div displya="flex">
<img alt="Help Desk - Pagina Inicial" src="https://user-images.githubusercontent.com/80129871/210274075-b23eb304-26a1-4783-b730-c608f6df820f.png" width="500px">
<img alt="Help Desk - Home" src="https://user-images.githubusercontent.com/80129871/210274105-4ec3c48f-a195-4c06-8121-fb4058887065.png" width="500px">
<img alt="Help Desk - Escrever Chamado" src="https://user-images.githubusercontent.com/80129871/210274163-3ac6ef7c-8ad8-4c7b-8a37-bed4713ac688.png" width="500px">
<img alt="Help Desk - Ver Chamados" src="https://user-images.githubusercontent.com/80129871/210274192-7593e624-68a4-473f-8bbc-6538d1689b57.png" width="500px">
</div>

<h2>🧩 Banco de Dados</h2>
Como não foi usado banco de dados, realizou-se uma simulação de usuários cadastrados no arquivo "registros.txt".<br>
Há dois arrays que podem representar tabelas, uma representando as informações do usuário e outra os perfils disponíveis (adm ou comum).<br><br>
Para a tabela de usuário as chaves são: id, nome, email, senha, perfil_id.<br>
Para a tabela de perfis as chaves são: 1 e 2, representando, respectivamente, o perfil com acesso Administrativo e o Usuário Comum.<br>

<h2>🎮 Tecnologias Utilizadas</h2>
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
  <li>PHP</li>
</ul>

<h2>🛠️ Ambiente</h2>
<ul>
<li>Visual Studio Code - IDE (Ambiente de Desenvolvimento Integrado)</li>
<li>XAMP - Apache (Servidor de Código Aberto)</li>
</ul>

<h2>🌟 Como executar o projeto</h2>
<ol>
  <li>Fazer o download desse repositório do github</li>
  <li>Instalar o XAMPP (Apache)</li>
  <li>Abrir o diretório onde o XAMPP foi instalado e criar a pasta "PHP_Projeto" sem as aspas</li>
  <ul><li>Dentro de "PHP_Projeto" mover os seguintes arquivos: "registros.txt" e "valida_login.php"</li></ul>
  <li>Volte para o diretório inicial do XAMPP"</li>
  <ul>
    <li>Acesse o diretório "htdocs"</li>
    <ul>
      <li>Cole o repositório dentro de "htdocs"</li>
    </ul>
  </ul>
  <li>Abrir o repositório baixado com o VSCode (ou sua IDE de preferência)</li>
  <li>Criar o arquivo "valida_login.php"</li>
  <ul>
    <li>
      Colar o seguinte código dentro do arquivo:
      <pre>
      &lt;?php
        require "../../PHP_Projeto/valida_login.php";
      ?&gt;</pre>
      </li>
    </ul>
   <br><li>Modificar o arquivo "registra_chamado.php" na linha 11, escrevendo:<pre>$arquivo = fopen('../../PHP_Projeto/registros.txt', 'a');</pre><br></li>
   <li>Modificar o arquivo "view_reports.php" na linha 11, escrevendo:<pre>$arquivo = $arquivo = fopen('../../PHP_Projeto/registros.txt','r'); //abre o arquivo txt em modo leitura</pre><br></li>
   <li>Executar o XAMPP</li>
   <li>Na linha do "Apache", em "Actions", clique em "Start".
   <li>Abrir o navegador</li>
   <li>Digitar o endereço do repositório no localhost (http://localhost/PHP_projeto/index.php)</li>
</ol>
