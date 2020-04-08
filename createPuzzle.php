<?php $page_title = 'Puzzles > Create Puzzles'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    $page="puzzles_list.php";   
 //  verifyLogin($page); 

?>
<?php 
    $mysqli = NEW MySQLi('localhost','root','','quiz_master');
    $resultset = $mysqli->query("SELECT DISTINCT topic FROM topics ORDER BY topic ASC");   
?>
<link href="css/form.css" rel="stylesheet">
<style>#title {text-align: center; color: darkgoldenrod;}</style>
<div class="container">
    <!--Check the CeremonyCreated and if Failed, display the error message-->
    <?php
    if(isset($_GET['createPuzzle'])){
        if($_GET["createPuzzle"] == "fileRealFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not real, Please Try Again!</h3>';
        }
    }
    if(isset($_GET['createPuzzle'])){
        if($_GET["createPuzzle"] == "answerFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your answer was not one of the choices, Please Try Again!</h3>';
        }
    }
   // if(isset($_GET['createPuzzle'])){
     //   if($_GET["createPuzzle"] == "fileTypeFailed"){
       //     echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not a valid image type (jpg,jpeg,png,gif), Please Try Again!</h3>';
       // }
   // }
    if(isset($_GET['createPuzzle'])){
        if($_GET["createPuzzle"] == "fileExistFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - There is already a puzzle using that image, Please Try Again!</h3>';
        }
    }
  
    ?>
    <form action="createThePuzzlesMass.php" method="POST" enctype="multipart/form-data">
        <br>
        <h3 id="title">Create A Puzzle</h3> <br>
        
        <table>
            <!-- Puzzle name -->
            <tr>
                <td style="width:400px">Puzzle name will be the name of the image</td>
            </tr>
            <!-- Creator name -->
            <tr>
                <td style="width:100px">Creator:</td>
                <td><input type="text"  name="creatorName" maxlength="50" size="50" required title="Please enter the creator's name"></td>
            </tr>
            <!-- Author name -->
            <tr>
                <td style="width:100px">Author:</td>
                <td><input type="text"  name="authorName" maxlength="50" size="50" required title="Please enter the author's name"></td>
            </tr>
 
            <!-- Notes -->
            <tr>
                <td style="width:100px">Notes:</td>
                <td><input type="text"  name="notes" maxlength="50" size="50" required title="Please enter notes about the puzzle."></td>
            </tr>

    

            <tr>
            <!-- folder upload -->
            Choose Directory:  <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory=""><br/>
  
            </tr>
        <?php

$conn = new mysqli('localhost', 'root', '', 'gpuzzles_db') 
or die ('Cannot connect to db');

    $result = $conn->query("select book_name from books");
    
    echo "<html>";
    echo "<body>";
    echo "Folder Name/Book name:";
    echo "<select name='book_name'>";

    while ($row = $result->fetch_assoc()) {

                  unset($bookName, $name);
                  $bookName = $row['book_name'];
                  $name = $row['book_name']; 
                  echo '<option value="bookName">'.$name.'</option>';
                 
    }
//check out modify the dress to get this fixed
    echo "</select>";
    echo "</body>";
    echo "</html>";
    $name = 'book_name';
?>
<!-- put the line below in for testing purposes -->
<input class="hidden" name="bookName" value ="bookName"/>
  <input class="button" type="submit" value="Create Puzzles" class="btn btn-primary btn-md align-items-center" name="upload" />
  </table>
    </form>
</div>

