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
    $output = shell_exec('python r.py');
    echo "<p> The python script said </p>";
    echo "<pre>$output</pre>";
    ?>
  </body>
</html>
