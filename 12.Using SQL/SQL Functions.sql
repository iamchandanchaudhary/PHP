SELECT UPPER(name), LENGTH(name) FROM students;
SELECT CONCAT(name, ' - ', course) AS info FROM students;

SELECT NOW();               -- 2026-05-06 14:30:00
SELECT YEAR(dob) FROM students;
SELECT DATEDIFF(NOW(), dob) FROM students;
