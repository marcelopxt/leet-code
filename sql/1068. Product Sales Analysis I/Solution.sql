# Write your MySQL query statement below
SELECT product_name, year, price
FROM Product P
INNER JOIN Sales S on P.product_id = S.product_id;