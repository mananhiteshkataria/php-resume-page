<html>
  <style>
body{
  background: url("document/banner.jpg");
  color:white;
}
h1{
  background-color: teal;
}
h2{
  background-color: aquamarine;
  color:black;
}
h3{
  background-color: white;
  color: black;
}
  </style>
<body>
<section>
<div class="column right">
<div class="fields">
<form action="functions.php"  method="POST">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name required">
                            </div>
                            <div class="field email">
                                <input type="email" name ="email" placeholder="Email required">
                            </div>
</div>
                        <div class="button-area">
                            <input type="submit">
                        </div>
</div>
</form>
</section>
</body>
</html>
<?php
echo"<h1> STRING FUNCTIONS </h1> <br>";
$a=$_POST["name"];
$b=$_POST["email"];
$c=strrev($a);
echo "<h2>reverse of string </h2> ".$c."<br>" ;

echo"<br><h2>Thanks for your details </h2>" . "<br>" . "<h3>Your details wil now be manipulated first letter uppercase </h3><br> ";

$d=ucwords($b);
echo $d;
echo "<br>";
echo "<h2>third function will wrap a string </h2> "."<br>"."";
$e = "An example of a long word is:Supercalifragilisticexpialidocious ";
echo $e;
echo "<br>";
echo"<h3> wrappping </h3><br>";
$f=wordwrap($e , 20, "<br>\n", TRUE);
echo $f;
echo "<br>" ;
echo "<h2>fourth function will replace a word in a string</h2> "."<br>"."";
$g=substr_replace($e," big",13);

echo $g;

echo ".<br>" ;
$n="example";
echo $n."<br>";
echo "<h2>fifth function will give hash of a string </h2><br>" .crypt($n,'st')."<br>";
echo "<h2>sixth function will show ltrim ,rtrim </h2>";
$m="i like cars";

echo $m . "<br>";
echo"<h3> ltrim </h3> <br>";
echo ltrim($m,"i")."<br>";
echo"<h3> rtrim </h3> <br>";
echo rtrim($m,"cars")."<br>";



echo "<h2>seventh function will show strpbrk </h2>";
echo "<h3>Hello World is example string </h3> <br>";
echo "<h4> Now Showing Output </h4><br>";
echo strpbrk("Hello world!","oe")."<br>";


echo"<h1> ARRAY FUNCTIONS </h1> <br>";

$h = array("Pagani", "Tesla", "Toyota","Honda ");

echo "<h2>this is array i made for array functions</h2>"."<br>"."<h3>array of cars</h3> <br>";

print_r($h) ;echo "<br>";

echo "<h2>print array on reverse</h2> <br>";

print_r(array_reverse($h));
echo ".<br>." ;

echo "<h2>print array unique</h2> <br>";

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array($a));
echo "<h3>showing only unique element of array</h3>"."<br>";
print_r(array_unique($a));
echo ".<br>." ;
echo "<h2> calling any element from an array</h2>";
echo "I like" .$h[0];

echo ".<br>." ;

$i=array("Hyundai","Koenigsegg","Ferrari");

echo "<h2>return array as string </h2>". "<br>";
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
print_r(array_reduce($i,"myfunction",8));

echo "<h2>size of array</h2>"."<br>";
echo sizeof($i);

echo "<h2>returning  arrays with its key using uksort </h2>   ";

echo"<br>";
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

$arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
uksort($arr,"my_sort");
 
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

?>