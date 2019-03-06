<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<title>Danh sách khách hàng</title>
</head>
<body>
	<a href="http://localhost/25.2.2019-LARAVEL/Route_/TaskManager/public/create">Thêm</a>
	<h1>Danh sách khách hàng</h1>
	<table border="1">
  		<thead>
  			<tr>
		      	<th>STT</th>
		      	<th>Họ và tên</th>
		      	<th>Số điện thoại</th>
		      	<th>Email</th>
		     	 <th>Thao tác</th>
		  </tr>
  		</thead>
  		<tbody>
  		
     		<?php
     			foreach ($customers as $customer) {
     		?>
     			<tr>
     				<td><?php echo $customer["id"] ?></td>
     				<td><?php echo $customer["name"] ?></td>
     				<td><?php echo $customer["sdt"] ?></td>
     				<td><?php echo $customer["email"] ?></td>
     				<td>
     					<a href="http://localhost/25.2.2019-LARAVEL/Route_/TaskManager/public/show/<?php echo $customer['id']; ?>">Xem</a>||
     					<a href="http://localhost/25.2.2019-LARAVEL/Route_/TaskManager/public/showEdit/<?php echo $customer['id']; ?>">Sửa</a>||
     					<a href="http://localhost/25.2.2019-LARAVEL/Route_/TaskManager/public/<?php echo $customer['id']; ?>">Xóa</a>
     				</td>
     			</tr>
     		<?php
     			}
     		?>
  		
  </tbody>
</table>
</body>
</html>