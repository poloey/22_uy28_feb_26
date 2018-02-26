<?php 
$con = mysqli_connect('localhost', 'root', '', 'shop');
$con->query("
  create table products (
    id serial,
    title varchar(30) not null,
    price integer(11) not null
  )
 ");
