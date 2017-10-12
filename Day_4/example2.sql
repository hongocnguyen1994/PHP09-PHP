Thực hành SQL nâng cao
1. Lấy sản phẩm giảm giá cao nhất
2. LẤy sản phẩm có giá nhỏ nhất
3. Tổng giá của những sản phẩm thuộc danh mục Guitars
4. Có bao nhiêu sản phẩm thuộc danh mục Drums 
5. Giá trung bình của những sản phầm danh mục Guitars

1. 
	SELECT productName
	FROM products
	WHERE discountPercent = (SELECT MAX(discountPercent) FROM products);
2.

3.
	SELECT SUM(listPrice) AS SUMGuitars
	FROM `products`
	WHERE `categoryID` = 1
4. 
	SELECT COUNT(productName) AS COUNTDrums
	FROM `products`
	WHERE `categoryID` = 3
5. 
	SELECT AVG(listPrice) AS AVGDrums
	FROM `products`
	WHERE `categoryID` = 3