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
      background-color: white;
      height: 535px;
      width: 325px;
      margin-left: 280px;
      margin-top: 23vh;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 12px 21px 30px rgb(0 0 0 / 51%);
      transition: transform 0.3s ease-in-out;
    }

    .container:hover {
      transform: translateY(-5px);
    }

    form {
      margin-top: 12vh;
    }

    .container h2 {
      text-align: center;
      margin-top: 40px;
      font-size: 30px;
      color: #000000;
    }

    .container input[type="text"],
    .container input[type="password"] {
      width: 93%;
      margin-bottom: 30PX;
      padding: 10px;
      border-radius: 20px;
      margin-bottom: 25px;
      border: 1px solid #000000;
      transition: border-color 0.3s ease-in-out;
    }

    .container input[type="text"]:focus,
    .container input[type="password"]:focus {
      border-color: #4c6faf;
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

      color: #302DAE;
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <img src="img/b82c79e1-53cb-4055-8563-88d752b0425b.png" class="imgh" alt="">
  <div style="background-color:coral;margin:10px;">
    <?php echo $erro ?? '' ?>
  </div>
  <!--Card Login-->
  <div class="container">
   
    <h2><span>Login</span> Biblioteca</h2>

    <form action="" method="post">
      <input type="text" placeholder="Usuario" id="login" name="Usuario" required>
      <input type="password" placeholder="Senha" id="senha" name="Senha" required>
      <input type="submit" name="login" value="Entrar">
    </form>
  </div>

</body>

</html>