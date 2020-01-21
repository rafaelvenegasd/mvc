<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC Pill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href=" <?php echo constant('URL'); ?>assets/css/style.css">
</head>
<body>
<header>
<!-- <nav class="nav   "> -->
<ul class="nav nav-pills bg-Darker container justify-content-end">
  <li class="nav-item">
    <a class="nav-link white" href="<?php echo constant('URL'); ?>home">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active white" href="<?php echo constant('URL'); ?>newCustomer">Nuevo</a>
  </li>
</ul>
  <!-- </nav> -->
</header>
</body>
</html>