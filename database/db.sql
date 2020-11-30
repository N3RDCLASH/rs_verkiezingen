CREATE SCHEMA rs_verkiezingen;
CREATE TABLE rs_verkiezingen.district(
    district_id int auto_increment primary key,
    district_naam varchar(60)
);
CREATE TABLE rs_verkiezingen.gebruikers(
    gebruikers_id int auto_increment primary key,
    rol varchar(50),
    gebruikers_naam varchar(100),
    gebruikers_password varchar(255)
);
CREATE TABLE rs_verkiezingen.burgers(
    burger_id int auto_increment primary key,
    id_nummer varchar(50) UNIQUE,
    burger_password varchar(255),
    burger_jaardag date,
    district int,
    gestemd bit(1) DEFAULT 0,
    constraint FK_burger_district FOREIGN KEY (district) REFERENCES district(district_id) ON DELETE
    SET NULL
);
CREATE TABLE rs_verkiezingen.partij(
    partij_id int auto_increment primary key,
    partij_naam varchar(100),
    partij_afkorting varchar(50),
    aantal_stemmen int
);
CREATE TABLE rs_verkiezingen.kandidaten(
    kandidaat_id int auto_increment primary key,
    kandidaat_naam varchar(100),
    partij int,
    district int,
    aantal_stemmen int,
    constraint FK_kandidaat_partij FOREIGN KEY (partij) REFERENCES partij(partij_id) ON DELETE
    SET NULL
);
CREATE TABLE rs_verkiezingen.res_per_dis(
    stem_id int auto_increment primary key,
    partij int,
    stemmen int,
    constraint FK_partij FOREIGN KEY (partij) REFERENCES partij(partij_id) ON DELETE
    SET NULL
);