<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
  </head>
  <body>
    <h1>Login Form</h1>
    <form action="login.php" method="post">
      <label for="email">Email address:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" value="Login">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        
        $errors = [];
        if (empty($email)) {
          $errors[] = "Email address is required";
        }
        if (empty($password)) {
          $errors[] = "Password is required";
        }

        if (empty($errors)) {
         
          $firstName = "John"; 
          header("Location: welcome.php?firstName=" . urlencode($firstName));
          exit;
        } else {
          
          echo "<div>";
          foreach ($errors as $error) {
            echo "<p>$error</p>";
          }
          echo "</div>";
        }
      }
    ?>
  </body>
</html>