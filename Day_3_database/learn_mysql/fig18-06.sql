SELECT orderID, orderDate, shipDate
FROM orders
/*	Lấy ordereID, orderDate, shipDate trong orders
	Với điều kiện shipDate phải rỗng
*/
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NULL
/*	Lấy ordereID, orderDate, shipDate trong orders
	Với điều kiện shipDate không rỗng
*/
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NOT NULL