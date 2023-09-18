<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <center>
    <?php
    include_once('connection.php'); 
    
    $sql = "SELECT * FROM employee";

    $data = mysqli_query($connection,$sql);

    $total = mysqli_num_rows($data);

    if($total){
        ?>
        <table border="2">
            <tr>
                <th>
                    employee_id
                </th>
                <th>
                    employee_name
                </th>
                <th>
                    designation
                </th>
                <th>
                    joining_date
                </th>
                <th>
                    address
                </th>
                <th>
                    contact_number
                </th>
                <th>
                    email
                </th>
                <th colspan="2">options

                </th>
               
            </tr>
            <?php
            while($result = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td>
                        <?php echo $result['employee_id'];?>
                    </td>
                    <td>
                        <?php echo $result['employee_name'];?>
                    </td>
                    <td>
                        <?php echo $result['designation'];?>
                    </td>
                    <td>
                        <?php echo $result['joining_date'];?>
                    </td>
                    <td>
                        <?php echo $result['addres'];?>
                    </td>
                    <td>
                        <?php echo $result['contact_number'];?>
                    </td>
                    <td>
                        <?php echo $result['email'];?>
                    </td>
                    <td>
                        <a href="eupdate.php?id=<?php echo $result['employee_id']; ?>">EDIT</a>
                        
                    </td>
                    <td>
                    <a href="edelete.php?id=<?php echo $result['employee_id']; ?>">DELETE</a>
                    </td>
                    
                

                </tr>
                <?php
            }
    
    }else{
        echo "no records found";
    }
    ?>
    </center>

</body>
</html>