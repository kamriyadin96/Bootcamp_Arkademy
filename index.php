<?php 
include 'connect.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	
	 <div class="container mt-5">
	 	<table class="table table-striped table-hover" width="100%">
	 	<tr>
	 		<th>No</th>
	 		<th>cashier</th>
	 		<th>product</th>
	 		<th>category</th>
	 		<th>price</th>
	 	</tr>
	 	<?php $no = 1; ?>
	 	<?php foreach($res as $row) : ?>
	 	<tr>
	 			<td><?= $no;?></td>
	 			<td><?= $row['name_cashier']?></td>
	 			<td><?= $row['name_product']?></td>
	 			<td><?= $row['name_category']?></td>
	 			<td><?= $row['price']?></td>
	 		
	 	</tr>
	 	<?php $no++; ?>
	 	<?php endforeach;?>
	 </table>
	 </div>
	 


</body>
</html>