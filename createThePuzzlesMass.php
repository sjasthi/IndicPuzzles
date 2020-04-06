<?php $page_title = 'Puzzles > Create Puzzles from directory';
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    //resources to figure out how to do this
    //https://stackoverflow.com/questions/22041207/is-it-possible-to-upload-a-folder-using-html-form-php-script
    //https://jsfiddle.net/kevalpadia/vk6Ldzae/?utm_source=website&utm_medium=embed&utm_campaign=vk6Ldzae
    //https://dcblog.dev/creating-an-image-gallery-from-a-folder-of-images-automatically
     ?>
<form method="post" enctype="multipart/form-data" action="#">
<br>
        <h3 id="title">Create A Puzzle</h3> <br>
        
        <table>
            <!-- Puzzle name -->
            <tr>
                <td style="width:400px">Puzzle name will be the name of the image</td>
            </tr>
            <!-- Creator name -->
            <tr>
                <td style="width:100px">Creator:</td>
                <td><input type="text"  name="creatorName" maxlength="50" size="50" required title="Please enter the creator's name"></td>
            </tr>
            <!-- Author name -->
            <tr>
                <td style="width:100px">Author:</td>
                <td><input type="text"  name="authorName" maxlength="50" size="50" required title="Please enter the author's name"></td>
            </tr>
            <!-- Book name 
            <tr>
                <td style="width:100px">Book name:</td>
                <td><input type="select"  name="bookName" maxlength="50" size="50" required title="Please enter the name of the book this puzzle will be in."></td>
        -->
                <?php

$conn = new mysqli('localhost', 'root', '', 'gpuzzles_db') 
or die ('Cannot connect to db');

    $result = $conn->query("select book_name from books");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='bookd_name'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['book_name'];
                  $name = $row['book_name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
</tr>


            <!-- Puzzle Old way of uploading mass images

            <tr>
                <td style="width:100px">Puzzle:</td>
                <td><input type="file" name="puzzleFileToUpload[]" id="puzzleFileToUpload" maxlength="50" size="50" title="Enter the puzzle" multiple></td>
            </tr>-->
            <!-- Solution -->
            <tr>
                <td style="width:100px">Solution:</td>
                <td><input type="file" name="solutionFileToUpload" id="solutionFileToUpload" maxlength="50" size="50" title="Enter the solution to the puzzle"></td>
            </tr>
            <!-- Notes -->
            <tr>
                <td style="width:100px">Notes:</td>
                <td><input type="text"  name="notes" maxlength="50" size="50" required title="Please enter notes about the puzzle."></td>
            </tr>
        </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create Puzzle</button>
        </div>
        <br> <br>

    </form>
</div>
        Folder Name: <input type="text" name="foldername" /><br/>
        Choose Directoryy:  <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory=""><br/>
    <input class="button" type="submit" value="Upload" name="upload" />
</form>
<?php

    $mysqli = NEW MySQLi('localhost','root','','gpuzzles_db');
    $resultset = $mysqli->query("SELECT DISTINCT topic FROM topics ORDER BY topic ASC");   

   echo "HERE";
   $puzzleName = basename($_FILES["puzzleFileToUpload"]["name"]);
   $creatorName = mysqli_real_escape_string($db,$_POST['creatorName']);
   $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
   $bookName = mysqli_real_escape_string($db,$_POST['bookName']);
   $puzzleFileToUploadName = basename($_FILES["puzzleFileToUpload"]["name"]);
   $solutionFileToUploadName = basename($_FILES["solutionFileToUpload"]["name"]);
   $notes = mysqli_real_escape_string($db,$_POST['notes']);
if(isset($_POST['upload']))
{
        if($_POST['foldername']!="")
        {
                $foldername=$_POST['foldername'];
                if(!is_dir($foldername))
                        mkdir($foldername);
                foreach($_FILES['files']['name'] as $i=>$name)
                {
                        if(strlen($_FILES['files']['name'][$i]) > 1)
                        {
                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername.'/'.$name);
                        }
                }
                echo "Folder is uploaded successfully ..";
        }
        else
        echo "Folder uploaded Failed!!";
}
?>