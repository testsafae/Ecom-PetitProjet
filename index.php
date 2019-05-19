<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"  >
    <title>E-Commerce</title>
</head>
<body>
<?php 
    require("produit.php");
    require("sessions.php");
    
?>

<div class="container my-5">
    <div class="row">
  <?php foreach($products as $product ):?>
    <div class="col-md-6 col-lg-4">
    <div class="card">
      <img src="<?="images/".$product['type'].'/'.$product['photo']?>" class="card-img-top" alt="..." style="height:400px;width:300px">
      <div class="card-body">
        <h5 class="card-title"><?=$product['Designation'] ?></h5>
        
        <p class="card-text"><small class="text-muted outlined" style="text-decoration: line-through;"><?=$product['prixNormal'] ?></small></p>
        <p class="card-text"><small class="text-muted" ><?=$product['prixPromo'] ?></small></p>
      </div>
    </div>
  </div>
  <?php endforeach?>
</div>
</div>
    <div class="container my-5">
    <?php require("panier.php") ?>
    </div>
<script src="node_modules/jquery/dist/jquery.slim.min.js" ></script>
<script src="node_modules/popper.js/dist/popper.min.js"  ></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>