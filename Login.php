<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `go` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Login successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="login-logo">
        <img
          width="100px"
          src="https://media.istockphoto.com/id/1426988809/photo/security-password-login-online-concept-hands-typing-and-entering-username-and-password-of.jpg?b=1&s=612x612&w=0&k=20&c=GRrxNacgwlGcYl_w9Rs9oetyZVFRsrIjL9CAhNHL11o="
          alt="Login Logo"
        />
      </div>
      <form method="post" action="">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
  </body>
</html>
