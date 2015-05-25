// PROJECT LOCATION
google.setOnLoadCallback(drawProjectLocations);

function drawProjectLocations() {
 var data = google.visualization.arrayToDataTable([
    ['Location', 'Projects'],
    ['Los Angeles',  310],
    ['San Francisco',  75],
    ['San Diego',  50],
    ['Bakersfield',  20],
    ['Macfarland',  5],
  ]);

  var options = {
    /*title: 'Solar Projects Revenue',*/
    // curveType: 'function',
    legend: { position: 'bottom' }
  };

  var chart = new google.visualization.LineChart(document.getElementById('project-locations'));
  chart.draw(data, options);
}