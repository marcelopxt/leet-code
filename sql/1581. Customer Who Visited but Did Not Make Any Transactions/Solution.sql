SELECT V.customer_id, count(V.visit_id) as count_no_trans
FROM Visits V
LEFT JOIN Transactions T
USING(visit_id)
WHERE T.transaction_id IS NULL
GROUP BY V.customer_id