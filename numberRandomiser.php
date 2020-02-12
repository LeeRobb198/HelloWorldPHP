<?php
echo '<h1>This is the Lab3 Page</h1>';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Number Randomiser</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="numberRandomiser.css">
  </head>
  <body>
    <h1 id="header"> This the Number Randomiser! </h1>
    <?php
    $output = shell_exec('python r.py');
    echo "<p> The python script said </p>";
    echo "<pre>$output</pre>";
    ?>
  </body>
</html>
