// REVENUE
google.load('visualization', '1', {packages: ['corechart', 'line']});
google.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
 var data = google.visualization.arrayToDataTable([
    ['Month', 'Revenue'],
    ['Jan',  220],
    ['Feb',  360],
    ['Mar',  660],
    ['Apr',  440],
    ['May',  0],
    ['Jun',  0],
    ['Jul',  0],
    ['Aug',  0],
    ['Sep',  0],
    ['Oct',  0],
    ['Nov',  0],
    ['Dec',  0],
  ]);

  var options = {
    /*title: 'Solar Projects Revenue',*/
    // curveType: 'function',
    legend: { position: 'bottom' }
  };

  var chart = new google.visualization.LineChart(document.getElementById('revenue'));
  chart.draw(data, options);
};

// TOP LOCATIONS
google.load("visualization", "1", {packages:["geochart"]});
/*google.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {

  var data = google.visualization.arrayToDataTable([
    ['State', 'Foo Factor'],
    ['US-IL', 200],
    ['US-IN', 300],
    ['US-IA', 20],
    ['US-RI', 150]
  ]);
 
  var geochart = new google.visualization.GeoChart(
      document.getElementById('locations'));
  geochart.draw(data, {width: 556, height: 347, region: "US", resolution: "provinces"});
}*/

google.setOnLoadCallback(drawMarkersMap);

function drawMarkersMap() {
  var data = google.visualization.arrayToDataTable([
    ['City',   'Projects'],
    ['Los Angeles, CA', 4537],
    ['San Diego, CA', 500],
    ['Chico-Redding, CA', 680],
    ['Bakersfield, CA', 129],
    ['Eureka, CA', 13],
  ]);

  var options = {
    region: 'US-CA',
    displayMode: 'markers',
    resolution: 'metros',
    magnifyingGlass: {enable: true, zoomFactor: 7.5},
    colorAxis: {colors: ['green', 'blue']}
  };

  var chart = new google.visualization.GeoChart(document.getElementById('locations'));
  chart.draw(data, options);
};

// TOP SALES TEAM
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
  var data = google.visualization.arrayToDataTable([
    ['Sales Team', 'Sales'],
    ['Bob Sager', 460],
    ['John Terry', 869],
    ['Samantha Earl', 545],
  ]);

  var options = {
    // title: 'Population of Largest U.S. Cities',
    // chartArea: {width: '50%'},    
    hAxis: {
      title: 'Total Sales',
      minValue: 0,
    },
    vAxis: {
      title: 'Sales Team'
    }
  };
  var chart = new google.visualization.BarChart(document.getElementById('salesteam'));
  chart.draw(data, options);
}

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