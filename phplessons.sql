create table posts(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  subject varchar(128) not null,
  content varchar(1000) not null,
  date datetime not null
);

insert into posts (subject, content, date)
  values (
    'this is the subject',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.',
    '2015-11-14 15:22:01'
  );

update posts
  set subjects='This is a test', content='This is the content'
  where id='1'

delete from posts
  where id='1'

select * from posts order by id asc
select * from posts order by id desc

create table users (
  user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  user_first varchar(256) not null,
  user_last varchar(256) not null,
  user_email varchar(256) not null,
  user_uid varchar(256) not null,
  user_pwd varchar(256) not null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
  VALUES ('Daniel', 'Nielse', 'usemmtuts@gmail.com', 'Admin', 'test123');
