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

INSERT INTO Authors(ForNavn, EtterNavn, Nasjonalitet, Adresse, PostNummer, Telefon, Epost, SivilStatus) values
    ("Joanne", "rowling", "Britisk", "", "", "", "", "ukjent"),
    ("Jo", "Nesbø", "Norsk", "", "", "", "", "ukjent"),
    ("John Ronald", "Reuel Tolkien", "Britisk", "", "", "", "", "ukjent"),
    ("Rick", "Riordan", "Amerikansk", "", "", "", "", "Gift"),
    ("Suzanne", "Collins", "Amerikansk", "", "", "", "", "Gift");



create table if not exists Books(
    id int,
    Tittel varchar(50) not null,
    Utgivelses int,
    ISBN int,
    ForfatterID int,
    foreign key(ForfatterID) references Authors(id)
);