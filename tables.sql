create table posts
(
    id         bigint unsigned auto_increment
        primary key,
    title      varchar(1024)                        not null,
    body       longtext                             null,
    created_at datetime default current_timestamp() null,
    updated_at datetime default current_timestamp() null on update current_timestamp()
);


