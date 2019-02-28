<!DOCTYPE html>
<html>
<head>
	<title>Trang chi tiết</title>
</head>
<body>	
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>sdt</th>
			<th>email</th>
		</tr>
		<tr>

			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['sdt']; ?></td>
			<td><?php echo $customer['email']; ?></td>
		</tr>
	</table>
</body>
</html>