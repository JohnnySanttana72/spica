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
                            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.php">Nova
                                    Postagem</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/editarPublic.php">Editar
                                    Postagens</a>
                            </li>
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
                <?php if ($_SESSION['adm']==2){ ?>
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
                            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.php">
                                    Cadastrar Novo
                                    ADM</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/usuarios.php"> Gerenciar
                                    ADM </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/relatorio.php"> Gerar
                                    Relatório </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <?php } ?>


        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/logo-mini.png"
                                alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img
                                src="../../images/logo-mini.png" alt="logo" /></a>
                    </div>
                    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bem vindo, <?php echo $_SESSION['nome']; ?>
                    </h4>
                    <ul class="navbar-nav navbar-nav-right">


                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <p type="text" class="form-control" placeholder="Nova Postagem" aria-label="search"
                                    aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="../../images/faces/face5.jpg" alt="profile" />
                                <span class="nav-profile-name"><?php echo $_SESSION['nome']; ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">

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
                            <a href="http://www.dedu.uefs.br/modules/conteudo/conteudo.php?conteudo=40" target="_blank"
                                class="nav-link icon-link">
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
            <html>


            <!-- Firebase SDK -->
            <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <body>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: x-large">&nbsp; &nbsp; Nuvem de Palavras</h4>
                                <br>
                                <div>
                                    &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <button onclick="gerarImagem()" type="button"
                                        class="btn-sm btn-outline-info btn-icon-text">
                                        Baixar
                                        <i class="mdi mdi-printer btn-icon-append"></i>
                                    </button>
                                </div>
                                <br>
                                <div>
                                    <div style="display: flex; align-items: center; justify-content: center;"
                                        id="nuvem-palavras"></div>
                                </div>
                                <br>
                                <br>
                                <br><br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>    <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                    Johnny
                                    Santana</span>
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





<title>Nuvem de Palavras no Firebase</title>
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-cloud/1.2.5/d3.layout.cloud.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg2pdf.js/0.3.0/svg2pdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>



<style>
    .cloud-text {
        font-family: "Impact";
        cursor: pointer;
        fill: #06dada;
    }

    .cloud-text:hover {
        fill: #000000;
    }
</style>
<script>
    // Configuração do Firebase
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

    // Inicialização do Firebase
    firebase.initializeApp(firebaseConfig);

    // Referência ao nó "depoimentos" do banco de dados
    var depoimentosRef = firebase.database().ref("courses");

    // Criação de um objeto para armazenar a contagem de palavras
    var frequenciaPalavras = {};

    // Palavras comuns que devem ser removidas da nuvem de palavras
    var palavrasComuns = ["a", "meu", "e", "pe", "mim", "ja", "oi", "essa", "mesmo", "dá", "q",
        "todos", "pq", "minha", "sou", "acha", "fica", "pra", "do", "da", "isso", "ir", "pois",
        "n", "fazem", "soi", "pro", "sei", "o", "de", "da", "para", "em", "que", "se", "como",
        "um", "uma", "é", "na", "no", "os", "as", "não", "por", "mais", "com", "dos", "das",
        "foi", "ser", "são", "tem", "pela", "pelo", "ao", "aos", "à", "às", "sobre", "mas",
        "ou", "ainda", "já", "também", "para", "porque", "quando", "me", "eu", "você", "ele",
        "ela", "nós", "eles", "teste", "elas"
    ];

    // Função para contar a frequência de cada palavra
    function contarPalavras(depoimentos) {
        // Iteração pelos depoimentos
        depoimentos.forEach(depoimento => {
            // Separação do depoimento em palavras
            var palavras = depoimento.depoimento.split(" ");
            // Iteração pelas palavras
            palavras.forEach(palavra => {
                // Conversão da palavra para minúsculas
                palavra = palavra.toLowerCase();
                // Verificação se a palavra não é uma das palavras comuns
                if (!palavrasComuns.includes(palavra)) {
                    // Adição da palavra ao objeto de contagem
                    if (frequenciaPalavras[palavra]) {
                        frequenciaPalavras[palavra]++;
                    } else {
                        frequenciaPalavras[palavra] = 1;
                    }
                }
            });
        });
        console.log(frequenciaPalavras)
        // Criação da nuvem de palavras
        var cloud = d3.layout.cloud()
            .size([800, 400])
            .words(Object.keys(frequenciaPalavras).map(function (d) {
                return {
                    text: d,
                    size: frequenciaPalavras[d] * 20
                };
            }))
            .padding(5)
            .rotate(function () {
                return ~~(Math.random() * 2) * 90;
            })
            .fontSize(function (d) {
                return d.size;
            })
            .on("end", desenharNuvem);

        cloud.start();
    }

    // Função para desenhar a nuvem de palavras
    function desenharNuvem(words) {
        d3.select("#nuvem-palavras")
            .append("svg")
            .attr("width", 800)
            .attr("height", 400)
            // Adicionando um grupo para a nuvem de palavras
            .append("g")
            .attr("transform", "translate(400,200)")
            .selectAll("text")
            .data(words)
            .enter()
            .append("text")
            .style("font-size", function (d) {
                return d.size + "px";
            })
            .style("font-family", "Impact")
            .style("fill", "#000000")
            .attr("text-anchor", "middle")
            .attr("transform", function (d) {
                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
            })
            .text(function (d) {
                return d.text;
            })
            .attr("class", "cloud-text");
    }
    // Consulta ao banco de dados para obter os depoimentos
    depoimentosRef.on("value", function (snapshot) {
        var depoimentos = [];
        snapshot.forEach(function (childSnapshot) {
            var depoimento = childSnapshot.val();
            depoimentos.push(depoimento);
        });
        contarPalavras(depoimentos);
    }, function (errorObject) {
        console.log("Erro ao obter os depoimentos: " + errorObject.code);
    });

    console.log(words);

    function gerarImagem() {
        html2canvas(document.querySelector("#nuvem-palavras")).then(canvas => {
            var link = document.createElement("a");
            document.body.appendChild(link);
            link.download = "nuvem-palavras.png";
            link.href = canvas.toDataURL();
            link.target = "_blank";
            link.click();
        });
    }
</script>