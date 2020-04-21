<?php


include_once 'db_configuration.php';

    // Initialize variables        
    echo "HERE";
    $puzzleName = basename($_FILES["puzzleFileToUpload"]["name"]);
    $creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
    $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
    $bookName = mysqli_real_escape_string($db,$_POST['bookName']);
    $puzzleFileToUploadName = basename($_FILES["puzzleFileToUpload"]["name"]);
    $solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
    $notes = mysqli_real_escape_string($db,$_POST['notes']);
    $keywords = mysqli_real_escape_string($db,$_POST['keywords']);
    $validate = true;    
    
    if($validate){
        // ====================== Puzzle image =====================
        $target_dir = "Images/puzzle_images/";
        $target_file = $target_dir . basename($_FILES["puzzleFileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["puzzleFileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                header('location: createPuzzle.php?createPuzzle=fileRealFailed');
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            header('location: createPuzzle.php?createPuzzle=fileExistFailed');
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            header('location: createPuzzle.php?createPuzzle=fileTypeFailed');
            $uploadOk = 0;
        }

        // ====================== Solution image =====================

        $target_dir = "Images/solution_images/";
        $target_file1 = $target_dir . basename($_FILES["solutionFileToUpload"]["name"]);        
        $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["solutionFileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                header('location: createPuzzle.php?createPuzzle=fileRealFailed');
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file1)) {
            header('location: createPuzzle.php?createPuzzle=fileExistFailed');
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            header('location: createPuzzle.php?createPuzzle=fileTypeFailed');
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {            

        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["puzzleFileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["solutionFileToUpload"]["tmp_name"], $target_file1)) {
                
                $sql = "INSERT INTO gpuzzles(puzzle_name, creator_name, author_name, book_name, puzzle_image, solution_image, notes)
                VALUES ('$puzzleName','$creatorName','$authorName','$bookName','$puzzleFileToUploadName','$solutionFileToUploadName','$notes', '$keywords')
                ";

                mysqli_query($db, $sql);
                header('location: puzzles_list.php?createPuzzle=Success');
                }
            }
        }else{
            header('location: createPuzzle.php?createPuzzle=answerFailed'); 
    }        