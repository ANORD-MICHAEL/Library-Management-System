
CREATE TABLE students (

    student_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100)

);

CREATE TABLE books (

    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    publication_year YEAR,
    batch_number VARCHAR(50),
    supervisor_number VARCHAR(50),
    status VARCHAR(20) DEFAULT 'Available'

);

CREATE TABLE borrow_requests (

    request_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    book_name VARCHAR(100),
    return_date DATE,
    status VARCHAR(20) DEFAULT 'Pending'

);

INSERT INTO students(username,password,full_name,email)

VALUES

('admin','12345','John Student','john@gmail.com');

INSERT INTO books(title,author,publication_year,batch_number,supervisor_number)

VALUES

('Database Systems','Abraham Silberschatz',2021,'B12','LIB-102'),

('Web Programming','John Duckett',2020,'A05','LIB-205'),

('Introduction to Java','Daniel Liang',2019,'C18','LIB-300');

