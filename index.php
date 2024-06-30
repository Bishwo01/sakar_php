<?php
$fruits=array("apple","banana","orange");

$copiedfruits=$fruits;
echo "original fruits=";
print_r($fruits);
echo "copied fruits: <br>";
print_r($copiedfruits);

$copiedfruits[1]="mango";

echo"original fruits after modification <br>";
print_r($fruits);
?>

<?php
$x=12;
$y=6;

$sum=$x+$y;
$difference=$x-$y;
$product=$x*$y;
$division=$x/$y;
$remainder=$x%$y;
$power=$x**$y;

echo "sum =$sum<br>";
echo "differnce =$difference<br>";
echo "product =$product<br>";
echo "division =$division<br>";
echo "remainder =$remainder<br>";
echo "power =$power<br>";
?>


<?php
$age=25;
$age+=1;
$height=1.75;

echo "Age:$age<br>";
echo "height:$height<br><br>"

?>

<?php
$a=10;
$b=20;
$isequal=($a==$b);
$isgreater=($a>$b);
$islessthan=($a<$b);

echo "Is a equal to b?$isequal<br>";
echo "Is a greater than b?$isgreater<br>";
echo "Is a less than b?$islessthan<br><br>";

$isstudent=true;
$hasgoodgrades=false;

$eligibleforscholarship=$isstudent && $hasgoodgrades;
$cangraduate=$isstudent||$hasgoodgrades;

echo "eligible for scholarship?$eligibleforscholarship<br>";
echo "can graduate?:$cangraduate<br><br>";

$count=0;
$number=10;

$result=$count;
$count++;
print("postfix Increment:count+$result,$count<br>");

$result=$number;
$number--;
print("postfix decrement : number=$result,$number<br><br>");

$result=++$count;
print("prefix Increment :count=$result,$")
?>


