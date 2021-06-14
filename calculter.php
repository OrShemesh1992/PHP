<!calculter>
<html>
<body>


<form action="calculter.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
</form>

Answer: <?PHP echo $_GET["num1"] + $_GET["num2"] ?>

</html>
</body>







