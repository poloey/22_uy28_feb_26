<?php 

$connect = mysqli_connect('localhost', 'root', '', 'shop');

$products = $connect->query('select * from products');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-gn5384xqq1aowxa+058rxpxpg6fy4iwvtnh0e263xmfcjlsawiggfaw/dais6jxm" crossorigin="anonymous">

    <title>hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="p-5 bg-info text-white">
        <h2>all products</h2>
      </div>
      <table class="table table-bordered mt-4">
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

    <!-- optional javascript -->
    <!-- jquery first, then popper.js, then bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-kj3o2dktikvyik3uenzmm7kckrr/re9/qpg6aazgjwfdmvna/gpgff93hxpg5kkn" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-apnbgh9b+y1qktv3rn7w3mgpxhu9k/scqsap7huibx39j7fakfpskvxusvfa0b4q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-jzr6spejh4u02d8jot6vlehfe/jqgirrsqqxsffwpi1mquvdayjuar5+76pvcmyl" crossorigin="anonymous"></script>
  </body>
</html>