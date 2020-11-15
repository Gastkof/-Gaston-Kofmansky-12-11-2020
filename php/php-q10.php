Question p11 - Submission file: php-q10.php
Write syntax to open a file in PHP?

ans:
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
