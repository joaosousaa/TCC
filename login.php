<?php
#var_dump($_POST);

session_start();

if (isset($_POST['Usuario'], $_POST['Senha'])) {
  if ($_POST['Usuario'] == 'joao' && $_POST['Senha'] == '2023') {
    $_SESSION['Usuario'] = $_POST['Usuario'];
    header('Location: home.php');
  }

}
if (isset($_GET['erro'])) {
  $erro = 'É necessario logar para acessar o sistema!';
}

?>

<!DOCTYPE html>
<html>

<head>

  <title>Tela de Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');

    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
    }

    .imgh {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .container {
      background-color: #ffffff1c;
      height: 400px;
      width: 400px;
      margin-left: 280px;
      margin-top: 23vh;
      padding: 20px;
      box-shadow: 12px 21px 30px rgb(0 0 0 / 51%);
      transition: transform 0.3s ease-in-out;
    }

    .container:hover {
      transform: translateY(-5px);
    }

    form {
      margin: auto;
      width: 300px;
      margin-top: 2vh;
    }

    .container h2 {
      text-align: center;
      margin-top: 40px;
      font-size: 40px;
      color: white;
    }

    .container input[type="text"],
    .container input[type="password"] {
      width: 92%;
      padding: 10px;
      border-radius: 20px;
      margin-bottom: 25px;
      margin-top: 5px;
      border: none;
      background-color: #ffffff38;
      transition: border-color 0.3s ease-in-out;
    }

    .container input[type="text"]:focus,
    .container input[type="password"]:focus {
      border: none;
    }

    .container input[type="submit"] {
      width: 100%;
      margin-top: 20PX;
      padding: 10px;
      background-color: #302DAE;
      color: #ffffff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      transition: background-color 0.3s ease-in-out;
    }

    .container input[type="submit"]:hover {
      background-color: #1b4091;
    }

    input::placeholder {
      color: #000000;
      font-weight: bolder;
    }

    .container h2 span {


      text-decoration: underline;
    }

    .campos {
      color: white;
      margin-left: 10px;
    }
  .texto{
  
  }
  </style>
</head>

<body>

  <img src="img/fundo2.jfif" class="imgh" alt="">
  <div style="background-color:coral;margin:10px;">
    <?php echo $erro ?? '' ?>
  </div>
  <!--Card Login-->
  <div class=" row">

    <div class="col texto" >
<h1>asdfdf</h1>
    </div>

    <div class="container" >
      <form action="" method="post" class="col " >
      <h2>Sign <span> In</span></h2>
        <label for="" class="campos">Usuario</label>
        <input type="text" id="login" name="Usuario" required>
        <label for="" class="campos">Senha</label>
        <input type="password" id="senha" name="Senha" required>
        <input type="submit" name="login" value="Entrar">
      </form>
    </div>
  </div>

</body>

</html>