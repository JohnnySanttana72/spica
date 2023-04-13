<!DOCTYPE html>
<html>
  <head>
    <title>Exemplo de gráfico com dois Realtime Databases do Firebase</title>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
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
<body>
    <canvas id="chart" width="400" height="400"></canvas>
</body>
</html>
