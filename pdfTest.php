<?php
require 'fpdf.php';
require 'db_configuration.php';

// DB parameters
$host = "localhost"; 
$user = "root"; 
$pass = "";
$db = "gpuzzles_db"; 
$query = "SELECT * FROM gpuzzles";
// Create fpdf object
$pdf = new FPDF('P', 'pt', 'Letter');

// Add a new page to the document
$pdf->addPage();

// Try to connect to DB
$r = mysqli_connect($host, $user, $pass);
if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n"; 
}



// Try to execute the query

$rs = mysqli_query($db, $query);
if (!$rs) {
    echo "Could not execute query: $query";
 
} else {
    echo "Query: $query executed\n";
} 

while ($row = mysqli_fetch_assoc($rs)) {
    // Get the image from each row
    $url = $row['url'];

    // Place the image in the pdf document
    $pdf->Image($url);
}

// Close the db connection
mysqli_close();

// Close the document and save to the filesystem with the name images.pdf
$pdf->Output('images.pdf','F');