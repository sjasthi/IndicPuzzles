<!-- Source : https://www.discussdesk.com/google-charts-or-graph-with-php-mysql-and-ajax.htm#Bar_Chart
-->
<?php
require 'bin/functions.php';
require 'db_configuration.php';
include('nav.php'); 
$con = mysqli_connect('localhost', 'root', '', 'gpuzzles_db');
$result = mysqli_query($con, "SELECT * FROM gpuzzles");
// if ($result){
//     echo "CONNECTED";
// }
?>
<html>
	<head>
		<style>
			#title {
			text-align: center;
			color: darkgoldenrod;
			}
			thead input {
			width: 100%;
			}
			.thumbnailSize{
			height: 100px;
			width: 100px;
			transition:transform 0.25s ease;
			}
			.thumbnailSize:hover {
			-webkit-transform:scale(3.5);
			transform:scale(3.5);
			}
		</style>
		<meta charset="UTF-8">
			<title>Graphs</title>
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
			<h1 id="title">Graphs</h1><br>
				<div id="columnchart_material"></div>

				<!--JQuery-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

				<!--Data Table-->
				<script type="text/javascript" charset="utf8"
						src="https://code.jquery.com/jquery-3.3.1.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
				<script type="text/javascript" charset="utf8"
						src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
			</body>
		</html>
		