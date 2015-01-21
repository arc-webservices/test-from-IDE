<?php
$output = shell_exec('git pull');
var_dump($output);
$output = shell_exec('git add . -u');
echo "\n..............................................\n";
var_dump($output);
$output = shell_exec('git commit -m "test"');
echo "\n..............................................\n";
var_dump($output);
echo "\n..............................................\n";
$output = shell_exec('git push origin master');
var_dump($output);

echo "done ............";

?>
