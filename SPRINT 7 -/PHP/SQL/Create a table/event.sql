ALTER FUNCTION fnEventsForYear(
	@YearNumber int
)
RETURNS TABLE
AS
RETURN


	SELECT
		e.EventName,
		e.EventDetails,
		e.CategoryID,
		e.CountryID
	FROM
		tblEvent AS e
	WHERE
		year(e.EventDate) = @YearNumber

GO


SELECT 
	e.EventName,
	c.CategoryName,
	cy.CountryName
FROM
	dbo.fnEventsForYear(1918) AS e
	INNER JOIN tblCategory AS c ON e.CategoryID = c.CategoryID
	INNER JOIN tblCountry AS cy ON e.CountryID = cy.CountryID

