<!DOCTYPE html>
<html>
<head>
  <title>D3.js Example</title>
  <script src="https://d3js.org/d3.v7.min.js"></script>
</head>
<body>
  <div id="d3-chart"></div>
  <script>
    const data = [12, 19, 3, 5, 2, 3];
    const width = 400;
    const height = 200;
    const barWidth = width / data.length;

    const svg = d3.select("#d3-chart")
      .append("svg")
      .attr("width", width)
      .attr("height", height);

    svg.selectAll("rect")
      .data(data)
      .enter()
      .append("rect")
      .attr("x", (d, i) => i * barWidth)
      .attr("y", d => height - d * 10)
      .attr("width", barWidth - 2)
      .attr("height", d => d * 10)
      .attr("fill", "steelblue");
  </script>
</body>
</html>
