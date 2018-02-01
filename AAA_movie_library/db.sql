CREATE TABLE movie
(
  title VARCHAR(50),
  genre VARCHAR(50),
  Mdate DATE,
  language VARCHAR(50),
  director VARCHAR(50),
  cast VARCHAR(50),
  PRIMARY KEY(title),
  UNIQUE KEY(title)
);

  INSERT INTO movie(title, genre, Mdate, language, director, cast)
  VALUES('Fate/Stay Night: Heavens Feel', 'Anime', '2018-02-01', 'Japanese', 'Tomonori Sudoui', 'Noriko Shitaya');
  INSERT INTO movie(title, genre, Mdate, language, director, cast)
  VALUES('Along With The Gods: The Two Worlds', 'Action', '2018-01-18', 'Korean', 'KIM Yong-hwa', 'KIM Yong-hwa');
  INSERT INTO movie(title, genre, Mdate, language, director, cast)
  VALUES('Jumanji: Welcome to the Jungle', 'Adventure', '2017-12-21', 'English', 'Jake Kasdan', 'Dwayne Johnson');
  INSERT INTO movie(title, genre, Mdate, language, director, cast)
  VALUES('Insidious : The Last Key', 'Horror', '2018-01-04', 'English', 'Adam Robitel', 'Kirk Acevedo');
  INSERT INTO movie(title, genre, Mdate, language, director, cast)
  VALUES('Thaana Serndha Koottam', 'Drama', '2018-01-12', 'Tamil', 'Vignesh Shivn', 'Surya,Keerthi Suresh');
