<h1 align="center">Help Desk - Registro de ocorrências 👩‍💻</h1>
<h2>🖥️ Sobre o projeto</h2>

Projeto Web desenvolvido para reforçar os conceitos de login e tráfego entre páginas em PHP do curso "Desenvolvimento Web Completo - 20 cursos + 20 projetos
" da Udemy. O objetivo consistem em criar um site que permite o login de usuários já cadastrados (lista contida no "registros.txt"), a autenticação dos mesmos, a criação de um novo chamado reportando alguma ocorrência relacionada à tecnoligia e a visualização desses chamados de acordo com o nível do usuário logado.

<h2>🎨 Layout</h2>
Disponível para copiar no link: https://www.figma.com/file/KSbqs1B7QDxFmRcYjYEMiT/Help_Desk_Updated/duplicate
<div displya="flex">
<img alt="Happy - Pagina Inicial" src="https://user-images.githubusercontent.com/80129871/207656428-1f2bb1b3-2d18-4553-91a2-9f57ed741875.png" width="500px">
<img alt="Happy - Mapa" src="https://user-images.githubusercontent.com/80129871/207657558-ecaf05d4-bbcb-409d-9459-6dde602579b3.png" width="500px">
<img alt="Happy - Orfanato Detalhe" src="https://user-images.githubusercontent.com/80129871/207658128-01c88f6a-8649-4264-80aa-261482848888.png" width="500px">
<img alt="Happy - Orfanato Detalhe" src="https://user-images.githubusercontent.com/80129871/207658281-ab0bf488-b776-4be6-a50e-8dafb8b8873c.png" width="500px">
<img alt="Happy - Orfanato Detalhe" src="https://user-images.githubusercontent.com/80129871/207658361-0fa27e0a-e1a3-4b78-aeb5-2b3f922feb4c.png" width="500px">
<img alt="Happy - Cadastrar Orfanato" src="https://user-images.githubusercontent.com/80129871/207658473-de9c50f6-f4c5-420b-92eb-e8c85624ab7f.png" width="500px">
<img alt="Happy - Cadastrar Orfanato" src="https://user-images.githubusercontent.com/80129871/207658560-8636272c-f212-453e-aacf-f5d64c6a7067.png" width="500px">
<img alt="Happy - Cadastrar Orfanato" src="https://user-images.githubusercontent.com/80129871/207658658-6b71ffb5-3bd6-459d-964d-de5b55beadad.png" width="500px">
</div>

<h2>🧩 Banco de Dados</h2>
Como não foi usado banco de dados, realizou-se uma simulação de usuários cadastrados no arquivo "registros.txt".
Há dois arrays que podem representar tabelas, uma representando as informações do usuário e outra os perfils disponíveis (adm ou comum).
Para a tabela de usuário as chaves são: id, nome, email, senha, perfil_id.
Para a tabela de perfis as chaves são: 1 e 2, representando, respectivamente, o perfil com acesso Administrativo e o Usuário Comum.

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
      (abertura tag php)
        require "../../PHP_Projeto/valida_login.php";
      (fechamento tag php)
      </li>
    </ul>
   <li>Modificar o arquivo "registra_chamado.php" na linha 11, escrevendo: $arquivo = fopen('../../PHP_Projeto/registros.txt', 'a');</li>
   <li>Modificar o arquivo "view_reports.php" na linha 11, escrevendo: $arquivo = $arquivo = fopen('../../PHP_Projeto/registros.txt','r'); //abre o arquivo txt em modo leitura</li>
</ol>
