-- Run a script to work with the program on Lazarus.

CREATE DATABASE test;
USE test;

CREATE TABLE files (
  id_file int(11) NOT NULL,
  id_my int(11) NOT NULL,
  description text NOT NULL,
  name_origin text NOT NULL,
  path text NOT NULL,
  date_upload text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

CREATE TABLE myarttable (
  id int(11) NOT NULL,
  text text NOT NULL,
  description text NOT NULL,
  keywords text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

INSERT INTO myarttable (id, text, description, keywords) VALUES
(15, 'Ivanov', 'Engeneer', '2 class'),
(16, 'Smirnov', 'Cook', '5 level'),
(18, 'Petrov', 'Cleaner', 'none'),
(19, 'Nikitin', 'Programmer', 'High lev.'),
(20, 'Kozlovskiy', 'Actor', 'first');

ALTER TABLE files
  ADD PRIMARY KEY (id_file),
  ADD KEY id_my (id_my);

ALTER TABLE myarttable
  ADD PRIMARY KEY (id);

ALTER TABLE files
  MODIFY id_file int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE myarttable
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE files
  ADD CONSTRAINT files_ibfk_1 FOREIGN KEY (id_my) REFERENCES myarttable (id);
