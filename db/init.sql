/* create sqlllite database.db */
-- create database
-- SQLite version 3.16.0 2016-12-29 19:48:46
-- Enter ".help" for usage hints.
-- Connected to a transient in-memory database.
-- Use ".open FILENAME" to reopen on a persistent database.
-- sqlite> ... many SQL commands omitted ...
-- sqlite> .save ex1.db
-- sqlite>

/* create database and tables via command line:
first line like: CREATE TABLE `users` (
second line like: `user_id` int(11) PRIMARY KEY,
last line like ); */

-- CREATE TABLE `users` (
--   `user_id` integer PRIMARY KEY AUTOINCREMENT,
--   `first_name` varchar(50) NOT NULL,
--   `last_name` varchar(50) NOT NULL,
--   `email` varchar(50) NOT NULL
-- );
