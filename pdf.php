<?php

require 'bin/functions.php';
require 'db_configuration.php';

$query = "SELECT * FROM gpuzzles";

$GLOBALS['data'] = mysqli_query($db, $query);
// $GLOBALS['topic'] = mysqli_query($db, $query);
// $GLOBALS['puzzle'] = mysqli_query($db, $query);
// $GLOBALS['choice_1'] = mysqli_query($db, $query);
// $GLOBALS['choice_2'] = mysqli_query($db, $query);
// $GLOBALS['choice_3'] = mysqli_query($db, $query);
// $GLOBALS['choice_4'] = mysqli_query($db, $query);
// $GLOBALS['answer'] = mysqli_query($db, $query);
// $GLOBALS['puzzle_image'] = mysqli_query($db, $query);
?>

<?php $page_title = 'Gpuzzles list'; ?>
<?php include('nav.php'); 

    $page="puzzles_list.php";
    //verifyLogin($page);
?>

<style>
    #title {
        text-align: center;
        color: darkgoldenrod;
    }
    thead input {
        width: 100%;
    }
    .thumbnailSize{
        height: 100px;
        width: 100px;
        transition:transform 0.25s ease;
    }
    .thumbnailSize:hover {
        -webkit-transform:scale(1.1);
        transform:scale(1.1);
    }
</style>

<!-- Page Content -->
<br><br>
<div class="container-fluid">

<body>
<center><form method="post" action="pdf.php">
    <input type="text" name="q" placeholder="Search Key Words ..." required>
			<select name="column">
				<option value="">Select Filter</option>
				<option value="creator_name">Creator Name</option>
				<option value="author_name">Author Name</option>
			</select>
			<input type="submit" name="submit" value="Search">
 
      <!-- <button class="btn btn-success" onclick=" window.open('test.txt')"> Compile</button> -->
		</form></center>
        <div id="customerTableView">
        <table class="display" id="ceremoniesTable" style="width:100%">
            <div class="table responsive">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
                <tbody>
<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "", "gpuzzles_db");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "creator_name" && $column != "author_name"))
			$column = "creator_name";

		$sql = $connection->query("SELECT puzzle_image FROM gpuzzles WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
                echo '<tr>
                <td><img class="thumbnailSize" src="Images/puzzle_images/' .$data["puzzle_image"]. '" onerror=this.src="Images/index_images/ImageNotFound.png" alt="Images/puzzle_images/'.$data["puzzle_image"].'"></td>
                      </tr>';  
      } else
      echo "No puzzles found! Please check your input or filter and try again.";
  }
  
?>                </tbody>
            </div>
        </table>
    </div>
</div>

<!-- /.container -->
<!-- Footer -->
<footer class="page-footer text-center">
    <p>cougars - Gpuzzles - ICS 499</p>
</footer>

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<!--Data Table-->
<script type="text/javascript" charset="utf8"
        src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready( function () {
        
        $('#ceremoniesTable').DataTable( {
            dom: 'lfrtBip',
            buttons: [
                {
                    extend:'pdfHtml5',
                    orientation: 'landscape'
                }

            ] }
        );

        $('#ceremoniesTable thead tr').clone(true).appendTo( '#ceremoniesTable thead' );
        $('#ceremoniesTable thead tr:eq(1) th').each( function (i) {

    
            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    
        var table = $('#ceremoniesTable').DataTable( {
            orderCellsTop: true,
            fixedHeader: true,
            retrieve: true
        } );
        
    } );

</script>
</body>
</html>
