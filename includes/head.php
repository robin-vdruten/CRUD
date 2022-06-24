<?php
function head($title, $icon)
{
    ?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo $icon; ?>" />
  <link rel="stylesheet" href="CSS/styles.css" />
  <script
    src="https://kit.fontawesome.com/143048b42c.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
} ?>
