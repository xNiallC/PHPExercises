<!DOCTYPE html>
<html>
<head>
    <title>Question 18</title>
</head>
<body>
<?php
    $menu = array("Wikipedia" => "http://en.wikipedia.org/",
                  "Google" => "http://google.com/",
                  "COMSC" => "http://cs.cf.ac.uk/",
                  "PHP Manual" => "http://php.net/manual/en/");

    foreach($menu as $name => $address) {
        echo "<a href=\"$address\">$name</a><br />\n";
    }
?>
</body>
</html>