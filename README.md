# The Boba Shop

IST 4310 Group Project\
Project Team 9: Jessie Gonzalez, Edgar Ramirez, Ezra Ramos, Mary Lynn Tom \
The Boba Shop is a store page for a fictional bubble tea shop.

Features
* Full-stack development
* Responsive web design
* Functional user login form
* SQL database development
* PHP-connected to database
* Private hosting using Apache

References:

https://www.w3schools.com/css/css_rwd_grid.asp


Start up MariaDB in root user mode (Commands/Code to type will be tabbed over):

	mysql -u root -p	(user is root, -p will ask for password that you set up in the earlier assignments)

Once MariaDB is running, use the following commands to create the database and user:

	CREATE DATABASE boba_web_db;
	CREATE USER 'boba_user'@'localhost' IDENTIFIED BY 'BobaIsBest';		(The identified by is the password to assign)
	GRANT ALL PRIVILEGES ON boba_web_db.* TO 'boba_user'@'localhost';
	FLUSH PRIVILEGES;
	USE boba_web_db;							(This will load that database)

After all that, you'll have the following set up:
Database: 	boba_web_db
User:		boba_user
Password:	BobaIsBest
Database Host:	localhost


Once the database is set up, you can copy/paste the code in the sign_up.sql file (open as a txt file) and run it.
This will create the sign_up table to use with the Sign Up page that users will enter data into.
