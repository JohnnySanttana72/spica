<!DOCTYPE html>
<html lang="pt">



<?php
  session_start();
  include('conexao.php');
  include('protect.php');

  // verifica se o usuário está logado
  if(!isset($_SESSION['id'])){
    header("Location: login.php");
  }

  // verifica se o ID do usuário a ser deletado foi passado por GET
  if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $mysqli->real_escape_string($_GET['id']);

    // deleta o usuário com o ID passado por GET
    $sql_code = "DELETE FROM usuarios WHERE id = '$id'";
    $mysqli->query($sql_code) or die ($mysqli->$error);
}

  // seleciona todos os usuários cadastrados na base de dados
  $sql_code = "SELECT * FROM usuarios";
  $sql_query = $mysqli->query($sql_code) or die ($mysqli->$error);

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
    <!-- partial:../../partials/_sidebar.html -->
    
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Menu</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Painel de Controle</span>
            <div class="badge badge-info badge-pill"></div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Gestão</p>
          <span></span>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li-->

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-note menu-icon"></i>
            <span class="menu-title">Publicações</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.php">Nova Postagem</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/forms/editarPublic.php">Editar Postagens</a></li>
            </ul>
          </div>
        </li>
       

        <li class="nav-item">
          <a class="nav-link" href="../../pages/charts/chartjs.php">
            <i class="mdi mdi-message menu-icon"></i>
            <span class="menu-title">Depoimentos</span>
          </a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="../../pages/tables/basic-table.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pages/icons/mdi.php">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
          </a>
        </li-->
        <li class="nav-item sidebar-category">
          <p>Admnistração</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Gerenciameto</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <!--li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.php"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.php"> Register </a></li-->
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.php"> Cadastrar Novo ADM</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/usuarios.php"> Gerenciar ADM </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/relatorio.php"> Gerar Relatório </a></li>

            </ul>
          </div>
        </li>
    </nav>
    
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/logo-mini.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.png" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bem vindo, <?php echo $_SESSION['nome']; ?> </h4>
          <ul class="navbar-nav navbar-nav-right">
            
              
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
          <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar... " aria-label="search" aria-describedby="search">
          <button style="position:absolute; top:19%; left:350%;"  class="btn btn-success btn-rounded btn-fw" id="searchButton" type="button" >Buscar</button>
        </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="../../images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name"><?php echo $_SESSION['nome']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a href="../samples/logout.php" class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="../forms/basic_elements.php" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.uefs.br/" target="_blank" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/editarPublic.php" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
     

  <div class="col-md-18 grid-margin stretch-card">
  <div class="card">
    <div class="row">
      <div class="col-md-12">
        <div class="card-body pb-0">
          <h4 class="card-title" style="font-size: x-large">Depoimentos</h4>
          <br>
          <button  id="pdfButton" type="button" class="btn btn-info btn-icon-text"> PDF <i class="mdi mdi-printer btn-icon-append"></i> </button>              

          <div id="conteudo"></div>
          <br>
           <br>
            <br><br>
              <br>
              <br>
              <br>
              <br>
              <br>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

<script>
  // Configure o Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyB5nE6maLxeeJpv_53dnF5Qin5Ri6pS5uw",
              authDomain: "fir-myapp-7bdf1.firebaseapp.com",
              databaseURL: "https://fir-myapp-7bdf1.firebaseio.com",
              projectId: "fir-myapp-7bdf1",
              storageBucket: "fir-myapp-7bdf1.appspot.com",
              messagingSenderId: "96504932152",
              appId: "1:96504932152:web:cdbe00fbda7c6a9befc3cd",
              measurementId: "G-K1VGXCE7T5"

  };
  firebase.initializeApp(firebaseConfig);

  // Obtenha uma referência para o nó que deseja exibir
  var ref = firebase.database().ref("courses");

  // Adicione um listener para exibir o conteúdo do nó em tempo real
  ref.on("value", function(snapshot) {
    // Converter o snapshot em um array de depoimentos
    var depoimentos = [];
    snapshot.forEach(function(childSnapshot) {
      var childData = childSnapshot.val();
      depoimentos.push(childData);
    });

    // Exibir todos os depoimentos ao carregar a página
    mostrarDepoimentos(depoimentos);

    // Adicionar um listener para o botão de pesquisa
    document.getElementById("searchButton").addEventListener("click", function() {
      // Obter a string de pesquisa do campo de entrada
      var searchString = document.getElementById("searchInput").value.trim().toLowerCase();

      // Filtrar os depoimentos de acordo com a string de busca
      var depoimentosFiltrados = filtrarDepoimentos(searchString, depoimentos);

      // Exibir os depoimentos filtrados
      mostrarDepoimentos(depoimentosFiltrados);
    });

    // Adicionar um listener para o botão de PDF
    document.getElementById("pdfButton").addEventListener("click", function() {
      // Obter o conteúdo atual do elemento conteúdo
      var conteudo = document.getElementById("conteudo").innerHTML;

      // Criar um novo objeto jsPDF
      var pdf = new jsPDF({
 orientation: 'landscape',
 unit: 'mm',
 format: 'tabloid',
 putOnlyUsedFonts:true,
 floatPrecision: 16 // or "smart", default is 16
});
      

      // Adicionar o conteúdo como HTML ao PDF
      pdf.fromHTML(conteudo, 15, 15);

      // Baixar o PDF

      pdf.save("depoimentos.pdf");
});
});

// Função para filtrar os depoimentos de acordo com a string de busca
function filtrarDepoimentos(searchString, depoimentos) {
                  return depoimentos.filter(function(depoimento) {
                    return depoimento.assunto.toLowerCase().indexOf(searchString) !== -1 ||
                          depoimento.colegio.toLowerCase().indexOf(searchString) !== -1 ||
          depoimento.depoimento.toLowerCase().indexOf(searchString) !== -1;
          });
          }
// Função para exibir os depoimentos
function mostrarDepoimentos(depoimentos) {
// Limpar o conteúdo atual do elemento conteúdo
document.getElementById("conteudo").innerHTML = "";
// Adicionar cada depoimento ao elemento conteúdo
depoimentos.forEach(function(depoimento) {
  var depoimentoHTML = '<div class="card mb-3">' +
    '<div class="card-body">' +
      "<p ><strong>Assunto: </strong>" + depoimento.assunto + "</p>" +
      "<p style=\"padding: 10px; text-align: left;\"><strong>Colegio: </strong>" + depoimento.colegio + "</p>" +
      "<p style=\"padding: 10px; text-align: left;\"><strong>Depoimento: </strong><span class='quebra-linha'>" + depoimento.depoimento + "</span></p>"+
      "<br>"+
      "<br>"+
    '</div>' +
    '</div>';
  document.getElementById("conteudo").innerHTML += depoimentoHTML;
});
}
</script>





        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright Johnny Santana</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->


  


  </body>


</html>














