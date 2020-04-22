<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])) {

    // Initialize variables        
    echo "HERE";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $puzzleName = mysqli_real_escape_string($db, $_POST['puzzleName']);
    $creatorName = mysqli_real_escape_string($db, $_POST['creatorName']);
    $authorName = mysqli_real_escape_string($db, $_POST['authorName']);
    $bookName = mysqli_real_escape_string($db, $_POST['bookName']);
    $puzzleFileToUploadName = basename($_FILES["puzzleFileToUpload"]["name"]);
    $oldPuzzleImage = mysqli_real_escape_string($db, 'Images/puzzle_images/'.$_POST['oldPuzzleimage']);
    $oldSolutionImage = mysqli_real_escape_string($db, $_POST['oldSolutionimage']);
    $solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
    $notes = mysqli_real_escape_string($db, $_POST['notes']);
    $keywords = mysqli_real_escape_string($db, $_POST['keywords']);
    $validate = true;


    if ($validate) {

        if ($puzzleFileToUploadName != "") {
            $target_dir = "Images/puzzle_images/";
            $target_file = $target_dir . basename($_FILES["puzzleFileToUpload"]["name"]);
            $uploadOk = 1;

            if (isset($oldPuzzleImage)){unlink($oldPuzzleImage);}
            
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["puzzleFileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    header('location: modifyPuzzle.php?modifyPuzzle=fileRealFailed');
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                header('location: modifyPuzzle.php?modifyPuzzle=fileExistFailed');
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                header('location: modifyPuzzle.php?modifyPuzzle=fileTypeFailed');
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {

                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["puzzleFileToUpload"]["tmp_name"], $target_file)) {
                    echo $target_file;
                    $sql = "UPDATE gpuzzles
                    SET puzzle_name = '$puzzleName',
                        creator_name = '$creatorName',
                        author_name = '$authorName',
                        book_name = '$bookName',
                        puzzle_image = '$puzzleFileToUploadName',
                        solution_image = '$solutionFileToUploadName',
                        notes = '$notes',
                        keywords = '$keywords'
                    WHERE id = '$id'";

                    mysqli_query($db, $sql);
                    header('location: puzzles_list.php?puzzleUpdated=Success');
                }
            }
        } else {            

            $sql = "UPDATE gpuzzles
                    SET puzzle_name = '$puzzleName',
                        creator_name = '$creatorName',
                        author_name = '$authorName',
                        book_name = '$bookName',
                        notes = '$notes',
                        keywords = '$keywords'
                WHERE id = '$id'";

            mysqli_query($db, $sql);

            header('location: puzzles_list.php?puzzleUpdated=Success');
        }
    } else {
        header('location: modifyPuzzle.php?modifyPuzzle=answerFailed&id=' . $id);
    }
}//end if
