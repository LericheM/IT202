create table if not exists `Players`(
            `id` int auto_increment not null,
            `username` varchar(30) not null unique,
            `pin` int default 0,
            `token` varchar(16),
            PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci
