
<?php
/*using the $GLOBALS function*/
    $x = 20;
    $y = 10;
function Number()
{
    $GLOBALS['x'] = $GLOBALS['y'] + $GLOBALS['x'];
}

Number();
echo$x;


/*Another example
 on $GLOBALS*/

    $username = "John Smith";
    $productPrice = 100.00;


$name = "Daniel";
$productPrice = 100;


function displayuser() {
    echo "<p>Welcome " . $GLOBALS['name'] . "</p>";
}


function calculateddiscount($discountpercentage) {
    $discountedPrice = $GLOBALS['productPrice'] - ($GLOBALS['productPrice'] * ($discountpercentage / 100));
    echo "<p>Discounted Price: $" . $discountedPrice . "</p>";
}


displayuser();
calculateddiscount(10); 
echo "<p>Original price: $" . $GLOBALS['productPrice'] . "</p>";



    $x = "hello";
    $y = "world";
    $z = "$x $y";
    echo $z;
    ?>

    <?php
    /*MAGIC FUNCTION IN PHP
    __CLASS__  */

   class MyClass{
    public function displayClassName()
    {
        echo"This is the class:" . __CLASS__;
    }
   };

   $obj = new MyClass();
   $obj->displayClassName();


   //__FUNCTION__//

   class MyValue{
    public function sayHello(){
        echo"This Funtion name is: " . __FUNCTION__;
    }

    public function displayClassName(){
        echo"This is " . __FUNCTION__ . "the fuction inside a class";
    }
   }

   $obj = new MyValue();
   $obj->sayHello();
   echo"<br>";
   $obj->displayClassName();
    

   // __METHOD__ FUNCTION //

   class Fruit {

    public function myMethod(){

        echo "this method is: " . __METHOD__;
    } 
    public function anotherMethod(){
        echo "This method is: " . __METHOD__;
    }

   }

   $obj = new Fruit();
   $obj->myMethod();
   echo "<br>";
   $obj->anotherMethod();





   /* __NAMESPACE__ Method */
//define a namespace//

namespace MyArea;
class Food{
  public function myNamespace(){
      echo "This is namespace is: " . __NAMESPACE__;
  }

  public function anotherNamespace(){
      echo "This is namespace is: " . __NAMESPACE__;
  }
}

$obj = new Food();
$obj->myNamespace();
echo "<br>";
$obj->anotherNamespace(); 


 ?>; 
