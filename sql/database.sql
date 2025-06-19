-- Ma'lumotlar bazasini yaratish
CREATE DATABASE IF NOT EXISTS gospad CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Ma'lumotlar bazasidan foydalanish
USE gospad;

-- Jadvalni yaratish
CREATE TABLE IF NOT EXISTS words (
    id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Admin jadvallarni yaratish
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Namuna ma'lumotlar
INSERT INTO words (keyword, description) VALUES
('Salom', 'Bu salomlashuv so''zi.'),
('Dunyo', 'Yer sayyorasi yoki umumiy olam.');

-- Admin uchun namuna (parol: "admin123" ning hash'i)
INSERT INTO admins (username, password) VALUES
('admin', '$2y$10$YOUR_HASHED_PASSWORD');