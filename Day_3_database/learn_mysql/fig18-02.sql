/*Lấy id, producName, listPrice và đặt tên giả của productName thành name, listPrice thành price
với điều kiện listPrice < 450 và sắp xếp tăng dần theo giá*/
SELECT productID, productName AS name, listPrice AS price
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
/*Giống comment trên*/
SELECT productID, productName name, listPrice price
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
/*Lấy id, producName, listPrice và 
đặt tên giả của productID -> ID, productName -> Product Name, listPrice -> Price
với điều kiện listPrice < 450 và sắp xếp tăng dần cột listPrice*/
SELECT productID AS "ID", productName AS "Product Name", listPrice AS "Price"
FROM products
WHERE listPrice < 450
ORDER BY listPrice;