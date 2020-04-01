create database emptybelt default character set utf8;

use emptybelt;

create table beltOne(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);
create table beltTwo(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);
create table beltThree(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);
create table beltFour(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);
create table beltFive(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);
create table beltSix(
    id  int unsigned  key auto_increment,
    empty tinyint,
    spv float(7,4) default 0,
    dateandtime timestamp  default current_timestamp
);

insert into beltOne(empty)values(0);
insert into beltTwo(empty)values(0);
insert into beltThree(empty)values(1);
insert into beltFour(empty)values(0);
insert into beltFive(empty)values(0);
insert into beltSix(empty)values(1);

create table states(
    id  int unsigned  key auto_increment,
    state tinyint,
    dateandtime timestamp  default current_timestamp
);
insert into states(state)values(1);
insert into states(state)values(0);

create table idmanager(
    id  int unsigned  key auto_increment,
    pid int not null,
    state tinyint,
    dateandtime timestamp  default current_timestamp
);
