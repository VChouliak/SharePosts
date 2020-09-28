CREATE DATABASE IF NOT EXISTS shareposts;

use shareposts;

CREATE TABLE IF NOT EXISTS posts
(
	id INT auto_increment
		PRIMARY KEY,
	user_id INT,
	title VARCHAR(255),
	body TEXT,
	created_at DATETIME default CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS users
(
	id INT auto_increment PRIMARY KEY,
	name VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255) ,
	created_at DATETIME default CURRENT_TIMESTAMP
);