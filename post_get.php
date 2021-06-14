<!post_get>

<body>


<form action="post_get.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
</form>
<br><br>

<?PHP
echo  $_POST["password"];
?>

</body>

