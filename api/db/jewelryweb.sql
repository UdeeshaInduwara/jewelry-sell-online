drop database jewelryweb;
create database jewelryweb;
use jewelryweb;

create table customer(
  custId varchar(100) primary key,
  custName varchar (100),
  country varchar (100),
  email varchar (100),
  password varchar (100)
);
create table favouriteJewelry(
  favJewId int AUTO_INCREMENT,
  custId varchar(100),
  jewId varchar (100),
  selectedDate date ,
  status varchar (100),
  CONSTRAINT PRIMARY KEY (favJewId),
  constraint foreign key(custId) references customer(custId) on delete cascade on update cascade
);
create table reservation(
  resId varchar (100) primary key ,
  custId varchar (100),
  resType varchar (100),
  resDate date ,
  constraint foreign key(custId) references customer(custId) on delete cascade on update cascade
);
create table payment(
  payId varchar (100) primary key ,
  resId varchar (100),
  advancePrice decimal (10,2),
  constraint foreign key (resId) references reservation(resId) on delete cascade on update cascade
);
create table jewelryType(
  jewTId varchar(100) primary key ,
  name varchar(100),
  qty int
);
create table jewelry(
  jewId varchar(100) primary key ,
  metal varchar(100),
  carat int,
  weight decimal(10,2),
  jewelrySize decimal(10,2),
  price decimal(10,2),
  jewTId varchar(100),
  imgPath varchar (255),
  jewDescription varchar (255),
  constraint foreign key(jewTId) references jewelryType(jewTId) on delete cascade on update cascade
);
create table jewelryPurchaseDetail(
  jewPId int AUTO_INCREMENT,
  resId varchar (100),
  jewId varchar(100),
  metal varchar(100),
  carat int,
  weight decimal(10,2),
  jewelrySize decimal(10,2),
  price decimal(10,2),
  jewTId varchar(100),
  CONSTRAINT PRIMARY KEY (jewPId),
  CONSTRAINT FOREIGN KEY (resId) REFERENCES reservation(resId) ON DELETE CASCADE ON UPDATE CASCADE
);