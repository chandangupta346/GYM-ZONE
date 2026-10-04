CREATE DATABASE gym_directory;

USE gym_directory;

CREATE TABLE gyms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gym_name VARCHAR(100),
    district VARCHAR(100),
    address TEXT,
    phone VARCHAR(20),
    map_link TEXT
);