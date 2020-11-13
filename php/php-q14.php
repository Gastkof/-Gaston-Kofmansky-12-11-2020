Question p19 - Submission file: php-q14.php
How can we access the data sent through the URL with the GET method?


$_GET is an array of variables passed to the current script via the URL parameters.

GET may be used for sending non-sensitive data.

<a href="test_get.php?subject=PHP&web=check.com">Test $GET</a>

in the test_get.php :

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
