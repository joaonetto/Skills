var ctx = document.getElementById("myChart");
var newdata = ctx.getAttribute('ChartValues').split(', ');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["1", "2", "3", "4", "5"],
    datasets: [{
      label: '# Análise de Votos',
      data: newdata,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    title: {
      display: false,
      text: 'Pré-Vendas'
    },
    scales: {
      yAxes: [{
        ticks: {
          suggestedMin: 0,
          suggestedMax: 10,
          beginAtZero:true
        }
      }]
    }
  }
});
