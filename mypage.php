<?php
    // Simple PHP Page
    $title = "Welcome page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>hiii <?php echo $title; ?></h1>
    <p>This is a basic PHP webpage.</p>
    <p>Current Date and Time: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>
