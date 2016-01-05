--/////////////////////INSERT TABLE tips_type///////////////////////////
INSERT INTO tips_type VALUES 	(NULL, 'Text', 'text'),
								(NULL, 'Text as Code', 'text and cod'),
								(NULL, 'Header', 'header'),
								(NULL, 'Tips', 'tips'),
								(NULL, 'Attention', 'attention'),
								(NULL, 'Comparison', 'comparison'),
								(NULL, 'Ad_unit', 'ad_unit');

--//////////////////TRANSACTION///////////////////////////////////////

--INSERT
START TRANSACTION;
INSERT INTO tips_name VALUE (NULL,'fours',NOW(),'Katyu');
INSERT INTO tips_block VALUE (NULL,(SELECT MAX(id) FROM tips_name),
							(SELECT id FROM tips_type WHERE types = 'comparison'),'1354354354468464hgjkgjkgjkgkjgjkjhvjh');
COMMIT;


--UPDATE
UPDATE tips_name SET users = 'Brezdenyuk', creates = NOW() WHERE id = 2;
UPDATE tips_name SET users = 'Olexandr', creates = NOW() WHERE users = 'Sasha';
UPDATE tips_name SET name = 'CHANGE', creates = NOW() WHERE id = 2;

--DELETE

START TRANSACTION;
DELETE FROM tips_name WHERE id = 4;
DELETE FROM tips_block WHERE id_Tips = 4;
COMMIT;


-- SELECT
SELECT tips_name.name, tips_block.texts, tips_type.types
	FROM tips_name, tips_block, tips_type
	WHERE tips_name.id = tips_block.id_Tips AND
			tips_block.id_Type = tips_type.id;