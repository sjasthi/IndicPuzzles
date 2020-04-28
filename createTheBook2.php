<?php

include_once 'db_configuration.php';

    // Initialize variables        
    echo "HERE";
    //$puzzleName = mysqli_real_escape_string($db,$_POST['puzzleName']);
    //$creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
    $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
    $bookName = mysqli_real_escape_string($db,$_POST['bookName']);
    //Will finish the image uploading when we figure out mass uploads
    $bookFileToUploadName = basename($_FILES["bookFileToUpload"]["name"]);
    //$solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
    //$notes = mysqli_real_escape_string($db,$_POST['notes']);
   // $validate = true;    
    
    //if($validate){
        // ====================== book image =====================
        //TODO; unsure if we need to add book images?
        $target_dir = "Images/book_covers/";
        $target_file = $target_dir . basename($_FILES["bookFileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
        // Check if image file is a actual image or fake image
        //if(isset($_POST["submit"])) {
         //   $check = getimagesize($_FILES["puzzleFileToUpload"]["tmp_name"]);
          //  if($check !== false) {
           //     $uploadOk = 1;
           // } else {
            //    header('location: createPuzzle.php?createPuzzle=fileRealFailed');
             //   $uploadOk = 0;
           // }
        //}
        // Check if file already exists
      //  if (file_exists($target_file)) {
        //    header('location: createPuzzle.php?createPuzzle=fileExistFailed');
          //  $uploadOk = 0;
       // }
        
        // Allow certain file formats
        //if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //&& $imageFileType != "gif" ) {
         //   header('location: createPuzzle.php?createPuzzle=fileTypeFailed');
          //  $uploadOk = 0;
      //  }

        // ====================== Solution image =====================

      //  $target_dir = "Images/solution_images/";
       // $target_file1 = $target_dir . basename($_FILES["solutionFileToUpload"]["name"]);        
        //$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        //if(isset($_POST["submit"])) {
          //  $check = getimagesize($_FILES["solutionFileToUpload"]["tmp_name"]);
            //if($check !== false) {
              //  $uploadOk = 1;
            //} else {
             //   header('location: createPuzzle.php?createPuzzle=fileRealFailed');
              //  $uploadOk = 0;
            //}
       // }
        // Check if file already exists
        //if (file_exists($target_file1)) {
          //  header('location: createPuzzle.php?createPuzzle=fileExistFailed');
            //$uploadOk = 0;
       // }
        
        // Allow certain file formats
        //if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //&& $imageFileType != "gif" ) {
          //  header('location: createPuzzle.php?createPuzzle=fileTypeFailed');
            //$uploadOk = 0;
        //}

        // Check if $uploadOk is set to 0 by an error
        //if ($uploadOk == 0) {            

        // if everything is ok, try to upload file
        //} else {
                move_uploaded_file($_FILES["bookFileToUpload"]["tmp_name"], $target_file);
                $sql = "INSERT INTO books( author_name, book_name, book_cover)
                VALUES ('$authorName','$bookName', '$bookFileToUploadName)
                ";

                mysqli_query($db, $sql);
                header('location: books_list.php?createBook=Success');
          //      }
          //  }
        //}else{
           // header('location: createPuzzle.php?createPuzzle=answerFailed'); 
        //}       