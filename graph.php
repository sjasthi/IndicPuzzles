<!-- Source : https://www.discussdesk.com/google-charts-or-graph-with-php-mysql-and-ajax.htm#Bar_Chart
-->
<?php
include('nav.php'); 
$con = mysqli_connect('localhost', 'root', '', 'gpuzzles_db');
$result = mysqli_query($con, "SELECT * FROM gpuzzles");
// if ($result){
//     echo "CONNECTED";
// }
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['puzzle_name', 'creator_name', 'author_name'],
          
          <?php
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "['".$row['puzzle_name']."', '".$row['creator_name']."', ['".$row['author_name']."']],";
                }    
            }

          ?>

        ]);

        var options = {
          chart: {
            title: 'Creators & Authors',
            width: 5000,
            height: 1000
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>

    <div id="columnchart_material"></div>

</body>
</html>
