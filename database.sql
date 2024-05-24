CREATE TABLE sunrise_sunset_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    sunrise TIME NOT NULL,
    sunset TIME NOT NULL
);
