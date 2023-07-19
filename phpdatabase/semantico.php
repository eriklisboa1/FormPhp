<?php

require_once 'Inserir.php';

//Capturando os dados do form
if(isset($_POST['nome'])){
  $nome = $_POST['nome'];
}

if(isset($_POST['idade'])){
  $idade = $_POST['idade'];
}

if(isset($_POST['email'])){
  $email = $_POST['email'];
}

if(isset($_POST['cpf'])){
  $cpf = $_POST['cpf'];
}

$insere = new Inserir();

if($nome && $idade && $cpf && $email){
  $resultado = $insere->inserirUsuario($nome,$idade,$cpf,$email);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com PHP</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <header>
    <h1>Formulário com PHP</h1>
  </header>
  <main>
    <section class="s1">
      <!-- O formulário será criado aqui -->
      <form id="meuForm" action="semantico.php" method="post">
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" placeholder ="Digite seu nome:">
          <br> 
          
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" placeholder= "Digite seu cpf:">
          <br>

          <label for="idade">Idade</label>
          <input type="number" name="idade" id="idade" placeholder="Digite sua idade:">

          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Digite seu email: ">
          <br><br>
          <button>
            ENVIAR  
          </button>
      </form>
  </section>
  
  <br>
   
      <!--Aqui estarão as variáveis e o código PHP para exibir os resultados -->
      
      
    </section>
  </main>

  <footer>
    <hr>
    <p>&copy; <?php echo date("Y"); ?> Senac. Todos os direitos reservados.</p>
    <p>Erik Lisboa</p>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
