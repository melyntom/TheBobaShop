# The Boba Shop

IST 4310 Group Project\
Project Team 9: Jessie Gonzalez, Edgar Ramirez, Ezra Ramos, Mary Lynn Tom\
The Boba Shop is a store page for a fictional bubble tea shop.

Features
* Full-stack development
* Responsive web design
* Functional registration form
* SQL database development
* PHP-connected to database
* Private hosting using Apache

Database Setup (FOR REFERENCE USE ONLY):

Start up MySQL/MariaDB in root user mode (commands/code to type will be tabbed over):\
(user is root, -p will ask for password that you set up in the earlier assignments)

	mysql -u root -p

Once MySQL/MariaDB is running, use the following commands to create the database and user:

	CREATE DATABASE boba_web_db;
	CREATE USER 'boba_user'@'localhost' IDENTIFIED BY 'BobaIsBest';
	GRANT ALL PRIVILEGES ON boba_web_db.* TO 'boba_user'@'localhost';
	FLUSH PRIVILEGES;
	USE boba_web_db;

After that, you'll have to set up
Database: boba_web_db
User: boba_user
Password: BobaIsBest
Database Host: localhost

Once the database is set up, you can copy + paste the code in the 'database.sql' file and run it.\
This will create the sign_up table. Using the registration form, users can enter data to be stored in the database.