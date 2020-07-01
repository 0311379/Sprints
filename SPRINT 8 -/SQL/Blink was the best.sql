
USE DoctorWho

SELECT


	a.AuthorName,


	COUNT(*) AS 'Episodes',

	MIN(e.EpisodeDate) AS 'Earliest date',
	MAX(e.EpisodeDate) AS 'Latest date'


FROM
	tblAuthor AS a
	INNER JOIN tblEpisode AS e ON a.AuthorId = e.AuthorId

GROUP BY

	a.AuthorName

ORDER BY
	
	Episodes DESC

