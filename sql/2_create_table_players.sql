create table if not exists `Players`(
            `id` int auto_increment not null,
            `username` varchar(30) not null unique,
            `token` varchar(16),
            PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci
