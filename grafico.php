<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Realtime Database Chart</title>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <canvas id="myChart"></canvas>
    <script>
      // Configure o Firebase
      var firebaseConfig = {
        // Seu código de configuração do Firebase aqui
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
      
      // Acesse o Realtime Database
      var database = firebase.database();
      
      // Obtenha os dados do Realtime Database
      database.ref().once('value').then(function(snapshot) {
        var data = snapshot.val();
        var keys = Object.keys(data);
        var values = Object.values(data);
        
         // Ajuste a escala de visualização de acordo com o dado
    var max = Math.max.apply(null, values);
    
    // Crie um gráfico usando o Chart.js
    var myChart = new Chart(document.getElementById('myChart'), {
      type: 'bar',
      data: {
        labels: keys,
        datasets: [{
          label: 'Quantidade de elementos',
          data: values,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 1,
              min: 0,
              max: max
            },
            scaleLabel: {
              display: true,
              labelString: 'Quantidade de elementos'
            }
          }]
        }
      }
    });
  });
</script>
  </body>
</html>