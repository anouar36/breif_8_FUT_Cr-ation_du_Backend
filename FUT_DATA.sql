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



