<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
</head>

<body>
    <h3>Add new user</h3>
    <form action="adduser.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <label for="">Email</label>
        <input type="email" name="email"> <br>
        <label for="">Name</label>
        <input type="text" name="name"> <br>
        <label for="">Password</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Save">
    </form>

    <br>
    
    <h3>Update User</h3>
    <form action="updateuser.php" method="get">
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <input type="submit" value="Edit">
    </form>

    <br>
    
    <h3>Delete User</h3>
    <form action="deleteuser.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <input type="submit" value="Edit">
    </form>

    <br>

    <h3>Login to account</h3>
    <form action="login.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <label for="">Password</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Edit">
    </form>
</body>

</html>