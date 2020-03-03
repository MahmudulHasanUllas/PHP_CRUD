<?php

$con = mysqli_connect('localhost','root','','student_list');
$sql = "SELECT * FROM student_information";
$result = mysqli_query($con, $sql);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>
    
    <div class="container">
    	<div class="row clearfix">
    		<div class="col-md-2"></div>
    		<div class="col-md-8">
    			<br>
    			<h1>Student List</h1>
    			<hr>

    			<table class="table table-bordered">
    				<thead>
    					<tr>
    						<th>SL</th>
    						<th>Name</th>
                <th>Email</th>
    						<th>Fees</th>
    						<th style="width: 200px;">Action</th>
    					</tr>
    				</thead>

    				<?php 
    				while ($row = mysqli_fetch_assoc($result)) {?>
    				<tr>
    					<td><?php echo $row['id']?></td>
    					<td><?php echo $row['name']?></td>
              <td><?php echo $row['email']?></td>
    					<td><?php echo $row['fees']?></td>
    					<td>
    						<a href="show_table.php?id=<?php echo $row['id']?>" class="btn btn-info btn-sm">View</a>
    						<a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-info btn-sm">Edit</a>
    						<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" onclick ="return confirm('Are you really want to delete?')">Delete</a>
    					</td>
    				</tr>

    			<?php } ?>

    			</table>
    			<a href="insert.php" class="btn btn-primary" style="float: right;">Add Student</a>
    		</div>
    	</div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>