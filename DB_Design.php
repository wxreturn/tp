<?php
/**********************************************************                                                                  
 *  
 *  FileName:  DB_Design.php
 *
 *  Author:  wxreturn
 *
 *  Version:  1.0
 *
 *  DateTime:  2018年10月10日 - 上午12:25:59
 *
 *  Description:  数据库设计文件
 *
 **********************************************************/

/**

create database wxreturn if not exists;

// 创建管理员表
create table if not exists think_admin(
    uid int primary key auto_increment,
    name varchar(32) not null,
    password char(32) not null
)engine=MyISAM character set utf8;


insert into think_admin(name, password) values('return', md5('10120000'));
insert into think_admin(name, password) values('love', md5('123456'));
insert into think_admin(name, password) values('wx', md5('loveheate'));
insert into think_admin(name, password) values('qyy', md5('724200'));
insert into think_admin(name, password) values('mxxp', md5('720038'));
  


 */