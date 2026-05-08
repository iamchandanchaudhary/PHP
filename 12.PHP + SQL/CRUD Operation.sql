CREATE TABLE students (
  id      INT PRIMARY KEY AUTO_INCREMENT,
  name    VARCHAR(50) NOT NULL,
  course  VARCHAR(30),
  marks   FLOAT,
  dob     DATE
);

INSERT INTO students (name, course, marks, dob)
VALUES ('Chandan', 'BCA', 85.5, '2003-05-15');

-- Insert multiple rows at once
INSERT INTO students (name, course, marks)
VALUES ('Chandan', 'BCA', 78),
       ('Priya', 'MCA', 91);
        
  UPDATE students
  SET marks = 90, course = 'BCA'
  WHERE id = 1;

-- Delete a specific row
DELETE FROM students WHERE id = 3;

-- Delete all rows (table structure remains)
DELETE FROM students;

-- Drop the entire table
DROP TABLE students;
