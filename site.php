<!method get>
<html>
<body>

<form action="site.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age:<input type="number" name="age">
    <input type="submit">
</form>
<br>

Your name is <?php echo $_GET["name"] ?>
<br>
Your age is <?php echo $_GET["age"] ?>
</body>
</html>