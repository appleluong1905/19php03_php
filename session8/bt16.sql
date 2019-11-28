-- cau 1
SELECT productName FROM products 
INNER JOIN categories ON products.categoryID = categories.categoryID 
WHERE categoryName = 'Guitars'
-- cau 2