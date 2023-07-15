<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video | ID</title>
  <link rel="stylesheet" href="/dist/css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</head>

<body>
  <div class="w-full h-[100vh] overflow-hidden grid grid-cols-12">
    <input type="hidden" id="videoIds" name="videoIds" value="<?php echo getVideoIds(); ?>">