<?php  ob_start(); // Output Buffering Start ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo getTitle() ?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" charset="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href= "<?php echo $img; ?>icon.jpg"/>
        <link rel="stylesheet" href= "<?php echo $css; ?>all.min.css"/>
        <link rel="stylesheet" href= "<?php echo $css; ?>fontawesome.min.css"/>
        <link rel="stylesheet" href= "<?php echo $css; ?>bootstrap.min.css"/>
        <link rel="stylesheet" href= "<?php echo $css; ?>style.css"/>
    </head>
    <body>

<?php  ob_end_flush(); // Output Buffering End ?>