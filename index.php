<?php
  // Assigning a variable.
  $pageTitle = 'TECHCareers | Basic PHP Webpage';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; // We can echo it, or change it, wherever we need to! ?></title>

  <!-- Style(s) -->
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!-- Script(s) -->
  <script type="text/JavaScript" src="js/scripts.js" defer></script>
</head>
<body>
  <h1><?php echo $pageTitle; ?></h1>
</body>
</html>