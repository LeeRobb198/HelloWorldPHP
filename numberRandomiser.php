<!DOCTYPE html>
<html>
  <head>
    <title>Number Randomiser</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="numberRandomiser.css">
  </head>
  <body>
    <div class="header">
      <h1> This the Number Randomiser! </h1>
    </div>
    <?php
    $output = shell_exec('python r2.py -r 6 -n 1 -x 49');
    echo "<p> The python script said </p>";
    echo "<pre>$output</pre>";
    ?>
  </body>
</html>
