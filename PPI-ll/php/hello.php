<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   $vetor = array("IFSC", "UFSC", "55", "IFC");
   for ($i = 0; $i < sizeof($vetor); $i++) {
       echo "<p> valor do vetor no índice ". ($i + 1) .": $vetor[$i]</p>";  // Added semicolon here
   }
   ?>
</body>
</html>
