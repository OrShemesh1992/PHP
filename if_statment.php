



<form action="if_statment.php" method="post">
    <!--    Student: <input type="text" name = "student" >-->
    <!--    <input type="submit">-->
</form>


<?php
//if statment

$isMale = true;
$isTall = false;
if($isMale && $isTall){
    echo "You are male";
}else{
    echo "You are fmale<br>";
}
if($isMale || $isTall){
    echo "You are male";
}elseif(!$isMale){
    echo "You are fmale";
}else{
    echo "somtehing";
}
?>