<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);

    // Unlink puzzle image
    $authorName = mysqli_real_escape_string($db, $_POST['author_name']);
    unlink($puzzleFile);

    // Unlink solution image
    $bookName = mysqli_real_escape_string($db, $_POST['bookName']);
    unlink($solutionFile);

    $sql = "DELETE books, gpuzzles FROM books INNER JOIN gpuzzles ON (books.book_name = gpuzzles.book_name)
            WHERE books.book_name = '$bookName'";

    mysqli_query($db, $sql);
    header('location: books_list.php?bookDeleted=Success');
}//end if
?>

