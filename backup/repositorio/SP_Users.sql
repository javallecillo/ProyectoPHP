DELIMITER //
CREATE PROCEDURE SP_User (
	IN _Id INT,
	IN _UserName VARCHAR(60),
	IN _NameFull VARCHAR(120),
	IN _Password VARCHAR(60),
	IN _Email VARCHAR(120),
	IN _Phone VARCHAR(20),
	IN _Category_Id INT
) 
BEGIN

	DECLARE _Exists INTEGER;
	SELECT COUNT(Id) FROM Users WHERE Id = _Id INTO _Exists;
	
	IF _Exists > 0 THEN
		UPDATE Users SET UserName = _UserName, NameFull = _NameFull, `Password` = _Password, Email = _Email, Phone = _Phone, Category_Id = _Category_Id WHERE Id = _Id;
		
	ELSE
		INSERT INTO Users (Id, UserName, NameFull, `Password`, Email, Phone, Category_Id) VALUES (_Id, _UserName, _NameFull, _Password, _Email, _Phone, _Category_Id);	 
	END IF;
END //