<?php
include "config.php";

$name = $address = $salary = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

   $name = ($_POST["name"]);
   $address = ($_POST["address"]);
   $salary =($_POST["salary"]);
   
  
   // insert query
 $sql = ("INSERT INTO employee (name, address, salary) VALUES ('$name', '$address', '$salary' )") or die(mysqli_error($link));
 $result = mysqli_query($link,$sql);

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
    <title>Insert Record</title>
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
            <h2 class="mt-5">Insert Page</h2>
            <p>Please fill this form and submit to add employee record to the database.</p>
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Address">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary;?>" placeholder="Salary">
                </div>
                <button name="submit" class="btn btn-primary">Submit</button>
                <!-- <button class="mb-5 btn btn-secondary">Cancel</button> -->
            </form>
        </div>
    </div> 
</body>
</html>