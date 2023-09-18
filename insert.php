<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
    $employeename=$_POST['employee_name'];
    $designation=$_POST['designation'];
    $joining_date=$_POST['joining_date'];
    $addres=$_POST['addres'];
    $contact=$_POST['contact_number'];
    $email=$_POST['email'];

    $sql="INSERT INTO employee(employee_name,designation,joining_date,addres,contact_number,email)
     VALUES('$employeename','$designation','$joining_date','$addres','$contact','$email')";

   $data=mysqli_query($connection,$sql);
   if($data){
    echo"Inserted";
   }else{
    echo"error";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Register</h1>
    <form action="" method="POST">
        <table align="center">

        <tr>
            <td>Employee Name</td>
            <td><input type="text" name="employee_name" value=""></td>
        </tr>
        <tr>
            <td>designation</td>
            <td>
                <select name="designation">
                    <option value="">select</option>
                    <option value="software developer">software developer</option>
                    <option value="IT anayst">IT anayst</option>
                    <option value="test anayst">test anayst</option>
                    <option value="database administer">database administer</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>joining date</td>
            <td><input type="date" name="joining_date" value=""></td>

        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="addres"></td>   

        </tr>  
        <tr>
            <td>contact number</td>
            <td><input type="text" name="contact_number" value=""></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        </table>
    </form>
    
</body>
</html>