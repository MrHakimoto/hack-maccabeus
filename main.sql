SELECT
composer,
count(Name) "Num Musicas",
sum(milliseconds/60000) AS timING,
sum(bytes/1024/1024) AS sizING
FROM tracks

WHERE(composer is not null)
GROUP BY composer
HAVING sizING <=128 and timING between 60 and 90
ORDER BY "Num Musicas"