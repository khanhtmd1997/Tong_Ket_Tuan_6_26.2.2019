<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculate Discount </title>
</head>
<body>
    <h1>Calculate Discount </h1>
    <form action="home" method="POST">
      <!--   @csrf: Dùng để hiển thị đoạn mã csrf để chống kĩ thuật tấn công bằng cách sử dụng quyền chứng thực của người sử dụng đối với 1 trang web khác. -->
        @csrf
        <p>
            <input type="text" name="ProductDescription" placeholder="Mô tả sản phẩm">
        </p>
        <p>
            <input type="text" name="ListPrice" placeholder="Giá niêm yết của sản phẩm">
        </p>
        <p>
            <input type="text" name="DiscountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)">
        </p>
        <p>
            <button type="submit">Calculate Discount</button>
        </p>
    </form>
</body>
</html>