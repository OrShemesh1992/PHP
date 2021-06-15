<?php
// TODO : BLA BLA BLA
/*
 * COMMENTS
 */
for($i=1; $i<=10; $i++){
    echo "$i ";
}
echo "<br>";
$arr = array(4,8,14,16,23,42);

for($i=0; $i<count($arr); $i++){
    echo "$arr[$i] ";
}
echo "<br>";
foreach ( $arr as $val) {
    echo "$val ";
}
echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
}
?>