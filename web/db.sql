DROP table guestbook;

Create TABLE guestbook (
  id serial NOT NULL,
  name varchar(150) DEFAULT NULL,
  body text
);
