<?php $page_title = 'Modify Book'; ?>
<?php $page_title = 'GPuzzles > Modify Book'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    $page="books_list.php";
   // verifyLogin($page);

?>
<div class="container">
<style>#title {text-align: center; color: darkgoldenrod;}</style>

<?php
include_once 'db_configuration.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM books
            WHERE id = '$id'";

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
}//end if

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      if(isset($_GET['modifyBook'])){
        if($_GET["modifyBook"] == "fileRealFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not real, Please Try Again!</h3>';
        }
      }
      if(isset($_GET['modifyBook'])){
        if($_GET["modifyBook"] == "answerFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your answer was not one of the choices, Please Try Again!</h3>';
        }
      }
      if(isset($_GET['modifyBook'])){
        if($_GET["modifyBook"] == "fileTypeFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not a valid image type (jpg,jpeg,png,gif), Please Try Again!</h3>';
        }
      }
      if(isset($_GET['modifyBook'])){
        if($_GET["modifyBook"] == "fileExistFailed"){
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image does not exist, Please Try Again!</h3>';
        }
      }

      echo '<h2 id="title">Modify Book</h2><br>';
      echo '<form action="modifyTheBook.php" method="POST" enctype="multipart/form-data">
      <br>
      
      <h3>'.$row["book_name"].' by '.$row["author_name"].' </h3> <br>
      
      <div>
        <label for="id">Id</label>
        <input type="text" class="form-control" name="id" value="'.$row["id"].'"  maxlength="5" style=width:400px readonly><br>
      </div>
      
      <div>
        <label for="name">Book Name</label>
        <input type="text" class="form-control" name="bookName" value="'.$row["book_name"].'"  maxlength="100" style=width:400px required><br>
      </div>
          
      <div>
        <label for="level">Author Name</label>
        <input type="text" class="form-control" name="authorName" value="'.$row["author_name"].'"  maxlength="100" style=width:400px required><br>
      </div>


      <div class="form-group col-md-4">
      <label for="cadence">New Book Image (Not Required)</label>
      <input type="file" name="bookFileToUpload" id="bookFileToUpload" maxlength="255">
      </div>
      <input type="hidden" class="form-control" name="oldBookImage" value="'.$row["book_image"].'" maxlength="255" required>


      <div>
        <label for="optional">Notes</label>
        <input type="text" class="form-control" name="notes" value="'.$row["notes"].'"  maxlength="100" style=width:400px required><br>
      </div>

      <br>
      <div class="text-left">
      <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Modify Book</button>
      </div>
      <br> 
      <br>
      
      </form>';
    
    }//end while
}//end if
else {
    echo "0 results";
}//end else

?>

</div>


