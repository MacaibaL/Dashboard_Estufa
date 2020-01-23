function charts(data,ChartType)
{
var c=ChartType;
var jsonData=data;

google.load("visualization", "1", {packages:["corechart"], callback: drawVisualization});

function drawVisualization() 
{
  var data = new google.visualization.DataTable();

  data.addColumn('string', 'Country');
  data.addColumn('number', 'Population Density');

  $.each(jsonData, function(i,jsonData)
  {
  var value = jsonData.Poten;
  var name = jsonData.Data;
  data.addRows([ [name, parseInt(value)]]);
  });

  var options = {
  title : "Company Performance",
  curveType: 'function',
  colorAxis: {colors: ['#54C492', '#cc0000']},
  datalessRegionColor: '#dedede',
  legend: { position: 'bottom' }
  };

  var chart;

  if(c=="LineChart")
  chart = new google.visualization.LineChart(document.getElementById('line_div'));
  else if(c=="PieChart") // grafico em torta
  chart=new google.visualization.PieChart(document.getElementById('piechart_div'));
  else if(c=="BarChart") // grafico em barras
  chart=new google.visualization.BarChart(document.getElementById('bar_div'));

  chart.draw(data, options);
}


}



$(document).ready(function () 
{
url='read/leitura.php';
ajax_data('GET',url, function(data)
{
  charts(data,"LineChart");
  charts(data,"PieChart");
  charts(data,"BarChart");
});
});


// // const grafico_line = document.getElementById('chart_div')
// const grafico_donut = document.getElementById('donut_div')
// const grafico_area = document.getElementById('area_div')
 
//  // Load the Visualization API and the corechart package.
//  google.charts.load('current', {'packages':['corechart']});

// //  // Set a callback to run when the Google Visualization API is loaded.
// //  google.charts.setOnLoadCallback(drawChart);

//  // Set a callback to run when the Google Visualization API is loaded.
//  google.charts.setOnLoadCallback(drawChartDonut);

// // Set a callback to run when the Google Visualization API is loaded.
// google.charts.setOnLoadCallback(drawChartArea);




// function drawChartDonut() {
//     var data = google.visualization.arrayToDataTable([
//       ['Pac Man', 'Percentage'],
//       ['', 75],
//       ['', 25]
//     ]);

//     var options = {
//       legend: 'none',
//       pieSliceText: 'none',
//       pieStartAngle: 135,
//       tooltip: { trigger: 'none' },
//       slices: {
//         0: { color: 'yellow' },
//         1: { color: 'transparent' }
//       },
//       width:450,
//       height:300
//     };

//     var chart = new google.visualization.PieChart(grafico_donut);
//     chart.draw(data, options);
// }

// function drawChartArea() {
//     var data = google.visualization.arrayToDataTable([
//         ['Year', 'Sales', 'Expenses'],
//         ['2013',  1000,      400],
//         ['2014',  1170,      460],
//         ['2015',  660,       1120],
//         ['2016',  1030,      540]
//     ]);

//     var options = {
//         title: 'Company Performance',
//         hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
//         vAxis: {minValue: 0},
//         width:450,
//         height:300
//     };

//     var chart = new google.visualization.AreaChart(grafico_area);
//     chart.draw(data, options);
// }