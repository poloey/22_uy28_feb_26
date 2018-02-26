<?php 

$connect = mysqli_connect('localhost', 'root', '', 'shop');
$connect->query("
  insert into products (title, price)
  values 
  ('core i3 8100', 9000),
  ('core i3 7100', 8000),
  ('core i3 6100', 7000),
  ('core i7 7500', 21000),
  ('core i7 7500k', 9000),
  ('core i3 6100k', 13000),
  ('core i5 8400', 16000),
  ('core i5 8600k', 28000),
  ('core i7 8700', 29000)

  ");
