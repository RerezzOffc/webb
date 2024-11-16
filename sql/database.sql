-- /sql/database.sql
CREATE DATABASE IF NOT EXISTS user_management;

USE user_management;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    domain_custom VARCHAR(255) DEFAULT 'https://www.namadomain.com',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contoh data pengguna
INSERT INTO users (username, password, email, domain_custom)
VALUES ('admin', 'admin123', 'admin@domain.com', 'https://www.admin-domain.com');
