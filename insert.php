<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fees = $_POST['fees'];

$con = mysqli_connect('localhost','root','','student_list');
$sql = "INSERT INTO student_information VALUES(NULL,'$name','$email','$fees')";
$result = mysqli_query($con, $sql);
header('location: index.php');
}
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
    			<h1>Add New Student</h1>
                <hr>

                <form action="" method="POST">
                <table>
                    <tr>
                        <th class="text-center">Name : </th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th class="text-center">Email : </th>
                        <td><input type="email" name="email"></td>
                    </tr>
                
                    <tr>
                        <th class="text-center">Fees : </th>
                        <td><input type="text" name="fees"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary btn-sm" type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
                </form>
                <br>
                <br>
    			
    			<a href="index.php" style="float: right;">Back to Home</a>
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