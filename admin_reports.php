<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";
  include 'db_configuration.php';
  include("./admin_nav.php");

  $query = "SELECT DISTINCT book_name, author_name, COUNT(*) FROM gpuzzles GROUP BY book_name";
  $query2 = "SELECT DISTINCT keywords, COUNT(*) FROM gpuzzles CROSS APPLY STRING_SPLIT(keywords, ',') GROUP BY keywords";
  $query3 = "SELECT DISTINCT author_name, COUNT(*) FROM gpuzzles GROUP BY author_name";
  $query5 = "SELECT DISTINCT creator_name, COUNT(*) FROM gpuzzles GROUP BY creator_name";
$GLOBALS['data'] = mysqli_query($db, $query);
$GLOBALS['kwdata'] = mysqli_query($db, $query2);
$GLOBALS['authordata'] = mysqli_query($db, $query3);
$GLOBALS['creatordata'] = mysqli_query($db, $query5);

 ?>
<style>
	#total {
	padding-top: 15px;
	font-size: 130%;
	text-align: right;
	}
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

<br/>
<br/>
<div class="container-fluid">
	<h1 id="title">Summary Tables</h1><br>
		<div id="customerTableView">
			<table class="display" id="ceremoniesTable" style="width:80%" align="center">
				<div class="table responsive">
					<h4>Book Summary</h4>
					<thead>
						<tr>
							<th>Book</th>
							<th>Author</th>
							<th style="text-align:right">Count</th>
						</tr>
					</thead>
					<tbody>
						<?php
                // fetch the data from $_GLOBALS
                if ($data->num_rows > 0) {
                    // output data of each row
					$qty = 0;
                    while($row = $data->fetch_assoc()) {
                        echo '<span><tr>
                                <td>'.$row["book_name"].'</td>
                                <td>'.$row["author_name"].'  </td>
                                <td style="text-align:right">'.$row["COUNT(*)"].'</span> </td>
                            </tr>';
							$qty += $row["COUNT(*)"];
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
					echo "
	<tfoot>
    <tr>
     <th></th><th></th><th id='total'>Total : $qty</th>
    </tr>
</tfoot>";
                ?>
					</tbody>
				</div>
			</table>
			<br><hr><br>
			<table class="display" id="ceremoniesTable" style="width:80%" align="center">
				<div class="table responsive">
					<h4>Keyword Summary</h4>
					<thead>
						<tr>
							<th>Keyword</th>
							<th style="text-align:right">Count</th>
						</tr>
					</thead>
					<tbody>
						<?php
                // fetch the data from $_GLOBALS
                if ($kwdata->num_rows > 0) {
                    // output data of each row
					$qty = 0;
                    while($row2 = $kwdata->fetch_assoc()) {
                        echo '<span><tr>
                                <td>'.$row2["keywords"].'</td>
                                <td style="text-align:right">'.$row2["COUNT(*)"].'</span> </td>
                            </tr>';
							$qty += $row2["COUNT(*)"];
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
					echo "
	<tfoot>
    <tr>
     <th></th><th id='total'>Total : $qty</th>
    </tr>
</tfoot>";
                ?>
					</tbody>
				</div>
			</table>
			<br><hr><br>
			<table class="display" id="ceremoniesTable" style="width:80%" align="center">
				<div class="table responsive">
					<h4>Author Summary</h4>
					<thead>
						<tr>
							<th>Author</th>
							<th style="text-align:right">Count</th>
						</tr>
					</thead>
					<tbody>
						<?php
                // fetch the data from $_GLOBALS
                if ($authordata->num_rows > 0) {
                    // output data of each row
					$qty = 0;
                    while($row3 = $authordata->fetch_assoc()) {
                        echo '<span><tr>
                                <td>'.$row3["author_name"].'</td>
                                <td style="text-align:right">'.$row3["COUNT(*)"].'</span> </td>
                            </tr>';
							$qty += $row3["COUNT(*)"];
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
					echo "
	<tfoot>
    <tr>
     <th></th><th id='total'>Total : $qty</th>
    </tr>
</tfoot>";
                ?>
					</tbody>
				</div>
			</table>
						<br><hr><br>
			<table class="display" id="ceremoniesTable" style="width:80%" align="center">
				<div class="table responsive">
					<h4>Creator Summary</h4>
					<thead>
						<tr>
							<th>Creator</th>
							<th style="text-align:right">Count</th>
						</tr>
					</thead>
					<tbody>
						<?php
                // fetch the data from $_GLOBALS
                if ($creatordata->num_rows > 0) {
                    // output data of each row
					$qty = 0;
                    while($row4 = $creatordata->fetch_assoc()) {
                        echo '<span><tr>
                                <td>'.$row4["creator_name"].'</td>
                                <td style="text-align:right">'.$row4["COUNT(*)"].'</span> </td>
                            </tr>';
							$qty += $row4["COUNT(*)"];
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
					echo "
	<tfoot>
    <tr>
     <th></th><th id='total'>Total : $qty</th>
    </tr>
</tfoot>";
                ?>
					</tbody>
				</div>
			</table>
							</div>
						</table>
						<hr>
					</div>
				</div>
<br>