<!DOCTYPE html>
<html lang="en">


<?php
  include('pages\samples\conexao.php');
  include('protect.php');


?>

<head>
  <script src="grafico.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registros da Alma</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/drawable-hdpi-icon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Menu</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Painel de Controle</span>
            <div class="badge badge-info badge-pill"></div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-note menu-icon"></i>
            <span class="menu-title">Publicações</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.php">Nova Postagem</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/forms/editarPublic.php">Editar Postagens</a></li>
            </ul>
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="pages/charts/chartjs.php">
            <i class="mdi mdi-message menu-icon"></i>
            <span class="menu-title">Depoimentos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
          </a>
        </li>
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
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.php"> Cadastrar Novo ADM</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/usuarios.php"> Gerenciar ADM </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/relatorio.php"> Gerar Relatório </a></li>

            </ul>
          </div>
        </li>
       
       

      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
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
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name"><?php echo $_SESSION['nome']; ?> </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a href="pages\samples\logout.php" class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-xl-6 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Quantidade de Depoimentos Recebidos</p>
                      <div class="row mb-3">
                        <div class="col-md-7">
                          <div class="d-flex justify-content-between traffic-status">
                            <div class="item">
                              <p class="mb-">Depoimentos</p>
                              <h5 class="font-weight-bold mb-0" id="numChildren1Value">  </h5>
                              <div class="color-border"></div>
                            </div>
                            <div class="item">
                              <p class="mb-">Postagens</p>
                              <h5 class="font-weight-bold mb-0" id="numChildren2Value" ></h5>
                              <div class="color-border" ></div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                      <canvas id="chart" ></canvas>
                    </div>
                  </div>
                </div>



                <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <p class="card-title">Weekly Balance</p>
                        <p class="text-success font-weight-medium">20.15 %</p>
                      </div>
                      <div class="d-flex align-items-center flex-wrap mb-3">
                        <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">$22.736</h5>
                        <p class="text-muted mb-0">Avg Sessions</p>
                      </div>
                      <canvas id="balance-chart" height="130"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <p class="card-title">Today Task</p>
                        <p class="text-success font-weight-medium">45.39 %</p>
                      </div>
                      <div class="d-flex align-items-center flex-wrap mb-3">
                        <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">17.247</h5>
                        <p class="text-muted mb-0">Avg Sessions</p>
                      </div>
                      <canvas id="task-chart" height="130"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Alerta da Palavra Massacre</p>
                      Total:
                      <p class="text-muted" id="contadorEstudar" ></p>
                      <div class="color-border"></div>
                      <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                        id="regional-chart-legend"></div>
                      <div id="resultados"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center mb-4">
                        <p class="card-title mb-0 mr-1">Today activity</p>
                        <div class="badge badge-info badge-pill">2</div>
                      </div>
                      <div class="d-flex flex-wrap pt-2">
                        <div class="mr-4 mb-lg-2 mb-xl-0">
                          <p>Time On Site</p>
                          <h4 class="font-weight-bold mb-0">77.15 %</h4>
                        </div>
                        <div>
                          <p>Page Views</p>
                          <h4 class="font-weight-bold mb-0">14.15 %</h4>
                        </div>
                      </div>
                    </div>
                    <canvas height="150" id="activity-chart"></canvas>
                  </div>
                </div>
                <div class="col-md-12 stretch-card">
                  <div class="card">
                    <div class="card-body pb-0">
                      <p class="card-title">Palavras Frequentes</p>
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                          <div class="item mr-3">
                            <div class="d-flex align-items-center">
                              <div class="color-bullet"></div>
                              <h5 class="font-weight-bold mb-0" id = "contador1"></h5>
                            </div>
                            <p class="mb-">Bullying</p>
                          </div>
                          <div class="item mr-3">
                            <div class="d-flex align-items-center">
                              <div class="color-bullet"></div>
                              <h5 class="font-weight-bold mb-0" id = "contador2"></h5>
                            </div>
                            <p class="mb-">Triste</p>
                          </div>
                          <div class="item mr-3">
                            <div class="d-flex align-items-center">
                              <div class="color-bullet"></div>
                              <h5 class="font-weight-bold mb-0" id = "contador3"></h5>
                            </div>
                            <p class="mb-">Sozinho(a)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <canvas height="170" id="grafico"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Financial management review</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Deadline
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face2.jpg" alt="image"/>
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face3.jpg" alt="image"/>
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $138.00
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face4.jpg" alt="image"/>
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 160.25
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face6.jpg" alt="image"/>
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 123.21
                          </td>
                          <td>
                            April 05, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face7.jpg" alt="image"/>
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 150.00
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->
          


          <!DOCTYPE html>
<html>

          <!-- row end -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="grafico.js"></script>
  <!-- End custom js for this page-->
</body>

</html>




    <title>Exemplo de gráfico com Realtime Database do Firebase</title>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    <script >
      // Configuração do Firebase para o primeiro banco de dados
      const firebaseConfig1 = {
        apiKey: "AIzaSyB5nE6maLxeeJpv_53dnF5Qin5Ri6pS5uw",
                        authDomain: "fir-myapp-7bdf1.firebaseapp.com",
                        databaseURL: "https://fir-myapp-7bdf1.firebaseio.com",
                        projectId: "fir-myapp-7bdf1",
                        storageBucket: "fir-myapp-7bdf1.appspot.com",
                        messagingSenderId: "96504932152",
                        appId: "1:96504932152:web:cdbe00fbda7c6a9befc3cd",
                        measurementId: "G-K1VGXCE7T5"
      };

      // Configuração do Firebase para o segundo banco de dados
      const firebaseConfig2 = {
        apiKey: "AIzaSyDoJd--sy11Ui45otWPoQ-siH_KN8xrPU8",
        authDomain: "postagens-ec3c9.firebaseapp.com",
        databaseURL: "https://postagens-ec3c9-default-rtdb.firebaseio.com",
        projectId: "postagens-ec3c9",
        storageBucket: "postagens-ec3c9.appspot.com",
        messagingSenderId: "617772043013",
        appId: "1:617772043013:web:9d9fe264a2e879e59e856c"
      };

      // Inicializa o Firebase para o primeiro banco de dados
      const app1 = firebase.initializeApp(firebaseConfig1, 'app1');
      const db1 = app1.database();

      // Inicializa o Firebase para o segundo banco de dados
      const app2 = firebase.initializeApp(firebaseConfig2, 'app2');
      const db2 = app2.database();

      // Referências aos nós que se deseja contar os nós filhos
      const nodeRef1 = db1.ref("courses");
      const nodeRef2 = db2.ref("postagens");

      // Obtém o snapshot dos nós
      Promise.all([nodeRef1.once('value'), nodeRef2.once('value')])
        .then((snapshots) => {
          // Obtém a quantidade de nós filhos de cada nó
          const numChildren1 = snapshots[0].numChildren();
          const numChildren2 = snapshots[1].numChildren();
          console.log(`O nó 1 tem ${numChildren1} nós filhos`);
          console.log(`O nó 2 tem ${numChildren2} nós filhos`);
          document.getElementById("numChildren1Value").textContent = ` ${numChildren1} `;
          document.getElementById("numChildren2Value").textContent = ` ${numChildren2} `;



          

          // Configurações do gráfico
          const chartOptions = {
            responsive: true,
            legend: {
              display: true,
              position: 'top'
            },
            title: {
              display: true,
              text: 'Número de nós filhos'
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          };

          // Cria o gráfico
          const chartData = {
            labels: ['Quantidade de Depoimentos e Postagens'],
            datasets: [{
              label: 'Quantidade de Depoimentos',
              backgroundColor: 'rgba(54, 162, 235, 0.5)',
              borderColor: 'rgba(54, 162, 235,0.8)',borderWidth: 1,
              data: [numChildren1]
              }, {
              label: 'Quantidade de Postagens',
              backgroundColor: 'rgba(255, 99, 132, 0.5)',
              borderColor: 'rgba(255, 99, 132, 0.8)',
              borderWidth: 1,
              data: [numChildren2]
              }]
              };
              const ctx = document.getElementById('chart').getContext('2d');
              const chart = new Chart(ctx, {
              type: 'bar',
              data: chartData,
              options: chartOptions
              });
              })
              .catch((error) => {
              console.error(error);
              });
      </script>

</head>

<!DOCTYPE html>
<html>
<body>
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
        var ref = firebase.database().ref('courses');

        // Adicione um listener para exibir o conteúdo do nó em tempo real
        ref.on("value", function(snapshot) {
            // Converter o snapshot em um array de depoimentos
            var depoimentos = [];
            snapshot.forEach(function(childSnapshot) {
                var childData = childSnapshot.val();
                depoimentos.push(childData);
            });

            // Contar a quantidade de vezes que as strings definidas aparecem em todos os depoimentos
            var contador1 = 0;
            var contador2 = 0;
            var contador3 = 0;
            depoimentos.forEach(function(depoimento) {
                if (depoimento.depoimento.toLowerCase().includes("bullying")) {
                    contador1++;
                }
                if (depoimento.depoimento.toLowerCase().includes("triste")) {
                    contador2++;
                }
                if (depoimento.depoimento.toLowerCase().match(/\bsozinh[oa]\b/)) {
                    contador3++;
                }

            });

            // Exibir o contador na página da web
        document.getElementById("contador1").textContent = contador1.toString();
        document.getElementById("contador2").textContent = contador2.toString();
        document.getElementById("contador3").textContent = contador3.toString();

            var valores = [contador1, contador2, contador3];

var ctx = document.getElementById('grafico').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Palavras Frequentes'],
    datasets: [{
      label: 'Bullying', 
      data: [contador1],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    }, {
      label: 'Triste', 
      data: [contador2],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }, {
      label: 'Sozinho(a)', 
      data: [contador3],
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      borderColor: 'rgba(255, 206, 86, 1)',
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

        });

</script>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
</head>
<body>

    <div ></div>
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
    var ref = firebase.database().ref('courses');

// Adicione um listener para exibir o conteúdo do nó em tempo real
ref.on("value", function(snapshot) {
    // Converter o snapshot em um array de depoimentos
    var depoimentos = [];
    snapshot.forEach(function(childSnapshot) {
        var childData = childSnapshot.val();
        depoimentos.push(childData);
    });

    // Contar a quantidade de vezes que a string "estudar" aparece em todos os depoimentos
    var contadorEstudar = 0;
    depoimentos.forEach(function(depoimento) {
  if (depoimento.depoimento.toLowerCase().includes("massacre")) {
    contadorEstudar++;
    var resultado = document.createElement('p');
    resultado.innerHTML = `<b>Assunto:</b> ${depoimento.assunto}<br><b>Colégio:</b> ${depoimento.colegio}<br><b>Depoimento:</b> ${depoimento.depoimento}<br><br>`;
    document.getElementById('resultados').appendChild(resultado);
  }
});
    document.getElementById("contadorEstudar").textContent = contadorEstudar.toString();


    // Mostrar a quantidade de vezes que a string "estudar" apareceu
    var quantidade = document.createElement('p');
    //quantidade.textContent = "A palavra 'massacre' apareceu " + contadorEstudar + " vezes.";
    document.getElementById('resultados').appendChild(quantidade);
});
</script>
</body>
</html>

   
</body>
</html>