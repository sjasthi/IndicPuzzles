<?php

require 'bin/functions.php';
require 'db_configuration.php';

$query = "SELECT * FROM gpuzzles";

$GLOBALS['data'] = mysqli_query($db, $query);

?>

<?php $page_title = 'Gpuzzles list'; ?>
<?php include('nav.php'); 

    $page="puzzles_list.php";
    //verifyLogin($page);
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
	-webkit-transform:scale(1.1);
	transform:scale(1.1);
	}
</style>

<!-- Page Content -->
<br><br>

		<h1 id="title">Search Puzzles</h1><br>

			<div class="container-fluid">

				<body>
					<form method="post" action="compile_Puzzle1.php" class="text-center">
                        <center><table> 
                        <tr>

                        <td>
                        <?php

                    $conn = new mysqli('localhost', 'root', '', 'gpuzzles_db') 
                    or die ('Cannot connect to db');

                        $result = $conn->query("select distinct author_name from gpuzzles");
                        
                        echo "<html>";
                        echo "<body>";
                        echo "Author: ";

                        echo "<select name='author_name'>";

                        while ($row = $result->fetch_assoc()) {

                                    unset($bookName, $name);
                                    $bookName = $row['author_name'];
                                    $name = $row['author_name']; 
                                    
                                    echo '<option value="author_name">'.$name.'</option>';
                                    
                        }
                    //check out modify the dress to get this fixed
                        echo "</select>";
                        echo "</body>";
                        echo "</html>";

                    echo'<input class="hidden" name="author_name" value ="'.$name.'"/>'
                    ?>
                    </td>
                            </tr>

                        <tr>

                        <td>
                        <?php

                            $conn = new mysqli('localhost', 'root', '', 'gpuzzles_db') 
                            or die ('Cannot connect to db');

                                $result = $conn->query("select distinct creator_name from gpuzzles");
                                
                                echo "<html>";
                                echo "<body>";
                                echo "Puzzle Creator: ";

                                echo "<select name='creator_name'>";

                                while ($row = $result->fetch_assoc()) {

                                            unset($bookName, $name);
                                            $bookName = $row['creator_name'];
                                            $name = $row['creator_name']; 
                                            
                                            echo '<option value="creator_name">'.$name.'</option>';
                                            
                                }
                            //check out modify the dress to get this fixed
                                echo "</select>";
                                echo "</body>";
                                echo "</html>";

                            echo'<input class="hidden" name="creator_name" value ="'.$name.'"/>'
                            ?>
                        </td>
                            </tr>
                        </table></center>
                                <br>
                        <input type="text" name="q" value="<?php if (isset($_POST['q'])) echo $_POST['q']; ?>" placeholder="Keywords ...">
                        <br><br>
						<input type="submit" name="submit" value="Search">

						<input type="submit" name="submit" target="_blank" value="Compile" formaction="compile_The_Puzzle.php" formtarget="_blank">
								</form>

								<?php
	if (isset($_POST['submit'])) {

        $connection = new mysqli("localhost", "root", "", "gpuzzles_db");
        
        $q = $connection->real_escape_string($_POST['author_name']);
        // $q1 = $connection->real_escape_string($_POST['creator_name']);
        $column = $connection->real_escape_string($_POST['author_name']);
        $column1 = $connection->real_escape_string($_POST['creator_name']);

		if ($column == "" || ($column != "author_name" && $column != "creator_name"))
        	$column = "author_name";
        
        $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
        WHERE puzzle_name LIKE '%$q%'
        OR author_name LIKE '%$q%'
        OR creator_name LIKE '%$q%'");

        // $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
        // WHERE author_name LIKE '%$q%' AND creator_name LIKE '%$q1%'");

        // $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
        // WHERE (author_name = '$q' AND creator_name = '$q1')");

		if ($sql->num_rows > 0) {

            while ($data = $sql->fetch_array())
            
                echo '<img class="thumbnailSize" src="Images/puzzle_images/' .$data["puzzle_image"]. '" 
                onerror=this.src="Images/index_images/ImageNotFound.png" alt="Images/puzzle_images/'.$data["puzzle_image"].'"> &nbsp;';  
      } 
      else{
      
        echo "No puzzles found! Please check your input or filter and try again.";
      }

  }
  
?>


							</div>

							<!-- /.container -->
							<!-- Footer -->
							<footer class="page-footer text-center">
								<p>cougars - Gpuzzles - ICS 499</p>
							</footer>
						</body>
					</html>
					