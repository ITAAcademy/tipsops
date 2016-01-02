CREATE TABLE tips_name (
	ID INT AUTO_INCREMENT PRIMARY KEY,
	Name_Tips VARCHAR(50) NOT NULL,
	Create_Tips DATETIME,
	Users VARCHAR(50) NOT NULL
	);
CREATE TABLE tips_block (
	ID INT AUTO_INCREMENT PRIMARY KEY,
	ID_Tips INT NOT NULL,
	Type_Tips VARCHAR(50) NOT NULL,
	Text_Tips VARCHAR(255) NOT NULL
	);

START TRANSACTION;
INSERT INTO tips_name VALUE (NULL,'FIRST',NOW(),'Sasha');
INSERT INTO tips_block VALUE (NULL,(SELECT MAX(ID) FROM tips_name),'Fix','ksbndvrevk;breve;dbnvrbf;');
COMMIT;

START TRANSACTION;
UPDATE tips_name SET ... = ... WHERE ... = ...;
UPDATE tips_block SET ... = ... WHERE ... = ...;
COMMIT;

START TRANSACTION;
DELETE FROM tips_name WHERE ... = ...;
DELETE FROM tips_block WHERE ... = ...;
COMMIT;

SELECT Name_Tips.tips_name, Type_Tips.tips_block, Text_Tips.tips_block
	FROM tips_name, tips_block
	WHERE ID.tips_name=ID_Tips.tips_block;