<html>
<body>
<?php
$a=array("mansi","sapna","chetana"); 
echo "I like ".$a[0].",".$a[1]."and".$a[2]."."."<br/>";
$b=array
  (
  array("mansi",20,96000),
  array("sapna",19,59000),
  array("chetana",19,10000)
  );
echo $b[0][0].": age: ".$b[0][1].".selry: ".$b[0][2]."<br>";
echo $b[1][0].": age: ".$b[1][1].".selry: ".$b[1][2]."<br>";
echo $b[2][0].": age: ".$b[2][1].".selry: ".$b[2][2]."<br>";
$age=array("jinal"=>"19","disha"=>"12","princy"=>"11");
foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  sort($age);
  echo "<br>";
  }
$a1=array("banana","yellow");
$a2=array("apple","red");
print_r(array_merge($a1,$a2));
$a=array("red","green","blue");
echo"<br>";
array_pop($a);
print_r($a);
echo"<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo"<br>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
echo"<br>";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo"<br>";
echo count($a);
?>
</body>
</html>
