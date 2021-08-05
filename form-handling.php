<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Handling</title>
  <style>
  .error {color: #FF0000;}
  </style>
</head>
<body>

  <!-- <form action="form-handling.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form> -->

  <!-- <form action="form-handling.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form> -->

  <?php 

    $nameErr = $emailErr = "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

  ?>

  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field</span></p>
  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit">
    <br><br>
  </form>
  
  Welcome: <?php echo $_POST["name"]; ?><br>
  Your email address is: <?php echo $_POST["email"]; ?><br>

</body>
</html>