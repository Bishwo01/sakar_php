<?php


$name="alice";
$fruits=["apple","banana","orange"];

if(is_array($name)){
    echo "variable \$name is an array .\n";
}else {
    echo "variable \$name is not an array .\n";
}
if(is_array($fruits)){
    echo "variable \$fruits is an array .\n <br>";
}else {
    echo "variable \$fruits is not an array .\n";
}

$numbers=[1,2,3,2,4,1];
$unique_numbers=array_unique($numbers);
echo "original array :\n";
print_r($numbers);
echo"\n unique values : \n ";
print_r($unique_numbers);

$colors=["red","green","blue","yellow"];
$key=array_search("green",$colors);

if ($key !== false) {
    echo "the value \"green\" is found at index $key .\n ";
}else{
    echo "the value \"green\" is not found in the array .\n";
}


$letters=["a","b","c","d"];

echo"original array : \n";
print_r($letters);

$reversed_letters=array_reverse($letters);
echo "n Reversed array : \n <br>";
print_r($reversed_letters);


$numbers=[1,2,3];

$squared_numbers=array_map(function($item)
{
    return $item*$item;
},$numbers );
echo "original array : \n <br>";
print_r($numbers);
echo "squared array : \n <br>";
print_r($squared_numbers);



$no=[10,5,18,2];
$largest_numbers=max($no);
echo "largest number is : $largest_numbers \n <br>";

$smallest_number=min($no);
echo "smallest number is : $smallest_number \n <br>";

$fruits=["apple","mango","orange","banana"];
$random_fruit=$fruits[array_rand($fruits)];
echo "random fruit is : $random_fruit \n <br>"; 

$words=["hello","world","hello","welcome"]




?> 