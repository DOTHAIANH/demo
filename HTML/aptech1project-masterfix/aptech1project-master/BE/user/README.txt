create database aptech1project

CREATE TABLE user (
	id INt PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    password varchar(30),
  	created_at datetime
)

CREATE TABLE admin (
	id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100),
    password varchar(100),
    admin_status int
)

