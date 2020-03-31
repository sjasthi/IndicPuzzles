<!-- Source : https://www.discussdesk.com/google-charts-or-graph-with-php-mysql-and-ajax.htm#Bar_Chart
-->
<?php
 
include('db_configuration.php');
$sql = "select book_name, author_name from gpuzzles";
$query = mysqli_query($db, $sql);
while($result = mysqli_fetch_array($query))
{
  $rows[]=array("c"=>array("0"=>array("v"=>$result['book_name'],"f"=>NULL),"1"=>array("v"=>$result['author_name'],"f" =>NULL)));
 
}
 
echo $format = '{
"cols":
[
{"id":"","label":"book_name","pattern":"","type":"string"},
{"id":"","label":"author_name","pattern":"","type":"string"}
],
"rows":'.json_encode($rows).'}';
 
 
?>