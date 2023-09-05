CREATE TABLE User (
    regNum VARCHAR(20) PRIMARY KEY,
    password VARCHAR(255)
);
/*dummy data*/
INSERT INTO User (regNum, password)
VALUES ('2018/asp/26', '123');

INSERT INTO User (regNum, password)
VALUES ('2018/asp/34', '123');

CREATE TABLE sports (
    sport VARCHAR(65),
    fname VARCHAR(65),
    lname VARCHAR(65),
    regNum VARCHAR(20),
    email VARCHAR(65),
    FOREIGN KEY (regNum) REFERENCES User(regNum)
);

CREATE TABLE no_of_sports (
    regNum VARCHAR(20) PRIMARY KEY,
    no_of_sport INT,
    FOREIGN KEY (regNum) REFERENCES User(regNum)
);


DELIMITER //
CREATE TRIGGER sports_insert_trigger AFTER INSERT ON sports
FOR EACH ROW
BEGIN
    DECLARE regNumExists INT;
    SELECT COUNT(*) INTO regNumExists FROM no_of_sports WHERE regNum = NEW.regNum;
    IF regNumExists = 0 THEN
        INSERT INTO no_of_sports (regNum, no_of_sport) VALUES (NEW.regNum, 1);
    ELSE
        UPDATE no_of_sports SET no_of_sport = no_of_sport + 1 WHERE regNum = NEW.regNum;
    END IF;
END;
//
DELIMITER ;

/*Drop the trigger*/
DROP TRIGGER IF EXISTS sports_insert_trigger;


CREATE TABLE user_details (
    regNum VARCHAR(20) PRIMARY KEY,
    fname VARCHAR(65),
    lname VARCHAR(65),
    email VARCHAR(65),
    mobile INT(20)
);
ALTER TABLE user_details
ADD FOREIGN KEY (regNum) REFERENCES user (regNum);

