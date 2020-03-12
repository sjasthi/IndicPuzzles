<?php
  require_once('initialize.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/main_style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">
        <title>Gpuzzles.php</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="./mainStyleSheet.css">
    </head>

<body class="body_background">
<div id="wrap">
    <div id="nav">
        <ul>
            <a href="index.php">
              <li class="horozontal-li-logo">
              <img src ="./images/main_logo.png">
              <br/>Gpuzzles</li>
            </a>

            <a href="index.php">
              <li>
              <img src="./images/home.png">
              <br/>Home</li>
            </a>

            <a href="puzzles_list.php">
              <li>
                <img src="./images/list.png">
                <br/>Puzzle List</li>
            </a>

            <a href="createPuzzle.php">
              <li>
              <img src="./images/gantt.png">
              <br/>Create Puzzle</li>
            </a>

            <a href="reports.php">
              <li>
              <img src="./images/reports.png">
              <br/>Books Summary</li>
            </a>

            <a href="books_list.php">
              <li>
                <img src="./images/scanner.png">
                <br/>Books List</li>
            </a>

            <a href="createBook.php">
              <li>
                <img src="./images/history.png">
                <br/>Create Book</li>
            </a>

            <a href="https://trello.com/b/zX9ppGC9/ics499sp20cougarsgpuzzles">
              <li>
                <img src="./images/trend.png">
                <br/>Trello!</li>
            </a>


        <a href="preferences.php">
          <li>
            <img src="./images/setup.png">
            <br/>Preferences</li>
        </a>

        <a href="about.php">
          <li>
            <img src="./images/about.png">
            <br/>About</li>
        </a>
<!-- commenting out this lil' guy for now
        <a href="help.php">
          <li>
            <img src="./images/help.png">
            <br/>help</li>
        </a>
because it bugs me from wrapping -->
      </ul>
      <br />
    </div>


		</div>
		</body>
		</html>
