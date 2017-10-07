/*Lấy productID, producName tại bảng products
với điều kiện chỉ lấy 0->3 trong kết quả
*/
SELECT productID, productName
FROM products
LIMIT 3;
/*Giống trên
*/
SELECT productID, productName
FROM products
LIMIT 0 , 3;
/*Lấy productID, producName tại bảng products
với điều kiện chỉ lấy 1->3 trong kết quả
*/
SELECT productID, productName
FROM products
LIMIT 1, 3;
