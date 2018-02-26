<?php 

$con = mysqli_connect('localhost', 'root', '', 'shop');
$con->query(" 
  create table products (
    id serial,
    title  varchar(30),
    price int(11)
  )

 ");