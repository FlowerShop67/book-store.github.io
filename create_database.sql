CREATE DATABASE IF NOT EXISTS book_rental;
USE book_rental;

CREATE TABLE IF NOT EXISTS books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  author VARCHAR(100),
  category VARCHAR(100),
  status VARCHAR(50) DEFAULT 'ว่างให้เช่า'
);

INSERT INTO books (title, author, category, status) VALUES
('เพชรพระอุมา', 'พนมเทียน', 'ผจญภัย', 'ว่างให้เช่า'),
('Harry Potter', 'J.K. Rowling', 'แฟนตาซี', 'มีผู้เช่า'),
('สามก๊ก', 'หลอกว้านจง', 'ประวัติศาสตร์', 'ว่างให้เช่า');
