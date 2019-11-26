create table if not exists `GameData`(
    `id` int auto_increment not null,
    `move1` varchar(2),  `move2` varchar(2),
    `move3` varchar(2), `move4` varchar(2),
    `move5` varchar(2),`move6` varchar(2),
    `move7` varchar(2),`move8` varchar(2),
    `move9` varchar(2), PRIMARY KEY (`id`),
    `pid1` int, `pid2` int
)
/*Query to set up intial game table in DB*/