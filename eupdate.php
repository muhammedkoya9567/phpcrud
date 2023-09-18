<?php
include_once('connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE employee_id='$id'";
$data = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="employee_id" placeholder="Enter Id" value="<?php echo $row['employee_id']; ?>"><br><br>
        <input type="text" name="employee_name" placeholder="Employee Name" value="<?php echo $row['employee_name']; ?>"><br><br>
        <select name="designation">
            <option value="S/W Developer" <?php if ($row['designation'] === 'S/W Developer') echo 'selected'; ?>>S/W Developer</option>
            <option value="Test Analyst" <?php if ($row['designation'] === 'Test Analyst') echo 'selected'; ?>>Test Analyst</option>
            <option value="IT Analyst" <?php if ($row['designation'] === 'IT Analyst') echo 'selected'; ?>>IT Analyst</option>
            <option value="Database Administrator" <?php if ($row['designation'] === 'Database Administrator') echo 'selected'; ?>>Database Administrator</option>
        </select><br><br>

        <input type="date" name="joining_date" value="<?php echo $row['joining_date']; ?>"><br><br>

        <input type="text" name="addres" placeholder="Enter your address" value="<?php echo $row['addres']; ?>"><br><br>
        <input type="text" name="contact_number" placeholder="Enter Number" value="<?php echo $row['contact_number']; ?>"><br><br>
        <input type="text" name="email" placeholder="Enter Email Id" value="<?php echo $row['email']; ?>"><br><br>

        <input type="submit" name="update" value="update">
    </form>
    <?php
    if (isset($_POST['update'])) {
        $employee_id = $_POST['employee_id'];
        $ename = $_POST['employee_name'];
        $designation = $_POST['designation'];
        $jdate = $_POST['joining_date'];
        $addres = $_POST['addres'];
        $number = $_POST['contact_number'];
        $email = $_POST['email'];

        // Update query with corrected WHERE clause
        $sql2 = "UPDATE employee SET employee_name='$ename', designation='$designation', joining_date='$jdate', addres='$addres', contact_number='$number', email='$email' WHERE employee_id='$employee_id'";
        $result = mysqli_query($connection, $sql2);
        if ($result) {
            echo 'success';
            header("location: list.php");
            exit; // It's important to exit after redirection
        } else {
            die("could not update");
        }
   }
    ?>
</body>

</html>
