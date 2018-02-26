<?php 
$con = mysqli_connect('localhost', 'root', '', 'shop');
$products = $con->query("select * from products order by id desc");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
 <!-- <style>
 body {
  font-family: sans-serif;
 }
   .container {
    margin: 10px 10%;
   }
   table, tr, td, th {
    border: 1px solid salmon;
    border-collapse: collapse;
   }
   table {
    width: 100%;
   }
   td, th {
    padding: 10px;
   }
 </style> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="bg-info text-white p-5">
    <h2>All products</h2>
    <a href="form.php" class="btn btn-secondary">Add product</a>
  </div>
  <table class="table table-bordered">
    <tr>
      <th>title</th>
      <th>price</th>
    </tr>
    <?php while($product = $products->fetch_object()): ?>
      <tr>
        <td><?php echo $product->title ?></td>
        <td><?php echo $product->price ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</div> 
</body>
</html>