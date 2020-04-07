<?php $page_title = 'Puzzles > Create Puzzles from directory';
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    //resources to figure out how to do this
    //https://stackoverflow.com/questions/22041207/is-it-possible-to-upload-a-folder-using-html-form-php-script
    //https://jsfiddle.net/kevalpadia/vk6Ldzae/?utm_source=website&utm_medium=embed&utm_campaign=vk6Ldzae
   
     ?>

<?php

    $mysqli = NEW MySQLi('localhost','root','','gpuzzles_db');
    $resultset = $mysqli->query("SELECT DISTINCT topic FROM topics ORDER BY topic ASC");   

   echo "HERE";
   $puzzleName = basename($_FILES["puzzleFileToUpload"]["name"]);
   $creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
   $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
   $bookName = mysqli_real_escape_string($db,$_POST['bookName']);
   $folderName = mysqli_real_escape_string($db,$_POST['bookName']);
  // $puzzleFileToUploadName = basename($_FILES["puzzleFileToUpload"]["name"]);
   //$solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
   $notes = mysqli_real_escape_string($db,$_POST['notes']);
if(isset($_POST['upload']))
{
        if($_POST['bookName']!="")
        {
                //set folder name to the selected book
              //  $foldername=$_POST['bookName'];
                //if directory doesnt exist
                if(!is_dir($foldername))
                //then make it
                        mkdir($foldername);
                //loop through all the files and upload them using the image name as the puzzle name
                foreach($_FILES['files']['name'] as $i=>$puzzleName)
                {
                    //insert into database
                    $sql = "INSERT INTO gpuzzles(puzzle_name, creator_name, author_name, book_name, puzzle_image, solution_image, notes)
                    VALUES ('$puzzleName','$creatorName','$authorName','$bookName','$puzzleFileToUploadName','$solutionFileToUploadName','$notes')
                    ";
    
                    mysqli_query($db, $sql);
                    header('location: puzzles_list.php?createPuzzle=Success');
                    

                        if(strlen($_FILES['files']['name'][$i]) > 1)
                        {
                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername.'/'.$puzzleName);
                        }
                }
                echo "Folder is uploaded successfully ..";
        }
        else
        echo "Folder uploaded Failed!!";
}
?>