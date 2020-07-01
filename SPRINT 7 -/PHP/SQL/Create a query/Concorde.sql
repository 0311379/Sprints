

USE History


SELECT 
	EventDate,
	EventName,
	CountryId
FROM
	tblEvent
WHERE
	Description LIKE '%Concorde%' AND 
	CountryId=6