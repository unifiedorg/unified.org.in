<?php
  if ($favicon == "d") {
    $favicon = "https://raw.githubusercontent.com/unifiedorg/.github/main/img/logo_bg-t.png";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= $favicon ?>" type="image/x-icon">
    <link rel="stylesheet" href="/api/getAsset/css/tw">
  </head>
  <body class="bg-gradient-to-l from-pink-500 via-red-500 to-yellow-500">
