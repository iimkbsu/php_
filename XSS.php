<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>XSS 해킹보안</title>
</head>
<body>
   <h1>Cross Site Scripting</h1>
   <?php
   echo htmlspecialchars('<script>alert("babo");</script>');
   echo '<script>alert("babo");</script>';
   ?>
</body>
</html>