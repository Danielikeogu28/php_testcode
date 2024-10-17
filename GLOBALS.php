
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