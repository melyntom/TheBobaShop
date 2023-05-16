CREATE TABLE sign_up (
   user_id    INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
   first_name VARCHAR(50) NOT NULL,
   last_name  VARCHAR(50) NOT NULL,
   email      VARCHAR(75) NOT NULL
);

INSERT INTO sign_up (user_id,first_name,last_name,email) VALUES (1, 'Edgar', 'Alatorre', '123fake@gmail.com');