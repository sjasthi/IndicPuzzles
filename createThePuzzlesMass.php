<?php $page_title = 'Puzzles > Create Puzzles from directory';
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    //resources to figure out how to do this
    //https://stackoverflow.com/questions/22041207/is-it-possible-to-upload-a-folder-using-html-form-php-script

   
     ?>

<?php

    $mysqli = NEW MySQLi('localhost','root','','gpuzzles_db');
    $resultset = $mysqli->query("SELECT DISTINCT topic FROM topics ORDER BY topic ASC");   

   echo "HERE";
   $puzzleName = basename($_FILES["puzzleFileToUpload"]["name"]);
   $creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
   $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
   $bookName = mysqli_real_escape_string($db,$_POST['book_name']);
   $folderName = mysqli_real_escape_string($db,$_POST['Images/puzzle_images/']);
   //fix this
   $target_dir = "Images/puzzle_images/";
   $target_file = $target_dir.$puzzleName;
  $puzzleFileToUploadName = basename($_FILES["puzzleFileToUpload"]["name"]);
   //$solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);

   $notes = mysqli_real_escape_string($db,$_POST['notes']);
if(isset($_POST['upload']))
{
        if($_POST['book_name']!="")
        {
                //set folder name to the selected book
              //  $foldername=$_POST['bookName'];
              //this didnt work

                //if directory doesnt exist
                if(!is_dir($target_file))
                //then make it
                        mkdir($target_file);
                //loop through all the files and upload them using the image name as the puzzle name
                foreach($_FILES['files']['name'] as $i=>$puzzleName)
                {
                    //insert into database
                    //not sure if i should have target_dir added to the puzzleFileToUpload or not? I figure it would need the
                    //directory when querying to add to the list, either way neither worked
                    //only seems to create new directories when in the root directory
                    $sql = "INSERT INTO gpuzzles(puzzle_name, creator_name, author_name, book_name, puzzle_image, solution_image, notes)
                    VALUES ('$puzzleName','$creatorName','$authorName','$bookName','$target_dir.$puzzleFileToUploadName','$solutionFileToUploadName','$notes')
                    ";
    
                    mysqli_query($db, $sql);
                    header('location: puzzles_list.php?createPuzzle=Success');
                    

                        if(strlen($_FILES['files']['name'][$i]) > 1)
                        {
                                //this should be creating the folder (as book name)
                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file);
                        }
                }
                echo "Folder is uploaded successfully ..";
        }
        else
        echo "Folder uploaded Failed!!";
}
?>