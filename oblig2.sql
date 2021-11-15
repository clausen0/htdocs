create database AuthorsAndBooks

create table Authors(
    -> id int primary key auto_increment,
    -> ForNavn varchar(50) not null,
    -> EtterNavn varchar(50),
    -> Nasjonalitet varchar(25),
    -> Adresse varchar(30),
    -> PostNummer varchar(8),
    -> Telefon varchar(12),
    -> Epost varchar(25),
    -> SivilStatus varchar(25),
    -> );


use Authors

insert into Authors(ForNavn, EtternNavn, Nasjonalitet, Adresse, PostNummer, PostSted, Telefon, Epost, SivilStatus)
    -> values("Joanne", "rowling", "Britisk", "", "", "", "", "", "ukjent")

create table Books(
    -> id int
    -> Tittel varchar(50) not null,
    -> Utgivelsesår int,
    -> ISBN int,
    -> foreign key(ForfatterID) refrences Authors(id)
    -> );