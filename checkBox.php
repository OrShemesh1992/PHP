
<body>

<form action="checkBox.php" method="post">
    <! same container >
    Apples: <input type="checkbox" name = "fruits[]" value="apples" > <br>
    Oranges: <input type="checkbox" name = "fruits[]" value="Oranges" > <br>
    pears: <input type="checkbox" name = "fruits[]" value="pears" > <br>
    <input type="submit">
</form>
<br>
<?php
$fruits = $_POST["fruits"];
echo $fruits[1];

?>
</body>