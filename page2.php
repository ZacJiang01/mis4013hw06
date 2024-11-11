<!DOCTYPE html>
<html>
<head>
  <title>D3.js Scatter Plot</title>
  <script src="https://d3js.org/d3.v7.min.js"></script>
</head>
<body>
  <svg width="600" height="400"></svg>
  <script>
    const data = [
      { x: 10, y: 20 }, { x: 20, y: 35 }, { x: 30, y: 50 },
      { x: 40, y: 60 }, { x: 50, y: 80 }, { x: 60, y: 90 },
    ];

    const svg = d3.select("svg"),
          width = +svg.attr("width"),
          height = +svg.attr("height"),
          margin = { top: 20, right: 20, bottom: 30, left: 40 };

    const x = d3.scaleLinear().domain([0, d3.max(data, d => d.x)]).range([margin.left, width - margin.right]);
    const y = d3.scaleLinear().domain([0, d3.max(data, d => d.y)]).range([height - margin.bottom, margin.top]);

    svg.append("g")
      .attr("transform", `translate(0,${height - margin.bottom})`)
      .call(d3.axisBottom(x))
      .append("text")
      .attr("fill", "black")
      .attr("x", width / 2)
      .attr("y", 25)
      .text("X Value");

    svg.append("g")
      .attr("transform", `translate(${margin.left},0)`)
      .call(d3.axisLeft(y))
      .append("text")
      .attr("fill", "black")
      .attr("x", -20)
      .attr("y", 15)
      .text("Y Value");

    svg.se
