# Write your MySQL query statement below
SELECT unique_id, name
FROM EmployeeUNI
RIGHT JOIN Employees USING(id);