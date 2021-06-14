
<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>

<body>

<?php

$firends = array("or",1 , false , 5.5 , "keren", "Oscar","Chen");
$firends[2] = "test";
echo $firends[2];

$firends[7] = "angela ";


?>
<br>
<?php
$firends[7] = "angela ";
echo $firends[7];
?>
<br>
<?php
echo count($firends);
?>
</body>
