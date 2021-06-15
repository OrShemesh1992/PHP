<!switch>
<html>
<body>


<form action="switch.php" method="post">
    What is your grade? <br>
    <input type="text" name="grade">
    <input type="submit">
</form>

Grade:
<?PHP

$grade= $_POST["grade"];

switch ($grade){
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good";
        break;

    default:
        echo "Invalid Grade";

}

?>

</html>
</body>







