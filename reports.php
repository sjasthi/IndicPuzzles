<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  //this one shows the count , but only one book
<<<<<<< HEAD
  $query = "SELECT DISTINCT book_name, author_name, COUNT(*) FROM gpuzzles GROUP BY book_name";
=======
  //$query = "SELECT DISTINCT  book_name, author_name, COUNT(*) FROM gpuzzles";
>>>>>>> febc5685ac6eb018ea71817973b15820ae4d2715
  //this one shows both books but no count
  $query = "SELECT DISTINCT book_name, author_name, COUNT(*) FROM gpuzzles GROUP BY book_name
  ";
  $query2 = "SELECT count(*) from gpuzzles";

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
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Book, Author, and Count Summary</h3>
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
   
   
    <h2 id="title">Puzzle Summary Table</h2><br>
    
    <div id="customerTableView">
    <button><a class="btn btn-sm" href="createBook.php">Create a Book</a></button>
        <button><a class="btn btn-sm" href="createPuzzle.php">Create a Puzzle</a></button>
        <button><a class="btn btn-sm" href="puzzles_list.php">Puzzle List</a></button>
        <table class="display" id="ceremoniesTable" style="width:100%">
            <div class="table responsive">
                <thead>
                <?php 
               // echo '<tr>Total count</tr>';
                // $count = mysqli_query($db, $query2);


                ?>
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
                        echo '<tr>



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
    </div>
</div>
    </div>
</div>

<?php include("./footer.php"); ?>
