<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['jenispakaian'];
    $mobile=$_POST['hp'];
    $email=$_POST['address'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET jenispakaian='$name',hp='$email',address='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['jenispakaian'];
    $email = $user_data['hp'];
    $mobile = $user_data['address'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Jenis Pakaian</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>