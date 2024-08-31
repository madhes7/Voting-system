
#create a database voting

create database voting;

#create a user info table


create table users (username varchar(100),firstname varchar(100),lastname varchar(100),phonenumber varchar(100),email varchar(100),anumber varchar(100),dateo int(100), month int(100), year int(100),gender varchar(100),address varchar(100),city varchar(100),district varchar(100),state varchar(100),pincode varchar(100),image blob ,flag int(10));

#create table admin
create table admins(uname varchar(100),password varchar(100),congress int(10),dmk int(10),cpi int(10),aiadmk int(10),bjp int(10),nota int(10));

#insert to admin
insert into admins(uname,password,congress,dmk,cpi,aiadmk,bjp,nota) values("bhavani","sathish",0,0,0,0,0,0);