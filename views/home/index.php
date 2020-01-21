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
    
<div class="container mt-1 center mb-2 col-sm-12">
<table class=" container table justify-content-center">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Cód_vendedor</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include_once 'entities/customer.php';
        foreach($this->customers as $row){
            $item = new Customer();
            $item = $row;
    ?>  
    <tr>
      <th scope="row"><?php echo $item->code; ?></th>
      <td><?php echo $item->name; ?></td>
      <td><?php echo $item->city; ?></td>
      <td><?php echo $item->agent_code; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</div>

    <?php
        require 'views/footer.php';
    ?>
</body>
</html>