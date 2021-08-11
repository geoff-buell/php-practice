<?php
  // namespace Html;
  // class Table {
  //   public $title = "";
  //   public $numRows = 0;
  //   public function message() {
  //     echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  //   }
  // }
  // $table = new Table();
  // $table->title = "My table";
  // $table->numRows = 5;
?>

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

  <?php
    class Hello {
      const WELCOME_MESSAGE = "Hello there, welcome! <br>";
    }
    echo Hello::WELCOME_MESSAGE;

    class Goodbye {
      const LEAVING_MESSAGE = "Bye, y'all come back now ya hear? <br";
      public function byebye() {
        echo self::LEAVING_MESSAGE;
      }
    }

    $goodbye = new Goodbye();
    $goodbye->byebye();
  ?>

  <?php
    abstract class Car {
      public $name;
      public function __construct($name) {
        $this->name = $name;
      }
      abstract public function intro() : string;
    }

    class Audi extends Car {
      public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
      }
    }

    class Volvo extends Car {
      public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
      }
    }

    class Citroen extends Car {
      public function intro() : string {
        return "Frence extravagance! I'm a $this->name!";
      }
    }

    $audi = new Audi("Audi");
    echo $audi->intro() . "<br>";

    $volvo = new Volvo("Volvo");
    echo $volvo->intro() . "<br>";

    $citroen = new Citroen("Citroen");
    echo $citroen->intro() . "<br>";
  ?>

  <?php
    abstract class ParentClass {
      // abstract method with an argument
      abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
      // the child class may define optional arguments that are not in the parent's abstract method
      public function prefixName($name, $separator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
          $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
          $prefix = "Mrs";
        } else {
          $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
      }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
    echo "<br>";
  ?>

  <?php
    interface Animal {
      public function makeSound();
    }

    class Kitty implements Animal {
      public function makeSound() {
        echo "Meow <br>";
      }
    }

    class Doggy implements Animal {
      public function makeSound() {
        echo "Woof <br>";
      }
    }

    class Mouse implements Animal {
      public function makeSound() {
        echo "Squeak <br>";
      }
    }

    $kitty = new Kitty();
    $doggy = new Doggy();
    $mouse = new Mouse();
    $animals = array($kitty, $doggy, $mouse);

    foreach($animals as $animal) {
      $animal->makeSound();
    }
  ?>

  <?php 
    trait message1 {
      public function msg1() {
        echo "OOP is fun! ";
      }
    }
    trait message2 {
      public function msg2() {
        echo "OOP reduces code duplication.";
      }
    }

    class Welcome {
      use message1;
    }
    class Welcome2 {
      use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
    echo "<br>";
  ?>

  <?php 
    class Greeting {
      public static function welcome() {
        echo "Hello world! <br>";
      }
    }

    Greeting::welcome();

    class Greeting2 {
      public static function welcome2() {
        echo "Hey! How are you? <br>";
      }
      public function __construct() {
        self::welcome2();
      }
    }

    new Greeting2();

    class SomeOtherClass {
      public function message() {
        Greeting::welcome();
      }
    }

    class Domain {
      protected static function getWebsiteName() {
        return "W3Schoools.com";
      }
    }

    class DomainW3 extends Domain {
      public $websiteName;
      public function __construct() {
        $this->websiteName = parent::getWebsiteName();
      }
    }

    $domainW3 = new DomainW3();
    echo $domainW3->websiteName;
    echo "<br>";
  ?>

  <?php
    // class Pi {
    //   public static $value = 3.14159;
    // }

    // echo Pi::$value;

    // class Pi {
    //   public static $value = 3.14159;
    //   public function staticValue() {
    //     return self::$value;
    //   }
    // }

    // $pi = new Pi();
    // echo $pi->staticValue();

    class Pi {
      public static $value = 3.14159;
    }

    class x extends Pi {
      public function xStatic() {
        return parent::$value;
      }
    }

    echo x::$value;
    echo "<br>";

    $x = new x();
    echo $x->xStatic();
    echo "<br>";
  ?>

  <?php 
    // namespace and class defined at top of file 
    // $table->message();
  ?>

  <?php
    function printIterable(iterable $myIterable) {
      foreach($myIterable as $item) {
        echo $item;
      }
    }
    
    $arr = ["a", "b", "c"];
    printIterable($arr);

    echo "<br>";

    function getIterable():iterable {
      return ["a", "b", "c"];
    }

    $myIterable = getIterable();
    foreach($myIterable as $item) {
      echo $item;
    }

    echo "<br>";

    class MyIterator implements Iterator {
      private $items = [];
      private $pointer = 0;

      public function __construct($items) {
        $this->items = array_values($items);
      }
      public function current() {
        return $this->items[$this->pointer];
      }
      public function key() {
        return $this->pointer;
      }
      public function next() {
        $this->pointer++;
      }
      public function rewind() {
        $this->pointer = 0;
      }
      public function valid() {
        return $this->pointer < count($this->items);
      }
    }

    // function printIterable(iterable $myIterable) {
    //   foreach($myIterable as $item) {
    //     echo $item;
    //   }
    // }

    $iterator = new MyIterator(["a", "b", "c"]);
    printIterable($iterator);
  ?>
</body>
</html>