<!DOCTYPE html>
<html>
<head>
  <title>Highcharts Area Chart</title>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
  <div id="highcharts-area" style="width: 600px; height: 400px;"></div>
  <script>
    Highcharts.chart('highcharts-area', {
      chart: { type: 'area' },
      title: { text: 'Website Traffic Over 6 Months' },
      xAxis: {
        categories: ['January', 'February', 'March', 'April', 'May', 'June'],
        title: { text: 'Month' }
      },
      yAxis: {
        title: { text: 'Visitors' }
      },
      series: [{
        name: 'Visitors',
        data: [800, 1200, 1000, 1800, 2000, 2300]
      }]
    });
  </script>
</body>
</html>
