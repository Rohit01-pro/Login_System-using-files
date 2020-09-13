<?php require 'function.php';
       
if (isset($_POST['submit'])) {
  if (
    existsUserName($_POST['user-name']) ||
    existsUserPswd($_POST['user-pswd']) ||
    existsUserEmail($_POST['user-email'])
  )
    echo "<div class='alert danger'>Allready Registered.</div>";
  else {
    $userStr = $_POST['user-name'] . " + " . $_POST['user-pswd'] . " + " . $_POST['user-email'] . "\n";
    fwrite($myFile, $userStr);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <div class="box">
      <h1>Register</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <div class="form-group">
          <div class="input-box">
            <input type="text" name="user-name" required>
            <label>User Name</label>
          </div>
          <small>
            <?php if (isset($_POST['submit']) && strlen($_POST['user-name']) < 6)
              echo "Username must be greater 6 character."; ?>
          </small>
        </div>

        <div class="form-group">
          <div class="input-box">
            <input type="email" name="user-email" required>
            <label>Email</label>
          </div>
        </div>

        <div class="form-group">
          <div class="input-box">
            <input type="password" name="user-pswd" required>
            <label>Password</label>
          </div>
          <small>
            <?php if (isset($_POST['submit']) && strlen($_POST['user-pswd']) < 6)
              echo "Password must be greater 6 character."; ?>
          </small>
        </div>

        <div class="form-group">
          <div class="input-box">
            <input type="password" name="user-pswd2" required>
            <label>Confirm Password</label>
          </div>
          <small>
            <?php if (isset($_POST['submit']) && strcmp($_POST['user-pswd'], $_POST['user-pswd2']))
              echo "Password doesn't Match."; ?>
          </small>
        </div>

        <input class="btn log-btn" type="submit" name="submit" value="Register">
        <div class="footer">
          <p>All Ready a User? <a href="login.php">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>