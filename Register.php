<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h2>User Details</h2>
    <form action="connect.php" method="post">
    <label for="First Name">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="Last Name">Last Name:</label>
        <input type="text" id="lastname" name="last_name" required><br><br>
        <label for="City">City:</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="State">State:</label>
        <input type="text" id="state" name="state" required><br><br>
        <label for="User Name">User Name:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="Password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="Confirm Passward">Confirm Passward:</label>
        <input type="password" id="city" name="confirmpassward" required><br><br>
       
        <input type="submit" value="Submit">
    </form>
</body>
</html>
