<?php

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>mazespin.live</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="..\css\style.css?ver=cache-002" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' />
  <script defer src="../js/script.js" type="text/javascript"></script>
  <script defer src="../js/auto-load-feed.js" type="text/javascript"></script>
  <script defer src="../js/autocolor.js" type="text/javascript"></script>
  <script defer src="../js/auto-feed-id.js" type="text/javascript"></script>
  <script defer src="../js/easter.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" crossorigin="anonymous" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />

  <!-- Website browser search -->
  <link rel="icon" href="../media/svg/Shortcut-Icon-Mazespin.svg" type="image/x-icon">

  <!-- Website browser tab  -->
  <link rel="shortcut icon" href="../media/svg/Shortcut-Icon-Mazespin.svg" type="image/x-icon">

</head>

<?php// include "./base-php-elements/maintenance-page.php" ?>

<?php// include "../base-php-elements/maintenance-page.php" ?>