<script>
let pieChart = document.querySelector("#myChart");
          new Chart(pieChart, {
            type: "pie",
            data: {
                labels: ['Production de vin en %', 'Production de tire-bouchons personnalisés en %', 'Production de fromage en %'],
                datasets: [{
                  data: [60, 10, 30],
                  backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                  ],
                hoverOffset: 4
                }]
            }
          });
</script>