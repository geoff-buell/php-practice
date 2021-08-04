<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Practice</title>
</head>
<body>

  <?php
    echo "<h1>This page consists of nonsense.</h1>";
    echo "Hello World! <br>";

    // Single line comment

    # Another single line comment

    /* This is a 
    multiple-line comment */

    // Variables
    $variable = "Start variables with a $. <br>";
    echo $variable;

    // Data Types
    $string = "This is a string.";
    var_dump($string);
    echo "<br>";

    $integer = 5;
    var_dump($integer);
    echo "<br>";

    $float = 6.66;
    var_dump($float);
    echo "<br>";

    $boolean = true;
    var_dump($boolean);
    echo "<br>";

    $array = array(1, 2, 3, 4, 5);
    var_dump($array);
    echo "<br>";

    class CarObject {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }

    $myCar = new CarObject("blue-gray", "Impala");
    echo $myCar -> message();
    echo "<br>";

    $null = null;
    var_dump($null);
    echo "<br>";

    // Strings
    echo strlen("Returns the length of the string.");
    echo "<br>";

    echo str_word_count("Counts the number of words in a string.");
    echo "<br>";

    echo strrev("Reverses a string.");
    echo "<br>";

    echo strpos("Where in the world is", "world");
    echo "<br>";

    echo str_replace("you", "beautiful", "Hello you!");
    echo "<br>";

    // Numbers
    $num = 5;
    var_dump(is_int($num));
    echo "<br>";

    $num = 6.66;
    var_dump(is_float($num));
    echo "<br>";

    $num = 1.9e411;
    var_dump($num);
    var_dump(is_infinite($num));
    var_dump(is_finite($num));
    echo "<br>";

    $num = acos(8);
    var_dump($num);
    var_dump(is_nan($num));
    echo "<br>";

    $num = 5;
    var_dump(is_numeric($num));
    $num = "5";
    var_dump(is_numeric($num));
    $num = "5" + 5;
    var_dump(is_numeric($num));
    $num = "hello";
    var_dump(is_numeric($num));
    echo "<br>";

    // cast float into integer
    $num = 666.66;
    $int_cast = (int)$num;
    echo $int_cast;
    echo "<br>";
    // cast string into integer
    $num = "666.66";
    $int_cast = (int)$num;
    echo $int_cast;
    echo "<br>";

    // Math
    echo(pi());
    echo "<br>";

    echo(min(1, 2, 3, 4, 5));
    echo "<br>";

    echo(max(1, 2, 3, 4, 5));
    echo "<br>";

    echo(abs(-6.66));
    echo "<br>";

    echo(sqrt(144));
    echo "<br>";

    echo(round(0.6));
    echo "<br>";
    echo(round(0.4));
    echo "<br>";

    echo(rand());
    echo "<br>";

    echo(rand(1, 10));
    echo "<br>";

    // Constants
    define("GREETING", "Hello humanz.");
    echo GREETING;
    echo "<br>";

    define("colors", [
      "red",
      "orange",
      "yellow",
      "green",
      "blue",
      "violet"
    ]);
    echo colors[0];
    echo "<br>";

    define("SALUTATION", "Goodbye humanz.");
    function saySalution() {
      echo SALUTATION;
      echo "<br>";
    }
    saySalution();

    // Operators
    $x = 100;
    $y = 50;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";

    // Assignment operators
    $a = 5;
    $b = $a;
    echo $b;
    echo "<br>";
    $a += $b;
    echo $a;
    echo "<br>";
    /*
    a += b is the same as a = a + b
    a -= b is the same as a = a - b
    a *= b is the same as a = a * b
    a /= b is the same as a = a / b
    a %= b is the same as a = a % b
    */

    // Comparison operators
    $x = 1;
    $y = 2;
    var_dump($x == $y); #equal
    echo "<br>";
    var_dump($x === $y); #identical
    echo "<br>";
    var_dump($x != $y); #not equal
    echo "<br>";
    var_dump($x <> $y); #not equal
    echo "<br>";
    var_dump($x !== $y); #not identical
    echo "<br>";
    var_dump($x > $y); #greater than
    echo "<br>";
    var_dump($x < $y); #less than
    echo "<br>";
    var_dump($x >= $y); #greater than or equal to
    echo "<br>";
    var_dump($x <= $y); #less than or equal to
    echo "<br>";
    var_dump($x <=> $y); #spaceship
    echo "<br>";

    // Increment / Decrement operators
    $a = 3;
    echo $a;
    echo "<br>";
    echo ++$a; #pre-increment
    echo "<br>";
    $a = 3;
    echo $a++; #post-increment
    echo "<br>";
    echo $a;
    echo "<br>";
    $a = 3;
    echo $a;
    echo "<br>";
    echo --$a; #pre-decrement
    echo "<br>";
    $a = 3;
    echo $a--; #post-decrement
    echo "<br>";
    echo $a;
    echo "<br>";

    // Logical operators
    /*

    and
    or
    xor
    &&
    ||
    !

    */

    // String operators
    /*

    .   concatenation
    .=  concatenation assignment

    */

    // Others include:
    # Array Operators
    # Conditional assignment operators

    // If statement
    $num = 10;
    if ($num < 11) {
      echo "Have a great day!";
    }

    echo "<br>";

    // If...else statement
    $bool = false;
    if ($bool) {
      echo "I knew it was true";
    } else {
      echo "I knew it was false";
    }

    echo "<br>";

    // If...elseif...else statement
    $time = date("H");
    if ($time < "10") {
      echo "Have a good morning!";
    } elseif ($time < "20") {
      echo "Have a great day!";
    } else {
      echo "Have a good night!";
    }

    echo "<br>";

    // Switch statement
    $favColor = "green";

    switch ($favColor) {
      case "red":
        echo "Your favorite color is red!";
        break;
      case "blue":
        echo "Your favorite color is blue";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
      default:
        echo "Your favorite color is not RGB.";
    }

    echo "<br>";

    // Loops

    // while loop
    $x = 1;
    while ($x <= 5) {
      echo "The number is $x <br>";
      $x++;
    }

    // do...while loop
    $x = 6;
    do {
      echo "The number is $x <br>";
      $x++;
    } while ($x <= 5);

    // for loop
    for ($x = 1; $x <= 6; $x++) {
      echo "The number is $x <br>";
    }

    // foreeach loop
    $colors = array("red", "blue", "green");

    foreach ($colors as $value) {
      echo "$value <br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach ($age as $person => $value) {
      echo "$person is $value <br>";
    }

    // break
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        break;
      }
      echo "The number is $x <br>";
    }

    // continue
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        continue;
      }
      echo "The number is $x <br>";
    }

    // functions

    function writeMsg() {
      echo "Message in a bottle. <br>";
    }
    writeMsg();

    function familyName($fname) {
      echo "The family name is $fname <br>";
    }
    familyName("Buell");
    familyName("Wiederhold");

    function nameAge($name, $age) {
      echo "My name is $name. I am $age years old. <br>";
    }
    nameAge("Bob", "59");
    nameAge("Donna", "68");

    function sum($x, $y) {
      $z = $x + $y;
      return $z;
    }
    echo sum(5, 5) . "<br>";
    echo sum(100, 300) . "<br>";

    function addFive(&$value) {
      $value += 5;
    }
    $num = 2;
    addFive($num);
    echo "$num <br>";

  ?>

</body>
</html>