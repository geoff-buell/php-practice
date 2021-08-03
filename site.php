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
  ?>

</body>
</html>