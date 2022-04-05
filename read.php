<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Read Page</title>

</head>
<body>
<?php
include "config.php";
?>



<?php
$link = new mysqli($servername, $username, $password, $dbname) or die (mysqli_error($link));
$result =$link->query ("SELECT * FROM employee") or die(mysqli_error($link));
?>

<div class="container">
<div class="mx-5 my-5">
<a href="insert.php" class="btn btn-primary btn-block">Add Data</a>
</div>
<div class="row justify-content-center">
    <table class="table table-bordered table-striped ">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th >Action</th>
            </tr>
        </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tbody>
        <tr class="">
            <td class="text-success"><?php echo $row['id'];?></td>
            <td class="text-warning"><?php echo $row['name'];?></td>
            <td class="text-primary"><?php echo $row['address'];?></td>
            <td class="text-success"><?php echo $row['salary'];?></td>
            <td class="text-success"> 
                <div class="row">
                    <div class="col-md-6">
                       <a href="update.php?update=<?php echo $row['id']; ?>"  class="btn btn-primary">Update</a>
                    </div>
                    <div class="col-md-6">
                     <a href="delete.php?delete=<?php echo $row['id']; ?>"  class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </td>

        </tr>
    </tbody>
<?php endwhile; ?>


</table>
</div>
</div>
</div>
    
</body>
</html>