<form method="get">
	<input type="number" name="numberOne" placeholder="Số thứ nhất" value="{{request('numberOne')}}">
	<input type="number" name="numberTwo" placeholder="Số thứ hai" value="{{request('numberTwo')}}"><br>
	<input type="submit" name="total" value="addtion">
	<input type="submit" name="total" value="subtraction">
	<input type="submit" name="total" value="multiplication">
	<input type="submit" name="total" value="division">
</form>
<h1>Kết quả : {{$total_}}</h1>