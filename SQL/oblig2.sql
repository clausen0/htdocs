create database if not exists AuthorsAndBooks;
use AuthorsAndBooks;

create table if not exists Authors(
    id int primary key auto_increment,
    ForNavn varchar(50) not null,
    EtterNavn varchar(50),
    Nasjonalitet varchar(25),
    Adresse varchar(30),
    PostNummer varchar(8),
    Telefon varchar(12),
    Epost varchar(25),
    SivilStatus varchar(25)
);

insert into Authors(ForNavn, EtternNavn, Nasjonalitet, Adresse, PostNummer, PostSted, Telefon, Epost, SivilStatus) values
    ("Joanne", "rowling", "Britisk", "", "", "", "", "", "ukjent"),
    ("Jo", "Nesbø", "Norsk", "", "", "", "", "", "ukjent");



create table if not exists Books(
    id int,
    Tittel varchar(50) not null,
    Utgivelses int,
    ISBN int,
    ForfatterID int,
    foreign key(ForfatterID) references Authors(id)
);