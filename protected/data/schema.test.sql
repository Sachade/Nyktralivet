DROP TABLE test;
DROP TABLE tbl_user;

CREATE TABLE test (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    text VARCHAR(300) NOT NULL
);

INSERT INTO test (text) VALUES ('Denna text är från sqlite');