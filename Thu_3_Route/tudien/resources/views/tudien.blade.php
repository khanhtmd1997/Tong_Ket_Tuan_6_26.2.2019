<!DOCTYPE html>
<html>
<head>
	<title>Từ điển</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Từ điển</h3>

<div>
  <form action="tudien" method="POST">
  	@csrf
    <label for="fname">Từ tiếng việt</label>
    <input type="text" id="fname" name="vietnamese" placeholder="Nhập từ tiếng việt cần dịch..">
  	<label for="fname">Từ tiếng anh</label>
    <input type="text" id="fname" name="english" placeholder="Nhập từ tiếng anh cần dịch..">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>