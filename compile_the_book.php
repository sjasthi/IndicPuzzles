
<?php $page_title = 'GPuzzles > Compile Book'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    $page="puzzles_list.php";    

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
        echo '<form action="compiled_book.php" method="POST">
    <br>
    <h3 id="title">Compile Book</h3><br>
     <br>

  <div>
    <label for="facilitator">Book Name</label>
    <input type="text" class="form-control" name="book_name" value="'.$row["book_name"].'"  maxlength="100" style=width:400px readonly><br>
  </div>
          
    <br>
    <p>Custom Header Message</P>
    <textarea id="contact_list" name="contact_list" required></textarea>
    <br><br>
    <p>Custom Footer Message</P>
    <textarea id="contact_list_1" name="contact_list_1" required></textarea>
    <br><br>
    <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center" 
    target="_blank" value="Compile" formaction="compiled_book.php" formtarget="_blank">Submit</button>
    <br> <br>
    
    </form>';

    }//end while
}//end if
else {
    echo "0 results";
}//end else

?>

</div>


