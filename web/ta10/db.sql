CREATE TABLE person (
    id      SERIAL  primary key,
    fname   VARCHAR(80),
    lname   VARCHAR(80),
    dob     DATE
);
insert into person (fname, lname, dob) values ('Daniel', 'O.', '03/17/1999');
insert into person (fname, lname, dob) values ('Beyonce', 'Knowles-Carter', '09/04/1981');
insert into person (fname, lname, dob) values ('Selena ', 'Quintanilla-Pérez', '04/16/1971');