-- for 22
CREATE TABLE cust (cust_no int NOT NULL AUTO_INCREMENT PRIMARY KEY,cust_name varchar(255),item_purchase varchar(255),mob_no varchar(255));
-- for 24
CREATE TABLE emp (emp_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,emp_name varchar(255),des varchar(255),selary int(7));
INSERT INTO emp VALUES(NULL,'Umang','Head',40000);
INSERT INTO emp VALUES(NULL,'Utsav','manager',30000);
INSERT INTO emp VALUES(NULL,'Parth','employee',20000);
INSERT INTO emp VALUES(NULL,'Karan','employee',20000);
INSERT INTO emp VALUES(NULL,'Neel','employee',22000);
INSERT INTO emp VALUES(NULL,'Deep','employee',18000);