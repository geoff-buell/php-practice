<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>
  
  <?php
    class Fruit {
      // properties
      public $name;
      public $color;

      // methods
      function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
      function set_color($color) {
        $this->color = $color;
      }
      function get_color() {
        return $this->color;
      }
    }

    $apple = new Fruit();
    $apple->set_name('Apple');
    $apple->set_color('Red');

    echo "Name: " . $apple->get_name() . "<br>";
    echo "Color: " . $apple->get_color() . "<br>";

    var_dump($apple instanceof Fruit);
    echo "<br>";

    $banana = new Fruit();
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo "Name: " . $banana->get_name() . "<br>";
    echo "Color: " . $banana->get_color() . "<br>";

    var_dump($banana instanceof Fruit);
    echo "<br>";
    
  ?>

</body>
</html>