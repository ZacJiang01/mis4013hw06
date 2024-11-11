<!DOCTYPE html>
<html>
<head>
  <h1>Chart.Js</h1>
  <title>Chart.js Line Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="chartjs-line" width="600" height="400"></canvas>
  <script>
    const ctx = document.getElementById('chartjs-line').getContext('2d');
    const chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
          label: 'Sales ($)',
          data: [1200, 1500, 1000, 2000, 2500, 2100],
          borderColor: 'rgba(75, 192, 192, 1)',
          fill: false,
        }]
      },
      options: {
        scales: {
          x: { title: { display: true, text: 'Month' } },
          y: { beginAtZero: true, title: { display: true, text: 'Sales in $' } }
        }
      }
    });
  </script>
</body>
</html>
