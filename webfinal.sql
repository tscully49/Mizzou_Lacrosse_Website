USE tps9tb;

DROP TABLE IF EXISTS players;

CREATE TABLE players ( 
	player_id INT PRIMARY KEY AUTO_INCREMENT, 
	player_num INT NOT NULL, 
	name VARCHAR(50) NOT NULL, 
	year VARCHAR(5) NOT NULL, 
	eligability VARCHAR(5) NOT NULL, 
	position VARCHAR(10) NOT NULL, 
	height VARCHAR(10) NOT NULL, 
	weight INT NOT NULL, 
	highschool VARCHAR(60) NOT NULL,
	home_town VARCHAR(100) NOT NULL
);

INSERT INTO players VALUES(default, 2, "Drew Becker", "Fr", "Fr", "LSM", '6\'4"', 200, "Arrowhead High School", "Hartland, WI");
INSERT INTO players VALUES(default, 26, "Phil Bergman", "So", "So", "FOS", '5\'8"', 155, "Strath Haven", "Media, PA");
INSERT INTO players VALUES(default, 28, "Ryan Biek", "Jr", "Jr", "A", '5\'10"', 170, "Wayzata High School", "Orono, MN");
INSERT INTO players VALUES(default, 37, "Ryan Bolin", "Fr", "Fr", "DM", '5\'8"', 174, "Prarie Ridge High School", "Crystal Lake, IL");
INSERT INTO players VALUES(default, 11, "Mike Cherney", "Jr", "Jr", "M", '5\'10"', 170, "Buffalo Grove", "Arlington Heights, IL");
INSERT INTO players VALUES(default, 12, "Devan Dupre", "Fr", "Fr", "M", '6\'0"', 225, "Lafayette High School", "St. Louis, MO");
INSERT INTO players VALUES(default, 16, "Alan Foley", "Fr", "Fr", "M", '5\'7"', 155, "St. John Vianney High School", "St. Louis, MO");
INSERT INTO players VALUES(default, 22, "Mike Garside", "Jr", "So", "M", '6\'3"', 220, "Naperville Central High School", "Naperville, IL");
INSERT INTO players VALUES(default, 24, "John Gilmore", "So", "So", "A", '5\'7"', 160, "Hickman Highschool", "Columbia, MO");
INSERT INTO players VALUES(default, 34, "Connor Harris", "So", "Fr", "A", '5\'10"', 170, "Hickman High School", "Columbia, MO");
INSERT INTO players VALUES(default, 8, "Tyler Jacobsen", "Fr", "Fr", "D", '6\'4"', 200, "Benilde St. Margaret's High School", "Mound, MN");
INSERT INTO players VALUES(default, 39, "Marcus Jones", "Fr", "Fr", "D", '6\'1"', 225, "Oaks Christian High School", "Agoura, CA");
INSERT INTO players VALUES(default, 4, "Kevin Langerud", "So", "So", "A", '5\'11"', 150, "Armstrong High School", "Plymouth, MN");
INSERT INTO players VALUES(default, 1, "Gerry Leonard", "Sr", "Sr", "M", '5\'11"', 190, "Christian Brothers College High School", "Glen Rock, NJ");
INSERT INTO players VALUES(default, 19, "Mike Monaghan", "Jr", "Jr", "M", '6\'2"', 205, "Downers Grove High School", "Darien, IL");
INSERT INTO players VALUES(default, 13, "Max Pauley", "Fr", "Fr", "M", '6\'2"', 175, "DeSmet Jesuit High School", "St. Charles, MO");
INSERT INTO players VALUES(default, 17, "Grant Pieper", "So", "So", "M", '6\'0"', 170, "Plano Senior High School", "Plano, TX");
INSERT INTO players VALUES(default, 5, "Thomas Scully", "So", "So", "LSM", '6\'4"', 190, "Parkway Central High School", "Chesterfield, MO");







SELECT player_id, name, player_num FROM players;


