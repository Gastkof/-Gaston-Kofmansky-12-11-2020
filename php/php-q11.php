Question p11 - Submission file: php-q10.php
Write syntax to open a file in PHP?

ans:
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);


Question p15 - Submission file: php-q11.php
How to stop the execution of PHP script?

ans:
exit — Output a message and terminate the current script

//exit program normally
exit;
exit();
exit(0);

//exit with an error code
exit(1);
exit(0376); //octal

The exit() function in PHP is an inbuilt function which is used to output a message and terminate the current script.
The exit() function only terminates the execution of the script.
