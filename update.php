<?php
include "config.php";
$id=$_GET["update"];

$result = $link->query("SELECT * FROM employee WHERE id=$id") or die(mysqli_error($link));

// $result =mysqli_query($link,$sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$address = $row['address'];
$salary = $row['salary'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary =$_POST["salary"];
    
$sql = ("UPDATE employee SET id=$id, name='$name', address='$address' ,salary=$salary WHERE id=$id");


$result =mysqli_query($link,$sql);
if ($result){
    header("Location:read.php");
} else{
    die(mysqli_error($link));
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <h2 class="mt-5">Update Page</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address;?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary;?>" placeholder="Salary">
                </div>
                <button name="update" class="btn btn-primary">Update</button>
                    <!-- <button class="mb-5 btn btn-secondary">Cancel</button> -->
            </form>
        </div>
    </div>
</body>
</html>