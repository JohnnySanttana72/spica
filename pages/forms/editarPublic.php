<!DOCTYPE html>
<html lang="pt">

<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>

<?php

    include('C:\xampp\htdocs\spica\pages\samples\conexao.php');
    include('protect.php');

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
  <link rel="shortcut icon" href="../../images/drawable-hdpi-icon.png" />
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
            <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
                <p type="text" class="form-control" placeholder="Nova Postagem" aria-label="search" aria-describedby="search">
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
              <a href="basic_elements.php" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.uefs.br/" target="_blank" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="editarPublic.php" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
<html>


<!-- Firebase SDK -->
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
<div class="col-md-15 grid-margin stretch-card">
    <div class="card">
      <div class="row">
        <div class="card-body">
         <h4 class="card-title" style="font-size: x-large">Lista de Postagens</h4>
          <ul  id="post-list"></ul>
          <a href="basic_elements.php"> <button type="button" class="btn btn-success btn-lg btn-block" > <i  class="mdi mdi-account" ></i>Cadastrar Novo</button> </a>

          </div>
        </div>
      </div>
    </div>

<!-- Firebase Config -->
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyDoJd--sy11Ui45otWPoQ-siH_KN8xrPU8",
        authDomain: "postagens-ec3c9.firebaseapp.com",
        databaseURL: "https://postagens-ec3c9-default-rtdb.firebaseio.com",
        projectId: "postagens-ec3c9",
        storageBucket: "postagens-ec3c9.appspot.com",
        messagingSenderId: "617772043013",
        appId: "1:617772043013:web:9d9fe264a2e879e59e856c"
    };
    // Inicializa o Firebase
    firebase.initializeApp(firebaseConfig);
    var database = firebase.database();
    var storage = firebase.storage();
    var storageRef = storage.ref();

   // Obtém as postagens do banco de dados
database.ref('postagens').once('value').then(function(snapshot) {
  var tableRows = '';
  snapshot.forEach(function(childSnapshot) {
    var postagem = childSnapshot.val();
    var key = childSnapshot.key;
    tableRows += '<tr><td><a href="#" class="post-link" data-key="' + key + '">' + postagem.titulo + '</a></td><td><a href="#" class="post-link" data-key="' + key + '">' + postagem.nome + '</a></td><td><button class="delete-button btn btn-danger btn-rounded btn-fw" data-key="' + key + '">Apagar</button></td></tr>';
  });
  // Adiciona as linhas da tabela à lista
  $('#post-list').html('<table class="table table-striped" border ="1" style="border-collapse: collapse; width: 100%;"><thead><tr><th>Título</th><th>Autor</th><th>Ação</th></tr></thead><tbody>' + tableRows + '</tbody></table>');
});

    // Obtém a postagem selecionada e exibe os campos para edição
    $(document).on('click', '.post-link', function() {
        var key = $(this).data('key');
        database.ref('postagens/' + key).once('value').then(function(snapshot) {
            var postagem = snapshot.val();
            var form = '<form id="form-' + key + '" class="forms-sample" enctype="multipart/form-data"><div class="form-group"><label>Título:</label><input class="form-control" placeholder="titulo" required type="text" name="titulo" value="' + postagem.titulo + '"></div><br><div class="form-group"><label>Texto:</label><br><textarea class="form-control" rows="4" required name="texto">' + postagem.texto + '</textarea></div><br><div class="form-group"><label>Imagem:</label><input type="file" name="imagem" ><br><input  type="hidden" name="key" value="' + key + '"></div><br><div><button class="btn btn-primary mr-2" type="submit">Salvar</button></div></form>';
            $('#post-list').html(form);
            // Salva as alterações no banco de dados
            $('#form-' + key).submit(function(event) {
                event.preventDefault();
                var titulo = $('input[name=titulo]').val();
                var texto = $('textarea[name=texto]').val();
                var key = $('input[name=key]').val();
                var file = $('input[name=imagem]')[0].files[0];
        // Se uma nova imagem foi selecionada, salva a imagem no Storage e atualiza a URL da postagem
        if (file) {
            var fileName = file.name;
            var storageFile = storageRef.child('imagens/' + fileName);
            storageFile.put(file).then(function(snapshot) {
            snapshot.ref.getDownloadURL().then(function(downloadURL) {
            database.ref('postagens/' + key).update({
            titulo: titulo,
            texto: texto,
            imagemURL: downloadURL
             }).then(function() {
                alert('Postagem atualizada com sucesso!');
                location.reload();
             });
            });
            });
            }
        // Caso contrário, apenas atualiza os campos de texto da postagem
        else {
            database.ref('postagens/' + key).update({
            titulo: titulo,
            texto: texto
            }).then(function() {
            alert('Postagem atualizada com sucesso!');
            location.reload();
            });
        }
        });
        });
        });
           // Deleta a postagem selecionada
          $(document).on('click', '.delete-button', function() {
            var key = $(this).data('key');
            if (confirm('Tem certeza que deseja apagar esta postagem?')) {
                // Deleta a imagem do storage, se houver
                database.ref('postagens/' + key).once('value').then(function(snapshot) {
                    var postagem = snapshot.val();
                    if (postagem.imagem) {
                        var imageName = key + '_' + postagem.imagem.split('/').pop();
                        var imageRef = storageRef.child(imageName);
                        imageRef.delete();
                        
                    }
                    
                });
            // Deleta a postagem do banco de dados
            database.ref('postagens/' + key).remove();
            // Remove a postagem da lista
            $(this).parent().remove();
            window.location.reload(true);
         }
        });
  </script>


        

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Johnny Santana</span>
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