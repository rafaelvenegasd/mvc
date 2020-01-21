<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC Pill</title>
</head>
<body>
    <?php
       require 'views/header.php';
    ?>
<div class="container mt-3 rectangle">
<form action="<?php echo constant('URL');?>newCustomer/createNewCustomer" method="POST" id="createCustomer">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="cust_name" placeholder="Type the name here">
  </div>
  <div class="form-group">
    <label for="city">Ciudad</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Type the city here">
  </div>
  <div class="form-group">
    <label for="agent_code">Código del Vendedor</label>
    <select class="form-control" id="agent_code" name="agent_code">
    <?php
        foreach ($this->agents_codes as $value){
            echo '<option value="'.$value.'">'.$value.'</option>';
        }
    ?>
      </option>
    </select>
  </div>
  <div class="form-group text-center">
    <input class="btn btn-primary mt-4" type="submit" name='create' value="Registrar Cliente">
  </div>
</form>
</div>
    

    <?php
        require 'views/footer.php';
    ?>
</body>
</html>