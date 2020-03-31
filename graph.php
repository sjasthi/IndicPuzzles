
<html>
<head>
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
 
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
 
    // Set a callback to run when the Google Visualization API is loaded.
   google.charts.setOnLoadCallback(pie_chart);
 
    function pie_chart() {
      var jsonData = $.ajax({
          url: "pie_chart.php",
          dataType: "json",
          async: false
          }).responseText;
 
      // Create our data table out of JSON data loaded from server.
 // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);
 
      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      chart.draw(data, {width: 400, height: 240});
    }
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       google.charts.setOnLoadCallback(column_chart);
    function column_chart() {
var jsonData = $.ajax({
url: column_chart.php',
dataType:"json",
async: false,
success: function(jsonData)
{
var data = new google.visualization.arrayToDataTable(jsonData);
var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
chart.draw(data);
}
}).responseText;
  }
</script>
</head>