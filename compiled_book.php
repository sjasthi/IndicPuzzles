<?php

if (isset($_POST['book_name'])){

    $connection = new mysqli("localhost", "root", "", "gpuzzles_db");

    $bookName = mysqli_real_escape_string($connection, $_POST['book_name']);


    $sql = $connection->query("SELECT puzzle_image
    FROM gpuzzles
    INNER JOIN books
    ON gpuzzles.book_name = books.book_name
    WHERE gpuzzles.book_name = '$bookName'");

    echo htmlspecialchars($_POST['contact_list']);
    echo '<br><br>';


    if ($sql->num_rows > 0) {

        while ($data = $sql->fetch_array())
        
            echo '<img class="center" src="Images/puzzle_images/' .$data["puzzle_image"]. '" 
            onerror=this.src="Images/index_images/ImageNotFound.png" alt="Images/puzzle_images/'.$data["puzzle_image"].'"> <br><br>';  
    } 

    echo htmlspecialchars($_POST['contact_list']);
    echo '<br><br>';

}//end if
?>

