<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])) {
     
    echo "HERE";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $bookName = mysqli_real_escape_string($db, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($db, $_POST['authorName']);
    $validate = true;


					$sql = "UPDATE books b, gpuzzles g SET b.book_name = '$bookName', g.book_name = '$bookName', b.author_name = '$authorName' WHERE b.id = '$id' AND b.book_name = g.book_name";

            mysqli_query($db, $sql);

            header('location: books_list.php?bookUpdated=Success');

}//end if
