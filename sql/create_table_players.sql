create table if not exists 'Players'(
	'id' int auto_increment not null,
	'username' varchar(30) not null unique,
	'pin' int default 0,
	PRIMARY KEY ('id')
)