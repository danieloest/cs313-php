CREATE TABLE speaker (
    speakerID   int primary key,
    speaker     VARCHAR(80),
    title       VARCHAR(80)
);

INSERT INTO speaker VALUES (0, 'Nelson', 'Prophet');
INSERT INTO speaker VALUES (1, 'Oaks', 'First Counselor');
INSERT INTO speaker VALUES (2, 'Eyring', 'Second Counselor');
SELECT * FROM speaker;


CREATE TABLE conference_session (
    sessionID   int primary key,
    conference_session     VARCHAR(80), -- Day/time
    confernece              VARCHAR(80) -- Month/Year
);

INSERT INTO conference_session VALUES (0, 'Saturday Morning', 'October 2019');
INSERT INTO conference_session VALUES (1, 'Saturday Afternoon', 'October 2019');
INSERT INTO conference_session VALUES (2, 'Sunday Morning', 'October 2019');
INSERT INTO conference_session VALUES (3, 'Sunday Afternoon', 'October 2019');
INSERT INTO conference_session VALUES (4, 'Saturday Morning', 'April 2019');
INSERT INTO conference_session VALUES (5, 'Saturday Afternoon', 'April 2019');
INSERT INTO conference_session VALUES (6, 'Sunday Morning', 'April 2019');
INSERT INTO conference_session VALUES (7, 'Sunday Afternoon', 'April 2019');

SELECT * FROM conference_session;

CREATE TABLE talk (
    talkID int primary key,
    title VARCHAR(80),
    speakerID int references speaker(speakerID),
    sessionID int references conference_session(sessionID)
);


INSERT INTO talk VALUES (0, 'Amazing Talk', 0, 0);
INSERT INTO talk VALUES (1, 'Spiritual Talk', 1, 2);
INSERT INTO talk VALUES (2, 'Wonderful Talk', 2, 7);
SELECT * FROM talk;





CREATE TABLE users (
    userID  int primary key,
    user_name    VARCHAR(80)
);

INSERT INTO users VALUES (0, 'Chloe');
INSERT INTO users VALUES (1, 'Daniel');
INSERT INTO users VALUES (2, 'Thayne');
SELECT * FROM users;


CREATE TABLE notes (
    notesID int primary key,
    talkID int references talk(talkID),
    userID int references users(userID),
    note    TEXT
);

INSERT INTO notes VALUES(0, 0, 2, 'Amazing talk! Wow!');
INSERT INTO notes VALUES (1, 2, 0, 'Great talk!');
INSERT INTO notes VALUES (2, 1, 1, 'So spiritual!');

SELECT * FROM notes;
