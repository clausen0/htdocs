create database if not exists `BuSy`;

use `BuSy`;

create table if not exists `Firmaer`(
    `id` INT not null auto_increment,
    `Navn` VARCHAR(50) not null,
    `Adresse` VARCHAR(50) not null,
    `Orgnummer` INT not null,
    `Nummer` VARCHAR(8) not NULL,
    `web` VARCHAR(50) not null,
    `KundeType` VARCHAR(50) not null,
    primary key(`id`)
);

create table if not exists  `Personer`(
    `id` INT not null auto_increment,
    `Navn` varchar(50) not null,
    `Epost` varchar(50) not null,
    `Nummer` int not null, 
    `kjønn` varchar(25) not null,
    `stilling` varchar(50),
    `Firma_Id` int,
    primary key(`id`),
    foreign key(`Firma_Id`) references `Firmaer`(`id`)
);


create table if not exists `Produkt`(
    `id` INT not null auto_increment,
    `produktbetegnelse` varchar not null,
    `PrisInn` varchar not null,
    `PrisUt` varchar not null,
    `Levrandør` varchar not null,
    primary key (`id`),
    foreign key(`Levrandør`) references 'Firmaer'(`id`)
)