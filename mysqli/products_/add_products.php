<?php 
$con = mysqli_connect('localhost', 'root', '', 'shop');
$con->query("insert into products(title, price) values('core i3 8100', 10000), ('core i5 8400', 16000), ('core i7 8600', 27000)");
