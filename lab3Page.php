<?php
echo '<h1>This is the Lab3 Page</h1>';
?>

<?php
$output = shell_exec('python r.py');
echo "<p> The python script said </p>";
echo "<pre>$output</pre>";
?>
