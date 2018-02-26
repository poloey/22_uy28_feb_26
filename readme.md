## scope in php 

~~~php
$hello= 'hello';

function dhaka() {
  // print  $GLOBALS['hello'];
  global $hello;
  echo $hello;
}
~~~

## connect mysql using mysqi_connect function

~~~php
$connect = mysqli_connect('localhost', 'root', '', 'shop');
~~~

## fetching data from database using connection 

~~~php
$products = $connect->query('select * from products');
~~~


## extracting data from resource

~~~php
$product = $products->fetch_object()
~~~

## building a table iterating mysql resource   

~~~php

<?php while($product = $products->fetch_object()): ?> 
  <tr>
    <td><?php echo $product->title ?></td>
    <td><?php echo $product->price ?></td>
  </tr>
<?php endwhile; ?>
~~~





