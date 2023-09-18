<?php
include_once('connection.php');

$id=$_GET['id'];

$sql="DELETE FROM employee WHERE employee_id='$id'";

$data=mysqli_query($connection,$sql);

if($data){
    ?>

    <script type="text/javascript">
        alert("data deleted successfully")
        window.open('http://localhost/php/employee/list.php','_self');
    </script>
    <?php
}
    else{
        ?>
        <script type="text/javascript">
            alert("please try again");
        </script>
        <?php
    }
?>