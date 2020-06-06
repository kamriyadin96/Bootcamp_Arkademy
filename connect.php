<?php 
		$conn  = mysqli_connect("localhost", "root", "", "cafe");
		$sql = $conn->query("SELECT * FROM product INNER JOIN category ON category.id = product.id_category INNER JOIN cashier ON cashier.id = product.id_cashier");
		// var_dump($sql);
		$res = [];
		while($row = mysqli_fetch_assoc($sql)){
		    $res[] = $row;
		}
	 ?>