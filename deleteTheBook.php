<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);

    // Unlink puzzle image
    $puzzleFile = mysqli_real_escape_string($db, $_POST['author_name']);
    unlink($puzzleFile);

    // Unlink solution image
    $solutionFile = mysqli_real_escape_string($db, $_POST['book_name']);
    unlink($solutionFile);

    $sql = "DELETE FROM books
            WHERE id = '$id'";

    mysqli_query($db, $sql);
    header('location: books_list.php?bookDeleted=Success');
}//end if
?>

