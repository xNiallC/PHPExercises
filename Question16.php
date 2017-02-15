<html>
<head>
    <title>Question 16</title>
</head>
<body>
<?php
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    echo "A = ".$side1.", B = ".$side2.", C = <b>".sqrt((intval($side1) * intval($side1)) + (intval($side2) * intval($side2)))."</b>\n";
?>
</body>
</html>
