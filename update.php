<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD Assignment</title>
</head>
<body>

<?php
include"connect.php";

$id = $_GET['updateid'];

$sql = "select * from `Employee` where empId=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=  $row['empId'];
$Name=  $row['empName'];
$Age=  $row['empAge'];
$Address=  $row['empAdd'];
$Position=  $row['empPosition'];

if (isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Address = $_POST['add'];
    $Position = $_POST['position'];

    $sql ="update `Employee` set empId=$id, empName='$Name', empAge='$Age', empAdd='$Address', empPosition='$Position' where empId=$id";

    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(sqli_error($con));
    }

}
?>
<div class="container my-5">
    <form method="post" >
        <div class="form-group">
            <label >Enter Name</label>
            <input type="text"
                   class="form-control"
                   name="name"
                   value = <?php echo $Name ?>
                   placeholder="Enter fullName"
                   autocomplete="off">
        </div>
        <div class="form-group">
            <label >Enter Age</label>
            <input type="text"
                   class="form-control"
                   name="age"
                   value = <?php echo $Age ?>
                   autocomplete="off">
        </div>
        <div class="form-group">
            <label >Enter Address</label>
            <input type="text"
                   class="form-control"
                   name="add"
                   value = <?php echo $Address ?>
                   autocomplete="off">
        </div>
        <div class="form-group">
            <label >Enter Position</label>
            <input type="text"
                   class="form-control"
                   name="position"
                   value = <?php echo $Position ?>
                   autocomplete="off">
        </div>

        <button type="submit"
                name="submit"
                class="btn btn-primary">Update
        </button>

    </form>
    <br/>
    <br/>
    <a href="display.php"><button
            name="submit"
            class="btn btn-primary"
        >To display page

        </button>
    </a>
</div>


</body>
</html>





