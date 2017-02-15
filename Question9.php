<html>
	<head>
		<title>Question 9</title>
	</head>
<body>
	<?php
		function degree_class($mark)
        {
            if (($mark < 0) or ($mark > 100)) {
                return ("Error");
            } elseif ($mark >= 70) {
                return "1st";
            } elseif ($mark >= 60) {
                return "2:1";
            } elseif ($mark >= 50) {
                return "2:2";
            } elseif ($mark >= 40) {
                return "3rd";
            } else {
                return "Fail";
            }
        }

        for ($mark = 0; $mark <= 100; ++$mark) {
				$degree = degree_class($mark);
				echo "Your mark is $mark. You got a $degree.<br/>\n";
			}
    ?>
</body>
</html>