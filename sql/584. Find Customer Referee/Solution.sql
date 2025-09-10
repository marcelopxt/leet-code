# Write your MySQL query statement below
SELECT name
FROM Customer
where referee_id is null
OR referee_id != 2;