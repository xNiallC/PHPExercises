<html>
<head>
    <title>Question 12</title>
</head>
<body>
<table border="1">
<?php
for($i = 1; $i <= 9; ++$i) {
    echo "<tr>\n";
    for($x = 1; $x <= 9; ++$x) {
        echo "<td>". $i * $x . "</td>\n";
    }
    echo "</tr>\n";
}
?>
</table>
</body>
</html>
