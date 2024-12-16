CREATE TABLE clubs(
 id         INT PRIMARY KEY AUTO_INCREMENT, 
 name_club  VARCHAR(255),
 logo       VARCHAR(255)
);
CREATE TABLE nationality(
 id         INT PRIMARY KEY AUTO_INCREMENT, 
 nom_natio  VARCHAR(255),
 flag       VARCHAR(255)
);
CREATE TABLE players (
 id int  PRIMARY KEY AUTO_INCREMENT , 
 name_player VARCHAR (255),
 photo       varchar (255),
 position    VARCHAR (255),
 statue      VARCHAR (255),
 deleted_at  DATE ,
 id_club     int ,
 id_natio    int ,
 FOREIGN KEY (id_club) REFERENCES clubs(id),
 FOREIGN KEY (id_natio) REFERENCES nationality(id)
);

CREATE TABLE GollKeper (
 id          int  PRIMARY KEY AUTO_INCREMENT , 
 rating      int  CHECK (rating >=10 and rating <= 99) ,
 diving      int  CHECK (diving >=10 and diving <= 99) ,
 reflexes    int  CHECK (reflexes >=10 and reflexes <= 99) ,
 handling    int  CHECK (handling >=10 and handling <= 99) ,
 speed       int  CHECK (speed >=10 and speed <= 99) ,
 positioning int  CHECK (positioning >=10 and positioning <= 99) ,
 id_player   int  ,
 FOREIGN KEY (id_player) REFERENCES players(id)
);

CREATE TABLE Other_players (
 id        int  PRIMARY KEY AUTO_INCREMENT , 
 rating    int CHECK (rating >=10 and rating <= 99),
 pace      int CHECK (pace >=10 and pace <= 99),
 shooting  int CHECK (shooting >=10 and shooting <= 99),
 passing   int CHECK (passing >=10 and passing <= 99),
 dribbling int CHECK (dribbling >=10 and dribbling <= 99),
 defending int CHECK (defending >=10 and defending <= 99),
 physical  int CHECK (physical >=10 and physical <= 99),
 id_player INT ,
 FOREIGN KEY (id_player) REFERENCES players(id)
);

INSERT INTO clubs (id, name_club, logo)  
VALUES  
(1, 'Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),  
(2, 'Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png');

INSERT INTO nationality (id, nom_natio, flag)  
VALUES  
(1, 'Germany', 'https://cdn.sofifa.net/flags/de.png'),  
(2, 'Slovenia', 'https://cdn.sofifa.net/flags/si.png');

INSERT INTO players (id, name_player, photo, position, statue, id_club, id_natio)  
VALUES  
(1, 'Joshua Kimmich', 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', NULL, 1, 1),  
(2, 'Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', NULL, 2, 2);


INSERT INTO Other_players (id, rating, pace, shooting, passing, dribbling, defending, physical, id_player)  
VALUES  
(1, 89, 70, 75, 88, 84, 84, 81, 1);  

INSERT INTO GollKeper (id, rating, diving, handling, reflexes, speed, positioning, id_player)  
VALUES  
(2, 91, 89, 90, 92, 50, 88, 2);






+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-- Insert into clubs table
INSERT INTO clubs (id, name_club, logo)  
VALUES  
(1, 'Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),  
(2, 'Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
(3, 'Manchester City', 'https://cdn.sofifa.net/meta/team/239/085/25_120.png'),
(4, 'Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
(5, 'Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
(6, 'Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
(7, 'Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
(8, 'Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
(9, 'Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
(10, 'Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
(11, 'Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
(12, 'Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png');

-- Insert into nationality table
INSERT INTO nationality (id, nom_natio, flag)  
VALUES  
(1, 'Argentina', 'https://cdn.sofifa.net/flags/ar.png'),  
(2, 'Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
(3, 'Belgium', 'https://cdn.sofifa.net/flags/be.png'),
(4, 'France', 'https://cdn.sofifa.net/flags/fr.png'),
(5, 'Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
(6, 'Germany', 'https://cdn.sofifa.net/flags/de.png'),
(7, 'Brazil', 'https://cdn.sofifa.net/flags/br.png'),
(8, 'Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
(9, 'Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
(10, 'Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
(11, 'Norway', 'https://cdn.sofifa.net/flags/no.png'),
(12, 'Canada', 'https://cdn.sofifa.net/flags/ca.png'),
(13, 'Italy', 'https://cdn.sofifa.net/flags/it.png'),
(14, 'Slovenia', 'https://cdn.sofifa.net/flags/si.png');

-- Insert into players table
INSERT INTO players (id, name_player, photo, position, statue, id_club, id_natio)  
VALUES  
(1, 'Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', NULL, 1, 1),  
(2, 'Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', NULL, 2, 2),  
(3, 'Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', NULL, 3, 3),  
(4, 'Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST', NULL, 4, 4),  
(5, 'Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB', NULL, 5, 5),  
(6, 'Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB', NULL, 4, 6),  
(7, 'Neymar Jr', 'https://cdn.sofifa.net/players/190/871/25_120.png', 'LW', NULL, 6, 7),  
(8, 'Mohamed Salah', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'RW', NULL, 5, 8),  
(9, 'Joshua Kimmich', 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', NULL, 7, 6),  
(10, 'Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', NULL, 8, 14),  
(11, 'Luka Modrić', 'https://cdn.sofifa.net/players/177/003/25_120.png', 'CM', NULL, 4, 9),  
(12, 'Vinicius Junior', 'https://cdn.sofifa.net/players/238/794/25_120.png', 'LW', NULL, 4, 7),  
(13, 'Brahim Diáz', 'https://cdn.sofifa.net/players/231/410/25_120.png', 'LW', NULL, 4, 10),  
(14, 'Karim Benzema', 'https://cdn.sofifa.net/players/165/153/25_120.png', 'ST', NULL, 10, 4),  
(15, 'Erling Haaland', 'https://cdn.sofifa.net/players/239/085/25_120.png', 'ST', NULL, 3, 11),  
(16, 'Golo Kanté', 'https://cdn.sofifa.net/players/215/914/25_120.png', 'CDM', NULL, 10, 4),  
(17, 'Alphonso Davies', 'https://cdn.sofifa.net/players/234/396/25_120.png', 'LB', NULL, 7, 12),  
(18, 'Yassine Bounou', 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK', NULL, 6, 10),  
(19, 'Bruno Fernandes', 'https://cdn.sofifa.net/players/212/198/25_120.png', 'CM', NULL, 9, 2),  
(20, 'Jadon Sancho', 'https://cdn.sofifa.net/players/233/049/25_120.png', 'LW', NULL, 9, 13),  
(21, 'Trent Alexander-Arnold', 'https://cdn.sofifa.net/players/231/281/25_120.png', 'RB', NULL, 5, 13),  
(22, 'Achraf Hakimi', 'https://cdn.sofifa.net/players/235/212/25_120.png', 'RB', NULL, 11, 10),  
(23, 'Youssef En-Nesyri', 'https://cdn.sofifa.net/players/235/410/25_120.png', 'ST', NULL, 12, 10),  
(24, 'Noussair Mazraoui', 'https://cdn.sofifa.net/players/236/401/25_120.png', 'LB', NULL, 9, 10),  
(25, 'Ismael Saibari', 'https://cdn.sofifa.net/players/259/480/25_120.png', 'CM', NULL, 7, 10),  
(26, 'Gianluigi Donnarumma', 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK', NULL, 11, 13);

-- Insert into Other_players table
INSERT INTO Other_players (id, rating, pace, shooting, passing, dribbling, defending, physical, id_player)  
VALUES  
(1, 93, 85, 92, 91, 95, 35, 65, 1),  
(2, 91, 84, 94, 82, 87, 34, 77, 2),  
(3, 91, 74, 86, 93, 88, 64, 78, 3),  
(4, 92, 97, 89, 80, 92, 39, 77, 4),  
(5, 90, 75, 60, 70, 72, 92, 86, 5),  
(6, 88, 82, 55, 73, 70, 86, 86, 6),  
(7, 90, 91, 83, 86, 94, 37, 61, 7),  
(8, 89, 93, 87, 81, 90, 45, 75, 8),  
(9, 89, 70, 75, 88, 84, 84, 81, 9),  
(10, 91, 89, 78, 90, 92, 50, 88, 10),  
(11, 88, 74, 78, 89, 90, 72, 65, 11),  
(12, 89, 91, 88, 85, 94, 39, 61, 12),  
(13, 82, 85, 74, 78, 85, 31, 56, 13),  
(14, 90, 77, 90, 83, 88, 40, 78, 14),  
(15, 91, 89, 94, 65, 80, 45, 88, 15),  
(16, 87, 77, 66, 75, 82, 88, 82, 16),  
(17, 84, 96, 68, 77, 82, 76, 77, 17),  
(18, 84, 81, 74, 77, 86, 38, 83, 18),  
(19, 88, 75, 85, 89, 84, 69, 77, 19);

