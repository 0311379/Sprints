

SELECT
	COUNT(*) AS 'Number of events',
	MAX(e.EventDate) AS 'Last date',
	MIN(e.EventDate) AS 'First date'
FROM
	tblEvent AS e