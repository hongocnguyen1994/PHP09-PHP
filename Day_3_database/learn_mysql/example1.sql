1. Lấy ra danh sách tên những khách hàng có tên chứa chữ 'l' hoặc dùng gmail
2. Lấy ra danh sách sản phầm thêm vào ngày 30 hoặc có giá hơn 500$
3. Lấy danh sách sản phẩm có mã code chứa chữ 'a' và giảm giá hơn hoặc bằng 30%


SELECT firstName, lastName
FROM customers
WHERE (lastName LIKE '%l%') OR (firstName LIKE '%l%') OR (emailAddress LIKE '%gmail.com');

SELECT productName
FROM products
WHERE (dateAdded LIKE '%-%-30%') OR (listPrice > 500);

SELECT productName
FROM products
WHERE (productCode LIKE '%a%') AND (discountPercent >= 30);