
CREATE DATABASE Biblioteca;
USE Biblioteca;

CREATE TABLE Autor(
	Id        INT PRIMARY KEY AUTO_INCREMENT,
	NomeAutor VARCHAR(155) NOT NULL
);

CREATE TABLE Livro(
	Id		  INT PRIMARY KEY AUTO_INCREMENT,
    NomeLivro VARCHAR(155) NOT NULL,
    IdAutor   INT,
    Ano       DATE,
    Descricao VARCHAR(255),
    
    FOREIGN KEY Livro(IdAutor) REFERENCES Autor(Id)
);

INSERT INTO Autor VALUES 
(null, 'João Silva'),
(null, 'Maria Rodrigues'),
(null, 'John Smith'),
(null, 'Anna Müller'),
(null, 'Carlos Fernandez'),
(null, 'Sophie Dubois'),
(null, 'Hiroshi Tanaka'),
(null, 'Elena Petrov'),
(null, 'Marta Gonzalez'),
(null, 'Chen Wei');

SELECT * FROM Autor;


INSERT INTO Livro VALUES 
(null, 'Livro A',  1, '2000-01-01', 'Descrição do Livro A.'),
(null, 'Livro B',  2, '2005-02-15', 'Descrição do Livro B.'),
(null, 'Livro C',  3, '2012-07-10', 'Descrição do Livro C.'),
(null, 'Livro D',  4, '1998-11-30', 'Descrição do Livro D.'),
(null, 'Livro E',  5, '1987-06-22', 'Descrição do Livro E.'),
(null, 'Livro F',  6, '2010-04-18', 'Descrição do Livro F.'),
(null, 'Livro G',  7, '1975-09-05', 'Descrição do Livro G.'),
(null, 'Livro H',  8, '2002-03-27', 'Descrição do Livro H.'),
(null, 'Livro I',  9, '2019-08-14', 'Descrição do Livro I.'),
(null, 'Livro J', 10, '1985-12-10', 'Descrição do Livro J.'),
(null, 'Livro K',  1, '2008-07-03', 'Descrição do Livro K.'),
(null, 'Livro L',  2, '2015-09-20', 'Descrição do Livro L.'),
(null, 'Livro M',  3, '1995-04-12', 'Descrição do Livro M.'),
(null, 'Livro N',  4, '1980-11-08', 'Descrição do Livro N.'),
(null, 'Livro O',  5, '2006-06-25', 'Descrição do Livro O.'),
(null, 'Livro P',  6, '2017-01-17', 'Descrição do Livro P.'),
(null, 'Livro Q',  7, '1978-12-05', 'Descrição do Livro Q.'),
(null, 'Livro R',  8, '1992-03-09', 'Descrição do Livro R.'),
(null, 'Livro S',  9, '2013-08-28', 'Descrição do Livro S.'),
(null, 'Livro T', 10, '1989-05-16', 'Descrição do Livro T.');

SELECT * FROM Livro;
