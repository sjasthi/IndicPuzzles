<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  $query = "SELECT author_name, book_name from gpuzzles";
  $query2 = "SELECT count(puzzle_images) from gpuzzles";

$GLOBALS['data'] = mysqli_query($db, $query);
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
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Summary</h3>
<!-- Page Content -->
<br><br>
<div class="container-fluid">
<?php
        if(isset($_GET['createPuzzle'])){
            if($_GET["createPuzzle"] == "Success"){
                echo '<br><h3>Success! Your puzzle has been added!</h3>';
            }
        }

        if(isset($_GET['puzzleUpdated'])){
            if($_GET["puzzleUpdated"] == "Success"){
                echo '<br><h3>Success! Your puzzle has been modified!</h3>';
            }
        }

        if(isset($_GET['puzzleDeleted'])){
            if($_GET["puzzleDeleted"] == "Success"){
                echo '<br><h3>Success! Your puzzle has been deleted!</h3>';
            }
        }

        if(isset($_GET['createTopic'])){
            if($_GET["createTopic"] == "Success"){
                echo '<br><h3>Success! Your topic has been added!</h3>';
            }
        }
    ?>
   
   
    <h2 id="title">Puzzle List</h2><br>
    
    <div id="customerTableView">
        <button><a class="btn btn-sm" href="createPuzzle.php">Create a Puzzle</a></button>
       
        <table class="display" id="ceremoniesTable" style="width:100%">
            <div class="table responsive">
                <thead>
                <?php 
                echo '<tr>Total count</tr>';
                echo mysqli_query($db, $query2);


                ?>
                <tr>

                    <th>Author</th>
                    <th>Book</th>
 
                </tr>
                </thead>
                <tbody>
                <?php
                // fetch the data from $_GLOBALS
                if ($data->num_rows > 0) {
                    // output data of each row
                    while($row = $data->fetch_assoc()) {
                        echo '<tr>



                                <td>'.$row["author_name"].'</td>
                                <td>'.$row["book_name"].' </span> </td>
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
    </div>
</div>
    </div>
</div>

<?php include("./footer.php"); ?>
