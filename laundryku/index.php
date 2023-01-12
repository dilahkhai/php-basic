<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY usnpelanggan DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="signup.css">
</head>
 
<body style="margin-left: 230px; margin-top:50px;">
 
    <table width='80%' border=3 style="border-color: #fcfcfcfcfc; background-color: #fff; border-radius:5px;">
 
    <tr style="border-style:none;">
        <th>Jenis Pakaian</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['jenispakaian']."</td>";   
        echo "<td><a href='delete.php?jenispakaian=$user_data[jenispakaian]'>Delete</a></td"; 
        echo "</tr>";        
    }
    ?>
    </table>
    <div style="margin-left:400px; margin-top:200px; position: absolute; ">
    <button><a href="add.php" style="text-decoration:none; ">Add New Order</a></button>
    <button><a href="order.php" style="text-decoration:none; ">Buy Now</a></button>
    <button><a href="laundryku.html" style="text-decoration:none; ">Back</a></button>
    </div>
</body>
</html>