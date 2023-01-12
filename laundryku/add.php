<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" href="signup.css">
</head>
 
<body>
<div 
style="width:180px; 
height:250px; 
background-color: #fcfcfcfc;
margin-top:200px;
margin-left:650px;
border-radius:20px;
padding-left:10px;
padding-right:10px;
box-shadow: 0px 0px 3px 3px  rgba(0,0,0,0.2);
">
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table style="width='25%'; border='0'; text-align:center; ">
            <tr> 
                <td>Username</td>
            </tr>
            <td><input type="text" name="fullname"></td>
            <tr> 
                <td>Clothes Type</td> <br>
            </tr>
            <td><input type="text" name="name"></td>
            <tr> 
            <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $usn = $_POST['fullname'];
        $name = $_POST['name'];
       
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(usnpelanggan,jenispakaian) VALUES('$usn','$name')");

        echo "User added successfully.";
        
   }
    ?>
    <a href='index.php' style="margin-left:50px; text-decoration:none;">View Order</a>
    </div>
</body>
</html>