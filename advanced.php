<!DOCTYPE html>
<?php
  session_start();
?>
<?php
  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
  // modify by setting cookie again
  $cookie_name = "user";
  $cookie_value = "Alex Porter";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  // delete by setting cookie expiration date in the past
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Advanced</title>
</head>
<body>
  
  <?php
    // Date and time
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";

    echo "The time is " . date("h:i:sa") . "<br>";

    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa") . "<br>";

    // mktime(hour, minute, second, month, day, year)
    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

    // strtotime(time, now)
    $d = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
  
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    // outputs next 6 Saturdays
    $startDate = strtotime("Saturday");
    $endDate = strtotime("+6 weeks", $startDate);

    while ($startDate < $endDate) {
      echo date("M d", $startDate) . "<br>";
      $startDate = strtotime("+1 week", $startDate);
    }

    // outputs number of days until 4th of July
    $d1 = strtotime("July 04");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 . "days until 4th of July.";

  ?>

  <!-- Include and Require -->
  <!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->
  <!-- include will only produce a warning (E_WARNING) and the script will continue -->
  <h1>This is a header.</h1>
  <p>This is some text.</p>
  <p>This is more text.</p>
  <?php include 'footer.php';?>

  <?php 

    // reads file and closes file
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myFile, filesize("webdictionary.txt"));
    fclose($myFile);

    echo "<br>";
    // reads first line of file and close file
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myFile);
    fclose($myFile);

    echo "<br>";
    // Output one line until end-of-file and close file
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    while(!feof($myFile)) {
      echo fgets($myFile) . "<br>";
    }
    fclose($myFile);

    // Output one character until end-of-file
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    while(!feof($myFile)) {
      echo fgetc($myFile);
    }
    fclose($myFile);

    // Create new file and write file
    $myFile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myFile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myFile, $txt);
    fclose($myFile);

    // Open file, overwrite file, and close file
    $myFile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myFile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myFile, $txt);
    fclose($myFile);

    echo "<br>";
  ?>

  <?php
    if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
    }

    echo "<br>";
  ?>

  <?php
    if(count($_COOKIE) > 0) {
      echo "Cookies are enabled.";
    } else {
      echo "Cookies are disabled.";
    }
  ?>

  <?php
    $_SESSION["favColor"] = "green";
    $_SESSION["favAnimal"] = "cat";
    echo "The sessions variables are set.";

    // overwrite session variable
    $_SESSION["favColor"] = "blue";

    // remove session variables
    // session_unset();
    // destroy the session
    // session_destroy();
  ?>

  <?php
    $str = "<h1>Hello world!</h1>";
    echo $str . "<br>";
    $newStr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newStr . "<br>";

    $int = 100;
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
      echo "Integer is valid <br>"; 
    } else {
      echo "Integer is invalid <br>";
    }

    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
      echo "Integer is valid. <br>";
    } else {
      echo "Integer is invalid. <br>";
    }

    $ip = "127.0.0.1";
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
      echo "$ip is a valid ip address. <br>";
    } else {
      echo "$ip is an invalid ip address. <br>";
    }

    $email = "john.doe@example.com";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo "$email is valid email address. <br>";
    } else {
      echo "$email is an invalid address. <br>";
    }

    $url = "https://www.example.com";
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
      echo "$url is a valid url. <br>";
    } else {
      echo "$url is an invalid url. <br>";
    }

    $int = 122;
    $min = 1;
    $max = 100;
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
      echo "Variable value is not within the legal range. <br>";
    } else {
      echo "Variable value is within the legal range. <br>";
    }

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
      echo "$ip is a valid IPv6 address <br>";
    } else {
      echo "$ip is not a valid IPv6 address <br>";
    }

    $url = "https://www.website.com";
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
      echo "$url is a valid url with a query string. <br>";
    } else {
      echo "$url is not a valid url with a query string. <br>";
    } 

    $str = "<h1>Hello WorldÆØÅ!</h1>";
    echo "$str <br>";
    $newStr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo "$newStr <br>";

    function my_callback($item) {
      return strlen($item);
    }
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    echo "<br>";

    // same thing just as an anonymous function
    $otherStrings = ["kiwi", "peach", "watermelon", "grapes"];
    $stringLengths = array_map( function($item) { return strlen($item); }, $otherStrings);
    print_r($stringLengths);
    echo "<br>";

    function exclaim($str) {
      return $str . "! <br>";
    }

    function ask($str) {
      return $str . "? <br>";
    }

    function printFormatted($str, $format) {
      echo $format($str);
    }

    printFormatted("Hello World", "exclaim");
    printFormatted("Hello World", "ask");
  ?>

</body>
</html>