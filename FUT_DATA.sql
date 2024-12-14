CREATE DATABASE backend_ultimate_team;
USE backend_ultimate_team;

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo VARCHAR(255),
    position VARCHAR(100),
    statue VARCHAR(100) UNIQUE,
    deleted_at DATE
);

CREATE TABLE goalkeeper (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    rating INT CHECK (rating BETWEEN 10 AND 99),
    diving INT CHECK (diving BETWEEN 10 AND 99),
    handling INT CHECK (handling BETWEEN 10 AND 99),
    kicking INT CHECK (kicking BETWEEN 10 AND 99),
    reflexes INT CHECK (reflexes BETWEEN 10 AND 99),
    speed INT CHECK (speed BETWEEN 10 AND 99),
    positioning INT CHECK (positioning BETWEEN 10 AND 99),
    FOREIGN KEY (id_player) REFERENCES players(id)
);

CREATE TABLE other_players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    rating INT CHECK (rating BETWEEN 10 AND 99),
    pace INT CHECK (pace BETWEEN 10 AND 99),
    shooting INT CHECK (shooting BETWEEN 10 AND 99),
    passing INT CHECK (passing BETWEEN 10 AND 99),
    dribbling INT CHECK (dribbling BETWEEN 10 AND 99),
    defending INT CHECK (defending BETWEEN 10 AND 99),
    physical INT CHECK (physical BETWEEN 10 AND 99),
    FOREIGN KEY (id_player) REFERENCES players(id)
);

CREATE TABLE clubs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    name_club VARCHAR(100),
    logo VARCHAR(255),
    FOREIGN KEY (id_player) REFERENCES players(id)
);

CREATE TABLE nationality (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    nom_natio VARCHAR(100),
    flag VARCHAR(255),
    FOREIGN KEY (id_player) REFERENCES players(id)
);