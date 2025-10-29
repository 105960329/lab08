<?php include 'header.inc'; ?>
<form action="process.php" method="post">
  <h2>Login Form</h2>
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br>

  <!-- hidden field -->
  <input type="hidden" name="token" value="Y1234567">

  <input type="submit" value="Login">
</form>
<?php include 'footer.inc'; ?>
