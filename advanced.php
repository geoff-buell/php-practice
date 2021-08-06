<!DOCTYPE html>
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

</body>
</html>