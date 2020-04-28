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
                <?php
                    

                    $sql = "SELECT DISTINCT author_name FROM gpuzzles";

                    $result = mysqli_query($db, $sql);

                    $options = "";
                    while($row = mysqli_fetch_array($result))
                    {
                        $options = $options."<option>$row[author_name]</option>";
                    }
                ?>
                <?php
                    

                    $sql1 = "SELECT DISTINCT creator_name FROM gpuzzles";

                    $result1 = mysqli_query($db, $sql1);

                    $options1 = "";
                    while($row1 = mysqli_fetch_array($result1))
                    {
                        $options1 = $options1."<option>$row1[creator_name]</option>";
                    }
                ?>

                <form method="POST" action"compile_Puzzle.php" class="text-center">
                Author: <select name="a" required>  
                <option><?php echo $options;?></option>
                </select>
                <br><br>

                Puzzle Creator: <select name="c" required> 
                <option><?php echo $options1;?></option>
                </select>
                <br><br>

                Keywords: <input type="text" name="k" value="<?php if (isset($_POST['k'])) echo $_POST['k']; ?>" placeholder="Type here..." >
                <br><br>
                <input type="submit" name="submit" value="Search">
                <input type="submit" name="submit" target="_blank" value="Compile" formaction="compile_The_Puzzle.php" formtarget="_blank">
                </form> 

                <?php
                    if (isset($_POST['submit'])) 
                    {

                        $connection = new mysqli("localhost", "root", "", "gpuzzles_db");
                        
                        $k = $connection->real_escape_string($_POST['k']);
                        $a = $connection->real_escape_string($_POST['a']);
                        $c = $connection->real_escape_string($_POST['c']);
                                             
                        $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
                        WHERE author_name = '$a'
                        AND creator_name = '$c' 
                        AND keywords LIKE '%$k%'");

                        if ($sql->num_rows > 0) 
                        {

                            while ($data = $sql->fetch_array())
                            
                                echo '<img class="thumbnailSize" src="Images/puzzle_images/' .$data["puzzle_image"]. '" 
                                onerror=this.src="Images/index_images/ImageNotFound.png" alt="Images/puzzle_images/'.$data["puzzle_image"].'"> &nbsp;';  
                        } 
                        else
                        {
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
					