create database psi18prog12;

use psi18prog12

create table items (
  id int not null auto_increment primary key,
  name varchar(255),
  url varchar(1023),
  img varchar(1023),
  category varchar(255),
  price int,
  min_age int,
  max_age int,
  gender int,
  rel int
);
