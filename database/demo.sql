create database cuahangsach default character set utf8 collate utf8_unicode_ci;
use cuahangsach;

create table if not exists account (
	id int primary key auto_increment,
	name varchar(100) not null,
    email varchar(100) not null unique, 
    phone varchar(100) not null unique,
    password varchar(100) not null,
    address varchar(255) null,
    role varchar(50) default 'customer',
	status tinyint(1) default '1' comment '1 là ok, 0 bị khoá',
	created_at date default current_timestamp(),
	updated_at date default now()
)ENGINE = InnoDB;

create table if not exists category (
	id int primary key auto_increment,
	name varchar(100) not null unique,
	status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
	prioty tinyint default '0',
	created_at date default current_timestamp(),
	updated_at date default now()
)ENGINE = InnoDB;

create table if not exists banner (
	id int primary key auto_increment,
	name varchar(200) not null,
	image varchar(200) not null,
	link varchar(200) not null default '#',
	description varchar(200),
	status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
	prioty tinyint default '0',
	created_at date default current_timestamp(),
	updated_at date default now()
)ENGINE = InnoDB;

create table if not exists product (
	id int primary key auto_increment,
	name varchar(200) not null,
	author varchar(300) not null,
	image varchar(200) not null,
    sale_price float(9,3) default '0',
    price float(9,3) not null,
	description varchar,
	available int default '0',
	page int default '0',
	weight int default '0',
    image_list text,
	status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
	category_id int not null,
	created_at date default current_timestamp(),
	updated_at date default now(),
    foreign key (category_id) references category (id) 
)ENGINE = InnoDB;

create table if not exists `order` (
	id int primary key auto_increment,
	name varchar(100) not null,
    email varchar(100) not null ,
    phone varchar(100) not null,
    address varchar(255) null,
    note text,
	status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
    customer_id int not null,
	created_at date default current_timestamp(),
	updated_at date default now()
    
)ENGINE = InnoDB;

create table if not exists order_detail (
	order_id int not null,
    product_id int not null,
    quantity int not null,
    price float not null,
    foreign key (order_id) references `order`(id),
    foreign key (product_id) references product(id)
)ENGINE = InnoDB;