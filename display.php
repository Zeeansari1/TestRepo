<?php
include"connect.php";
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Display</title>
</head>
<body>
<div class="container my-5">



    <a href="index.php">
        <button
                name="submit"
                class="btn btn-primary">Add User
        </button>
    </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">EmployeeId</th>
            <th scope="col">EmpName</th>
            <th scope="col">EmpAge</th>
            <th scope="col">EmpAddress</th>
            <th scope="col">EmpPosition</th>
            <th scope="col">Operations</th>

        </tr>
        </thead>

        <tbody>
        <?php
        $sql = "select * from`Employee`";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=  $row['empId'];
                $Name=  $row['empName'];
                $Age=  $row['empAge'];
                $Address=  $row['empAdd'];
                $Position=  $row['empPosition'];
                echo "
                <tr>
                    <td>$id</td>
                    <td>$Name</td> 
                    <td>$Age</td>
                    <td>$Address</td>
                    <td>$Position</td>
                    <td>
                    
                        <button ><a href='update.php?updateid=$id'>Update</a>
                         </button>
                         <button ><a href='delete.php?deleteid=$id'>Delete</a>
                         </button>                  
                    </td>
                </tr>
                ";
            }
        }
        ?>
        </tbody>

    </table>
</div>

</body>
</html>