<?php
    $dbhost = 'localhost';
    $dbname ='test';
    $dbuser = 'root';
    $dbpass = "";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexphp</title>
</head>
<body>
   
    <h1><?php echo "Sample PHP APP"; ?></h1>
    <a href="add.html">Add new Data</a><br/><br/>
    <table>
        <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Created</td>
        </tr>
        <tr>
            <td>Juan dela Cruz</td>
            <td>25</td>
            <td>jdelacruz@gmail.com</td>
            <td>20/01/2021</td>
        </tr>
        <?php 
        while( $res = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['date_created']."</td>";
            echo "<tr>";
        }
        ?>
        
    </table>
</body>
</html>