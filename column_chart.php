
<?php
include('db_configuration.php');

$sql = mysqli_connect("localhost","root","");
if(!$sql)
{
echo "Connection Not Created";
}
$con = mysqli_select_db("gpuzzles_db");
if(!$sql)
{
echo "Database Not Connected";
}
$data[] = array('Employee','Markes');
$sql = "select book_name, author_name from gpuzzles";
$query = mysqli_query($db, $sql);
while($result = mysqli_fetch_array($query))
{
$data[] = array($result['book_name'],$result['author_name']);
 
}
echo json_encode($data);
 
?>