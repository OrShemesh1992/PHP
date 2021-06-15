<!calculter>
<html>
<body>


<form action="calculter.php" method="post">
    First Num: <input type="number" step="0.1" name="num1">
    <br>
    OP: <INPUT TYPE="textbox" name="op">
    <br>
    Second Num: <input type="number"  step="0.1"  name="num2">
    <br>
    <input type="submit">
</form>

Answer: <?PHP
echo "<br>";
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
echo $num1 + $num2;
}elseif ($op == "-"){
    echo $num1 - $num2;
}elseif ($op == "*"){
    echo $num1 * $num2;
}elseif ($op == "/"){
    echo $num1 / $num2;
}else{
    echo "Invalid Operator";
}

?>

</html>
</body>







