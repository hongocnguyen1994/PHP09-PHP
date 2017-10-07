SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY productName

/*Sắp xếp bảng với giá trị giảm dần theo listPrice*/
SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY listPrice DESC
/*Sắp xếp bảng với giá trị tăng dần theo discountPercent và giảm dần theo listPrice*/
SELECT productName, listPrice, discountPercent
FROM products
ORDER BY discountPercent, listPrice DESC