CREATE DATABASE mvc;

USE mvc;

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    titre VARCHAR(255) NOT NULL
);
INSERT INTO articles (titre) VALUES 
('Article_1'),
('Article_2'),
('Article_3');
