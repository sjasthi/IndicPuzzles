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
		

      echo '<h2 id="title">Modify Book</h2><br>';
      echo '<form action="modifyTheBook.php" method="POST" enctype="multipart/form-data">
      <br>
      
      <h3>'.$row["id"].' by '.$row["book_name"].' </h3> <br>
      
      <div>
        <label for="id">Id</label>
        <input type="text" class="form-control" name="id" value="'.$row["id"].'"  maxlength="5" style=width:400px readonly><br>
      </div>
      
      <div>
        <label for="name">Book Name</label>
        <input type="select" class="form-control" name="bookName" value="'.$row["book_name"].'"  maxlength="100" style=width:400px required><br>
      </div>
          
      <div>
        <label for="level">Author Name</label>
        <input type="text" class="form-control" name="authorName" value="'.$row["author_name"].'"  maxlength="100" style=width:400px required><br>
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


