Question p11 - Submission file: php-q10.php
Write syntax to open a file in PHP?

ans:
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
