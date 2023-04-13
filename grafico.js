
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

            // Exibir todos os depoimentos ao carregar a página
            mostrarDepoimentos(depoimentos);

            // Contar a quantidade de vezes que as strings definidas aparecem em todos os depoimentos
            var contador1 = 0;
            var contador2 = 0;
            var contador3 = 0;
            depoimentos.forEach(function(depoimento) {
                if (depoimento.depoimento.toLowerCase().includes("estudar")) {
                    contador1++;
                }
                if (depoimento.depoimento.toLowerCase().includes("pai ")) {
                    contador2++;
                }
                if (depoimento.depoimento.toLowerCase().includes("sinto ")) {
                    contador3++;
                }
            });

            // Exibir o contador na página da web
            document.getElementById("contador1").textContent = contador1.toString();
            document.getElementById("contador2").textContent = contador2.toString();
            document.getElementById("contador3").textContent = contador3.toString();

            var valores = [contador1, contador2, contador3];
        
        var ctx = document.getElementById('#grafico').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Estudar', 'Pai', 'Sinto'],
                datasets: [{
                    label: 'Contadores',
                    data: valores,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        });
    