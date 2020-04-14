<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";
  include 'db_configuration.php';

  include("./nav.php");

  $query = "SELECT DISTINCT book_name, author_name, COUNT(*) FROM gpuzzles GROUP BY book_name";
//  $query2 = "SELECT count(*) from gpuzzles";
  //$query5 = "SELECT puzzle_name, author_name, creator_name, book_name FROM gpuzzles WHERE puzzle_name LIKE '%" . $search_text . "%' OR creator_name LIKE '%" . $search_text . "%' OR author_name LIKE '%" . $search_text . "%' OR book_name LIKE '%" . $search_text . "%'";
$GLOBALS['data'] = mysqli_query($db, $query);
//$GLOBALS['countData'] = mysqli_query($db, $query2);
 ?>
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

<br><br>
		<div class="container-fluid">
			<h1 id="title">Summary Tables</h1><br>
				<div id="customerTableView">
					<table class="display" id="ceremoniesTable" style="width:100%">
						<div class="table responsive">
							<thead>
								<tr>
									<th>Book</th>
									<th>Author</th>
									<th>Count</th>
								</tr>
							</thead>
							<tbody>
								<?php
                // fetch the data from $_GLOBALS
                if ($data->num_rows > 0) {
                    // output data of each row
                    while($row = $data->fetch_assoc()) {
                        echo '<span><tr>
                                <td>'.$row["book_name"].'</td>
                                <td>'.$row["author_name"].'  </td>
                                <td>'.$row["COUNT(*)"].'</span> </td>
                            </tr>';
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
                ?>
							</tbody>
						</div>
					</table>
					<br><br>
						<form  method="post" action="reports.php?go"  id="searchform">
      <input  type="text" name="search_text" placeholder="Keyword...">
      <input  type="submit" name="submit" value="Search">
    </form>
	<table class="display" id="ceremoniesTable" style="width:100%">
						<div class="table responsive">
							<thead>
								<tr>
									<th>Puzzle</th>
									<th>Author</th>
									<th>Creator</th>
									<th>Book</th>
								</tr>
							</thead>
							<tbody>
					<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
	  $search_text = $_POST['search_text'];
  if(preg_match("/^[  a-zA-Z0-9]+/", $_POST['search_text'])){
      $query4 = "SELECT puzzle_name, author_name, creator_name, book_name FROM gpuzzles WHERE puzzle_name LIKE '%" . $search_text . "%' OR creator_name LIKE '%" . $search_text . "%' OR author_name LIKE '%" . $search_text . "%' OR book_name LIKE '%" . $search_text . "%'";
	  $GLOBALS['keywordData'] = mysqli_query($db, $query4);
  if ($keywordData->num_rows > 0) {
                    while($row=$keywordData->fetch_assoc()){
                            echo '<span><tr>
                                <td>'.$row["puzzle_name"].'</td>
                                <td>'.$row["author_name"].'</td>
                                <td>'.$row["creator_name"].'</td>
								<td>'.$row["book_name"].'</span> </td>
                            </tr>';
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
					$numrows=mysqli_num_rows($keywordData);
  }
  }
  echo  "<div>" .$numrows . " results found for <strong>" . $search_text . "</strong></div>";
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
?>
</tbody>
						</div>
					</table>
				</div>
			</div>
<?php include("./footer.php"); ?>