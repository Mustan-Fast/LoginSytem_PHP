<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    // Check if passwords match
    if ($password === $confirm_password) {
        $sql = "INSERT INTO `go` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="Register.css" />
  </head>
  <body>
    <div class="register-container">
      <div class="register-logo">
        <img
          width="100px"
          src="https://media.istockphoto.com/id/1426988809/photo/security-password-login-online-concept-hands-typing-and-entering-username-and-password-of.jpg?b=1&s=612x612&w=0&k=20&c=GRrxNacgwlGcYl_w9Rs9oetyZVFRsrIjL9CAhNHL11o="
          alt="Register Logo"
        />
      </div>
      <form method="post" action="">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            required
          />
        </div>
        <button type="submit" class="register-btn">Register</button>
      </form>
    </div>
  </body>
</html>
