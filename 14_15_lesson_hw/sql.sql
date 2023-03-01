--lesson 14-a

SELECT courses.id,courses.name,lessons.title,lessons.description
FROM courses
INNER JOIN lessons ON courses.id = lessons.course_id


--lesson 14-b
SELECT students.id, students.name, students.surname, students.phone, students.country, courses.name, courses.date_start, courses.date_end
FROM student_courses
INNER JOIN students ON student_courses.student_id = students.id
INNER JOIN courses ON student_courses.course_id = courses.id

--lesson 15categories.name ,stores.name,stores.work_hours, currencies.name,currencies.unitcop


SELECT orders.id as "order id", customers.name as "customer name", customers.phone as "customer phone", products.name as "product name",product_prices.price,categories.name as "categories name", stores.name as "store name", stores.work_hours, currencies.name
FROM orders
         INNER JOIN customers ON customers.id  = orders.customer_id
         INNER JOIN order_product ON order_product.order_id = orders.id
         INNER JOIN products ON products.id = order_product.id
         INNER JOIN product_prices ON product_prices.id = products.id
         INNER JOIN categories ON categories.id = products.category_id
         INNER JOIN stores ON stores.id = product_prices.store_id
         INNER JOIN currencies ON currencies.id = product_prices.currency_id
-- я понял(увидел на уроке), что надо было использовать лефты, но сам посебе я до них не додумался, сдаю как было у меня (сокращениями не пользуюсь, они меня путают пока что)

