<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','student_list');
$sql = "SELECT * FROM student_information WHERE id=$id";
$result = mysqli_query($con, $sql);
$employee = mysqli_fetch_assoc($result);
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
    			<h1>Student Information</h1>
                <hr>
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center">ID : </th>
                        <td class="text-center"><?php echo $employee['id']?></td>
                    </tr>
                    <tr>
                        <th class="text-center">Name : </th>
                        <td class="text-center"><?php echo $employee['name']?></td>
                    </tr>
                    <tr>
                        <th class="text-center">Email : </th>
                        <td class="text-center"><?php echo $employee['email']?></td>
                    </tr>
                    <tr>
                        <th class="text-center">Fees : </th>
                        <td class="text-center"><?php echo $employee['fees']?></td>
                    </tr>
                </table>
    			
    			<a href="index.php" style="float: right; text-underline-position: 2px;">Back to Home</a>
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