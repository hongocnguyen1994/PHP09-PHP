/*Lấy danh sách tất cả sản phẩm*/
SELECT * FROM products;
/*Lấy id, tên, giá của sản phẩm và sắp xếp tăng dần theo giá*/
SELECT productID, productName, listPrice
FROM products
ORDER BY listPrice;
/*Lấy id, tên, giá của sản phẩm - với điều kiện giá phải < 450 và sắp xếp tăng dần theo giá*/
SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
/*Lấy id, tên, giá của sản phẩm - với điều kiện giá phải < 10*/
SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 10;


