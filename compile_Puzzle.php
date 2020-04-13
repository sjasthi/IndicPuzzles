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

<h2 id="title">Search Puzzles</h2><br>

<div class="container-fluid">

<body>
<form method="post" action="compile_Puzzle.php" class="text-center">

    <input type="text" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>"placeholder="Search Key Words ..." required>

			<input type="submit" name="submit" value="Search">

            <input type="submit" name="submit" target="_blank" value="Compile" formaction="compile_The_Puzzle.php" formtarget="_blank">

</form>

<?php
	if (isset($_POST['submit'])) {

        $connection = new mysqli("localhost", "root", "", "gpuzzles_db");
        
        $q = $connection->real_escape_string($_POST['search']);
        
        $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
        WHERE puzzle_name LIKE '%$q%' 
        OR author_name LIKE '%$q%' 
        OR creator_name LIKE '%$q%'");

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
