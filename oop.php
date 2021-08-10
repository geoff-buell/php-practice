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
    echo "<br><br>";
  ?>
  <!-- Same thing using the constuct function  -->
  <?php
    class DifferentFruit {
      public $name;
      public $color;

      function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
      function get_name() {
        return $this->name;
      }
      function get_color() {
        return $this->color;
      }
    }

    $apple = new DifferentFruit("Apple", "Red");
    echo $apple->get_name() . "<br>";
    echo $apple->get_color() . "<br>";  
  ?>

  <?php
    class Vegetable {
      public $name;
      public $color;

      function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
      function __destruct() {
        echo "The vegetable is {$this->name} and the color is {$this->color}. <br>";
      }
    }

    $broccoli = new Vegetable("broccoli", "green");
  ?>

  <?php
    class Cat {
      public $name;
      protected $color;
      private $weight;
    }

    $tabby = new Cat();
    $tabby->name = "Hissy Eliot"; // ok
    // $tabby->color = "Mostly brown and gray"; // error
    // $tabby->weight = "13 lbs"; // error
  ?>

  <?php
    class Dog {
      public $name;
      public $color;
      public $weight;

      function set_name($name) {
        $this->name = $name;
      }
      // protected function set_color($color) {
      //   $this->color = $color;
      // }
      // private function set_weight($weight) {
      //   $this->weight = $weight;
      // }
    }

    $mutt = new Dog();
    $mutt->set_name("Jared"); // ok
    // $mutt->set_color("brown"); // error
    // $mutt->set_weight("20 lbs"); // error
  ?>

  <?php
    class Berry {
      public $name;
      public $color;
      public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
      public function intro() {
        echo "This fruit is a {$this->name} and the color is {$this->color}. <br>";
      }
    }

    class Strawberry extends Berry {
      public function message() {
        echo "Am I a fruit or a berry? <br>";
      }
    }
    $strawberry = new Strawberry("strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
  ?>
</body>
</html>