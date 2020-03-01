<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])) {

    // Initialize variables        
    echo "HERE";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $bookName = mysqli_real_escape_string($db, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($db, $_POST['authorName']);
    $bookFileToUploadName = basename($_FILES["bookFileToUpload"]["name"]);
    $oldBookImage = mysqli_real_escape_string($db, 'Images/puzzle_images/'.$_POST['oldBookImage']);
    $notes = mysqli_real_escape_string($db, $_POST['notes']);
    $validate = true;


    if ($validate) {

        if ($bookFileToUploadName != "") {
            $target_dir = "Images/puzzle_images/";
            $target_file = $target_dir . basename($_FILES["bookFileToUpload"]["name"]);
            $uploadOk = 1;

            if (isset($oldBookImage)){unlink($oldBookImage);}
            
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["bookFileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    header('location: modifyBook.php?modifyBook=fileRealFailed');
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                header('location: modifyBook.php?modifyBook=fileExistFailed');
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                header('location: modifyBook.php?modifyBook=fileTypeFailed');
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {

                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["bookFileToUpload"]["tmp_name"], $target_file)) {
                    echo $target_file;
                    $sql = "UPDATE books
                    SET book_name = '$bookName',
                        author_name = '$authorName',
                        image_name = '$bookFileToUploadName',
                        notes = '$notes'        
                    
                    WHERE id = '$id'";

                    mysqli_query($db, $sql);
                    header('location: books_list.php?bookUpdated=Success');
                }
            }
        } else {            

            $sql = "UPDATE books
                    SET book_name = '$bookName',
                        author_name = '$authorName',
                        notes = '$notes'     
                
                WHERE id = '$id'";

            mysqli_query($db, $sql);

            header('location: books_list.php?booksUpdated=Success');
        }
    } else {
        header('location: modifyBook.php?modifyBook=answerFailed&id=' . $id);
    }
}//end if
