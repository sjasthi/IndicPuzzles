<style>
    #title {
        text-align: center;
        color: darkgoldenrod;
    }
    thead input {
        width: 100%;
    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: auto;
        height: auto;
    }
    body {
        background-color: black;
    }
</style>
<?php
	if (isset($_POST['submit'])) {

        $connection = new mysqli("localhost", "root", "", "gpuzzles_db");
        
        $k = $connection->real_escape_string($_POST['k']);
        $a = $connection->real_escape_string($_POST['a']);
        $c = $connection->real_escape_string($_POST['c']);
                             
        $sql = $connection->query("SELECT puzzle_image FROM gpuzzles 
        WHERE author_name = '$a'
        AND creator_name = '$c' 
        AND keywords LIKE '%$k%'");

		if ($sql->num_rows > 0) {

            while ($data = $sql->fetch_array())
            
                echo '<img class="center" src="Images/puzzle_images/' .$data["puzzle_image"]. '" 
                onerror=this.src="Images/index_images/ImageNotFound.png" alt="Images/puzzle_images/'.$data["puzzle_image"].'"> <br><br>';  
      } 
      else{
        echo '<script language="javascript">';
        echo 'alert("No puzzles found! Please check your input or filter and try again.")';
        echo '</script>';
        echo "<script>window.close();</script>";
      }


  }
  
?>