<!DOCTYPE html>
<html lang="pt">

<?php
include('conexao.php');

if (isset($_POST['email'])  || isset($_POST['senha'])){

  if(strlen($_POST['email']) == 0){
    echo  "<script>alert('Preencha seu Email!');</script>";

  }else if (strlen($_POST['senha']) == 0){
    echo  "<script>alert('Preencha sua senha!');</script>";
  }else{
     $email = $mysqli->real_escape_string($_POST['email']);
     $senha = $mysqli->real_escape_string($_POST['senha']);

     $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = md5('$senha')";
     $sql_query = $mysqli->query($sql_code) or die ("falha na execução do codigo ". $mysqli->error);

     $quantidade = $sql_query->num_rows;

     if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['adm'] = $usuario['adm'];



        header("Location: http://localhost/spica/index.php");


     }else{
      echo "falha ao logar! E-mail ou senha incorretas";
     }


  }

}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registros da Alma</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/1683061149625.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/1683061149625.png" alt="logo">
              </div>
              <h4>Olá! Bem vindo.</h4>
              <h6 class="font-weight-light">Faça login para continuar.</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="senha" placeholder="Senha">
                </div>
                <div class="mt-3">
                  <button type = "submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >ENTRAR</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">

                  </div>
                  <!-- <a href="#" class="auth-link text-black">Esqueceu a Senha?</a>-->
                </div>


              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
