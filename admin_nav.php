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
      <title>Indic Puzzles</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="./mainStyleSheet.css">
   </head>
   <body class="body_background">
      <div id="wrap">
         <div id="nav">
            <ul>
               <a href="admin.php">
                  <li class="horizontal-li-logo">
                     <img src ="./images/main_logo.png">
                     <br/>Indic puzzles (admin)
                  </li>
               </a>
               <a href="index.php">
                  <li class="horizontal-li-logo">
                     <img src ="./images/home.png">
                     <br/> Indic Puzzles (User)
                  </li>
               </a>

               <a href="admin_puzzles.php">
                  <li>
                     <img src="./images/puzzles.png">
                     <br/>Puzzles
                  </li>
               </a>
               <a href="admin_apps.php">
                  <li>
                     <img src="./images/apps.png">
                     <br/>Apps
                  </li>
               </a>
               <a href="admin_books.php">
                  <li>
                     <img src="./images/books.png">
                     <br/>Books
                  </li>
               </a>
               <!-- <a href="admin_sponsors.php">
                  <li>
                     <img src="./images/support.png">
                     <br/>Sponsors
                  </li>
               </a> -->
               <a href="admin_users.php">
                  <li>
                     <img src="./images/users.png">
                     <br/>Users
                  </li>
               </a>
               <a href="admin_setup.php">
                  <li>
                     <img src="./images/setup.png">
                     <br/>Setup
                  </li>
               </a>
               <a href="admin_backup.php">
                  <li>
                     <img src="./images/backup.png">
                     <br/>Backup
                  </li>
               </a>
               <a href="admin_reports.php">
                  <li>
                     <img src="./images/reports.png">
                     <br/>Reports
                  </li>
               </a>
               <a href="admin_analytics.php">
                  <li>
                     <img src="./images/analytics.png">
                     <br/>Analytics
                  </li>
               </a>
            </ul>
            <br />
         </div>
      </div>
   </body>
</html>