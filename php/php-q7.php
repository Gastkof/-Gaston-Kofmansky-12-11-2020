Question p8 - Submission file: php-q7.php
Differentiate between require and include?

ans:
 The difference between include and require arises when the file being included cannot be found:
 include will emit a warning (E_WARNING) and the script will continue,
 whereas require will emit a fatal error (E_COMPILE_ERROR) and halt the script.
