<?php

function sayhello($name){
    echo"hello , $name ! <br>";
}
sayhello("john");

$doubler= function($number)  {
    return $number * 2;
};
$result=$doubler(5);
echo $result ."<br>";

function calculatearea($length,$width){
    $area=$length * $width;
    return $area;
}

$rectanglearea=calculatearea(5,5);
echo" the are of the rectangle is : $rectanglearea <br>";

function iseven($number){
    return $number %2==0;
}
$number=65655;
if(iseven($number)){
    echo "$number is even number<br>";
}else {
    echo "$number is odd number<br>";
}

function sendemail($to)  {
    return true;
}
$success=sendemail('test@test.com');
if ($success) {
 
    echo'email sent successfully';
    echo "<br>";
}else {
    echo'error sending the email';
    echo "<br>";
}

$products=[
    ["name" => "shirt" , "price" =>20],
    ["name" => "hat" , "price" =>15],
    ["name" => "jeans" , "price" =>50],
];

$expensiveproducts=array_filter($products,function($product){
    return $product['price']>45;
});
print_r($expensiveproducts);

$person=[
    "name" => "alice",
    "age" => "30",  
    "city" => "New York",
    
];
$name=$person ["name"];
print_r( '<br>'. $name);
