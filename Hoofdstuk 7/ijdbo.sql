USE master
GO
CREATE DATABASE ijdb
GO
Use ijdb
GO
CREATE TABLE dbo.joke(
id int IDENTITY(1,1) NOT NULL,
joketext varchar(max) NOT NULL,
jokeclou varchar(512) NOT NULL,
jokedate datetime NOT NULL,
CONSTRAINT PK_joke_id PRIMARY KEY
(
id ASC
))
GOUse ijdb
GO
INSERT into dbo.joke VALUES
('Er staan 2 domme blondjes bij het stoplicht. Zegt de een: \''Het is
groen.\','Zegt de ander na even nadenken: uhm een kikker?','2020-5-6')
GO