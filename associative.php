<form action="associative.php" method="post">
    <! same container >
    Student: <input type="text" name = "student" >
    <input type="submit">
</form>
<?php

 // like a map
 $grades = array("jim"=>"A+","jim1"=>"B-","jim2"=>"C+");
//    $grades["jim"] = "F";
    echo $grades[$_POST["student"]];
//    echo count($grades);
 ?>