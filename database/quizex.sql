CREATE DATABASE quizex;
CREATE TABLE administrateur ( 
  adminId int PRIMARY KEY AUTO_INCREMENT,
  adminName varchar(255) ,
  email varchar(255),
  password varchar(255),
  dateOfBirth DATE,
  phoneNumber varchar(250),
  nationality varchar(255) );
CREATE TABLE utilisateur (
  userId int  PRIMARY KEY AUTO_INCREMENT, 
  userName varchar(255) ,
  email varchar(255),
  password varchar(255),
  dateOfBirth DATE,
  phoneNumber varchar(250),
  nationality varchar(255),
  role VARCHAR(255) NOT NULL;
);
CREATE TABLE cours(
  courId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  courName varchar(255) ,
  courDescription text (255),
  category varchar (255),
  startTime varchar(255),
  adminId int,
  FOREIGN KEY ( adminId )REFERENCES administrateur( adminId )
);
CREATE TABLE quiz(
  quizId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  courId int,
  FOREIGN KEY ( courId )REFERENCES cours( courId )
);
CREATE TABLE resultat(
  resultatId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  quizResult int ,
  quizId int,
  FOREIGN KEY ( quizId )REFERENCES quiz( quizId ),
  userId int,
  FOREIGN KEY ( userId )REFERENCES utilisateur( userId )
);
CREATE TABLE reponses(
  reponseId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  reponseContent varchar(255),
  status boolean,
  quizId int,
  FOREIGN KEY ( quizId )REFERENCES quiz( quizId ),
  questionsId int,
  FOREIGN KEY ( questionsId )REFERENCES questions( questionsId )
);
CREATE TABLE questions(
  questionsId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  questionContent varchar(255),
  quizId int,
  FOREIGN KEY ( quizId )REFERENCES quiz( quizId )
);
CREATE TABLE passedcours(
  passedcourId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  courProgress int,
  courId int,
  FOREIGN KEY ( courId )REFERENCES cours( courId ),
  userId int,
  FOREIGN KEY ( userId )REFERENCES utilisateur( userId )
);
CREATE TABLE passedquiz(
  passedquizId int  PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  quizresult int,
  quizId int,
  FOREIGN KEY ( quizId )REFERENCES quiz( quizId ),
  userId int,
  FOREIGN KEY ( userId )REFERENCES utilisateur( userId )
);

