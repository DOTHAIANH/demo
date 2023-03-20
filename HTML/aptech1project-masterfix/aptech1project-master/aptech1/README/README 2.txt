
    - index.php
    - category.php
    - detail.php
    - cart.php
    - checkout.php
    - complete.php
    - contact.php
    - register/login.php


    Database:
 CREATE DATABASE Aptech1Project

 CREATE TABLE category (
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(50)
)

CREATE TABLE admin (
	id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100),
    password varchar(100),
    admin_status int
)

---
create Table infoSite( 
    id int primary key AUTO_INCREMENT,
    address varchar(100),
    phone_number varchar(100),
    email varchar(100),
    title text,
    facebook varchar(100),
    instagram varchar(100),
    logo varchar(100)
)

CREATE TABLE contact (
	id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    phone_number varchar(15),
    content longtext,
    created_at datetime
)