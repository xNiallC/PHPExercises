<html>
<head>
    <title>Question 11</title>
</head>
<body>
<?php
for($i = 99; $i > 0 ; --$i) {
    echo "$i bottles of beer on the wall, $i bottles of beer.<br/></br>\n";
    echo "Take one down, pass it around, ".($i - 1)." beers on the wall.<br/><br/>\n";
}
?>
</body>
</html>
