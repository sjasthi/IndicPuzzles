<?php


include_once 'db_configuration.php';

    // Initialize variables        
    echo "HERE";
    //$puzzleName = basename($_FILES["bookFileToUpload"]["name"]);
    //$creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
    $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
    $bookName = mysqli_real_escape_string($db,$_POST['bookName']);
    $bookFileToUploadName = basename($_FILES["bookFileToUpload"]["name"]);
    //$solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
    //$notes = mysqli_real_escape_string($db,$_POST['notes']);
    //$keywords = mysqli_real_escape_string($db,$_POST['keywords']);
   // $validate = true;    
    

        // ====================== Puzzle image =====================
        $target_dir = "Images/book_covers/";
        $target_file = $target_dir . basename($_FILES["bookFileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["bookFileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                header('location: createPuzzleSingle.php?createPuzzleSingle=fileRealFailed');
                $uploadOk = 0;
            }
        }

        
        // Allow certain file formats
 //       if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   //     && $imageFileType != "gif" ) {
     //       header('location: createPuzzleSingle.php?createPuzzleSingle=fileTypeFailed');
       //     $uploadOk = 0;
        //}


        // Check if file already exists
     //   if (file_exists($target_file1)) {
       //     header('location: createPuzzleSingle.php?createPuzzleSingle=fileExistFailed');
         //   $uploadOk = 0;
       // }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            header('location: createPuzzleSingle.php?createPuzzleSingle=fileTypeFailed');
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {            

        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["bookFileToUpload"]["tmp_name"], $target_file)) {
                
                $sql = "INSERT INTO books(book_name, author_name, image_name)
                VALUES ('$bookName','$authorName','$bookFileToUploadName')
                ";

                mysqli_query($db, $sql);
                header('location: books_list.php?createBook=Success');
                }
            }
       