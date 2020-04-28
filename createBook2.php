<?php $page_title = 'Puzzles > Create A single Puzzle'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('nav.php'); 
    $page="puzzles_list.php";   
 //  verifyLogin($page); 

?>
<?php 
    $mysqli = NEW MySQLi('localhost','root','','quiz_master');
    $resultset = $mysqli->query("SELECT DISTINCT topic FROM topics ORDER BY topic ASC");   
?>
<link href="css/form.css" rel="stylesheet">
	<style>#title {text-align: center; color: darkgoldenrod;}</style>
	<div class="container">
		<!--Check the CeremonyCreated and if Failed, display the error message-->
		<?php
    //if(isset($_GET['createPuzzle'])){
       // if($_GET["createPuzzle"] == "fileRealFailed"){
      //      echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not real, Please Try Again!</h3>';
     //   }
    //}
    //if(isset($_GET['createPuzzle'])){
      //  if($_GET["createPuzzle"] == "answerFailed"){
      //      echo '<br><h3 align="center" class="bg-danger">FAILURE - Your answer was not one of the choices, Please Try Again!</h3>';
     //   }
    //}
    //if(isset($_GET['createPuzzle'])){
        //if($_GET["createPuzzle"] == "fileExistFailed"){
        //    echo '<br><h3 align="center" class="bg-danger">FAILURE - There is already a puzzle using that image, Please Try Again!</h3>';
      //  }
    //}
    ?>
		<form action="createTheBook2.php" method="POST" enctype="multipart/form-data">
			<br>
				<h1 id="title">Create A Book</h1> <br>

					<table>
						<!-- Puzzle name -->
					           <!-- Puzzle name -->
            <tr>
                <td style="width:100px">Book name:</td>
                <td><input type="text"  name="bookName" maxlength="50" size="50" required title="Please enter the name of the puzzle"></td>
            </tr>
						<!-- Creator name -->
			<tr>
			    <td style="width:100px">author Name:</td>
			    <td><input type="text"  name="authorName" maxlength="50" size="50" required title="Please enter the creator's name"></td>
			</tr>
			
            <!-- Puzzle -->
            <tr>
                <td style="width:100px">Book Cover:</td>
                <td><input type="file" name="bookFileToUpload" id="bookFileToUpload" maxlength="50" size="50" title="Enter the puzzle"></td>
            </tr>

		
	<input class="button" type="submit" value="Create Book" class="btn btn-primary btn-md align-items-center" name="upload" />
		</table>
				</form>
			</div>

							