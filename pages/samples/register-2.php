<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('conexao.php');
include('protect.php');



if (isset($_POST['nome']) || isset($_POST['email']) ){
  if(strlen($_POST['email']) == 0){
    echo  "<script>alert('Preencha seu Email!');</script>";

  }else if (strlen($_POST['senha']) == 0){
    echo  "<script>alert('Preencha sua senha!');</script>";
  }else{
    // Verifica se o e-mail já está em uso
    $email = $mysqli->real_escape_string($_POST['email']);
    $verifica_email = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado = $mysqli->query($verifica_email);

    // Se já existir um registro com o mesmo e-mail, exibe uma mensagem de erro
if ($resultado->num_rows > 0) {
    echo "<script>alert('O e-mail informado já está em uso. Por favor, tente novamente com um e-mail diferente.');</script>";
} else {
    // Caso contrário, realiza o cadastro
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $adm = $mysqli->real_escape_string($_POST['adm']);
    $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUE ('$nome', '$email', md5('$senha'), '$adm')";
    $sql_query = $mysqli->query($sql) or die("Falha no Cadastro". $mysqli->$error);

    header('Location: http://localhost/spica/pages/samples/usuarios.php');
    exit(); // Termina a execução do script após o redirecionamento
}
  mysqli_close($mysqli);

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
  <link rel="shortcut icon" href="../../images/logo-mini.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../../images/1683061149625.png" alt="logo">
              </div>
              <?php if ($_SESSION['adm']==1){ ?>
              <h1>Ação não Permitida</h1>
              <div class="mt-3">
                <a class="btn btn-block btn btn-danger btn-lg font-weight-medium auth-form-btn" href="../../index.php">
                  Voltar</a>
              </div>
              <?php } else if($_SESSION['adm']==2){ ?>
              <h4>Novo Admnistrador</h4>
              <h6 class="font-weight-light">Preencha os Dados</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <label>Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input name="nome" type="text" class="form-control form-control-lg border-left-0"
                      placeholder="Nome">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input name="email" type="email" class="form-control form-control-lg border-left-0"
                      placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label>Senha</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input name="senha" type="password" class="form-control form-control-lg border-left-0"
                      id="exampleInputPassword" placeholder="Senha">
                  </div>
                </div>
                <div class="form-group">
                  <label>Nivel</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-security text-primary"></i>
                      </span>
                    </div>
                    <select id="adm" name="adm" class="btn btn-outline-secondary dropdown-toggle">
                      <option value="1">Nível de Acesso 1</option>
                      <option value="2">Nível de Acesso 2</option>

                    </select>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">

                  </div>
                </div>
                <div class="mt-3">
                  <a> <button type="submit"
                      class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Salvar </button> </a>
                </div>
                <?php } ?>
                <?php if($_SESSION['adm'] == 2){ ?>
                <div class="mt-3">
                  <a class="btn btn-block btn btn-danger btn-lg font-weight-medium auth-form-btn" href="usuarios.php">
                    Voltar</a>
                </div>




              </form>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
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