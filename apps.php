<?php
require 'bin/functions.php';
require 'db_configuration.php';
include('nav.php');

?>

<html>

	<head>
		<title>Indic Puzzles -> Apps</title>
	</head>
	<style>
		.image {
		width: 100px;
		height: 100px;
		padding: 20px 20px 20px 20px;
		transition: transform .2s;
		}

		.image:hover {
		transform: scale(1.2)
		}

		#table_1 {
		border-spacing: 300px 0px;
		}

		#table_2 {
		margin-left: auto;
		margin-right: auto;
		}

		#silc {
		width: 300;
		}

		#welcome {
		text-align: center;
		}

		#directions {
		text-align: center;
		}

		#title {
		color: black;
		text-align: center;
		}

		a:visited,
		a:link,
		a:active {
		text-decoration: none;
		}

		#title2 {
		text-align: center;
		color: darkgoldenrod;
		}
	</style>

	<body>
	
		<h1 id="title2">What do you like to create today?</h1>

			<?php

    $sql1 = "tbd";
    $results1 = mysqli_query($db, $sql1);
  
    // if (mysqli_num_rows($results1) > 0) {
    //     while ($row = mysqli_fetch_assoc($results1)) {
    //         $column[] = $row;
    //     }
    // }

    echo "TODO: Fetch the apps and display those in a grid";
    ?>

		</body>

	</html>