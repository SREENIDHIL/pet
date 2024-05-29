-- Active: 1712464836202@@127.0.0.1@3306@userregister
CREATE TABLE userdata (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);-- Active: 1712464836202@@127.0.0.1@3306@test

-- Insert data into the 'user' table
INSERT INTO userdata (username, email, password) VALUES ('Kyathi', 'lebakakyathi@gmail.com', 'K@lebaka');
INSERT INTO userdata (username, email, password) VALUES ('Shanvitha','shanvithag23@gmail.com','Shanvitha@23');
INSERT INTO userdata (username, email, password) VALUES ('Rishika','sairishika@gmail.com','Rishika@18');
INSERT INTO userdata (username, email, password) VALUES ('Prakashita','prakashitasingh@gmail.com','Prakashita@2');
INSERT INTO userdata (username, email, password) VALUES ('Hansika' ,'hansika@gmail.com','Hansika@Bose');
-- Select all data from the 'user' table
SELECT * FROM userdata