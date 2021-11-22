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

INSERT INTO Books(Tittel, Utgivelses, ISBN, ForfatterID) values
    ("Harry Potter og de vises sten", 1997, 9788202459772, 1),
    ("Harry Potter og dødskammeret", 1998, 9788202475994, 1),
    ("Tørst", 2017, 9788203361661, 2),
    ("Snømannen", 2007, 9788203192128, 2),
    ("Ringenes herre ringenes brorskap", 1954, 9788210047831, 3),
    ("Ringenes herre atter en konge", 1955, 9780008376147, 3),
    ("Percy Jackson og lyntyven", 2005, 9788251657730, 4),
    ("Percy jackson og monsternes hav", 2006, 9788251626323, 4),
    ("Dødslekene", 2008, 9788205383982, 5),
    ("Opp i flammer", 2010, 9788205397194, 5);

    select ForNavn, EtterNavn, Epost from Authors;

    select 