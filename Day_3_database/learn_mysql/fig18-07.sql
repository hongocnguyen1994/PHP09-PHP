/*	Lấy productName trong products
	Với điều kiện trong mỗi productName phải bắt đầu bằng Fender
*/
SELECT productName FROM products
WHERE productName LIKE 'Fender%'
/*	Lấy productName trong products
	Với điều kiện trong mỗi productName phải có chữ cast
*/
SELECT productName FROM products
WHERE productName LIKE '%cast%'
/*	dấu _ đại diện cho 1 ký tự
*/
SELECT zipCode FROM addresses
WHERE zipCode LIKE '076__'

SELECT orderDate FROM orders
WHERE orderDate LIKE '2010-06-__%'
