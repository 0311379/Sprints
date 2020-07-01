
SELECT


	CASE
		WHEN year(e.EventDate) < 1800 THEN '18th century'
		WHEN year(e.EventDate) < 1900 THEN '19th century'
		WHEN year(e.EventDate) < 2000 THEN '20th century'
		ELSE '21st century'
	END AS Century,

	COUNT(*) AS 'Number events'

FROM
	tblEvent AS e
GROUP BY


	CUBE(
		CASE
			WHEN year(e.EventDate) < 1800 THEN '18th century'
			WHEN year(e.EventDate) < 1900 THEN '19th century'
			WHEN year(e.EventDate) < 2000 THEN '20th century'
			ELSE '21st century'
		END 
	)
ORDER BY
	Century