<?php
$output = shell_exec('git pull');
$output = shell_exec('git add . -u');
$output = shell_exec('git commit -m "test"');
$output = shell_exec('git push origin master');

echo "done ............";

?>
