-- Basic SELECT
SELECT * FROM students;

-- Select specific columns
SELECT id, name, marks FROM students;

-- With condition
SELECT * FROM students WHERE marks > 60;

-- Order results
SELECT * FROM students ORDER BY name ASC;

-- Limit results
SELECT * FROM students LIMIT 5;