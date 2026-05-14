


-- Table structure for admins
CREATE TABLE admins (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(100) NOT NULL UNIQUE,
  password_hash varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

INSERT INTO admins (id, username, password_hash) VALUES
(1, 'admin@campusxchange.com' , '$2y$10$I6gvTBYvp6exqNE8XTd5peARSjYHl1t/Fd.i1YUnn7iSU10UylD3a');


-- Table structure for applied_intern
CREATE TABLE applied_intern (
  id int NOT NULL AUTO_INCREMENT,
  Name varchar(30) NOT NULL,
  Email varchar(30) NOT NULL,
  Whatsapp_No varchar(15) NOT NULL,
  Domain varchar(40) NOT NULL,
  Duration varchar(30) NOT NULL,
  College varchar(40) DEFAULT NULL,
  Address varchar(50) NOT NULL,
  Verification tinyint(1) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO applied_intern (id, Name, Email, Whatsapp_No, Domain, Duration, College, Address, Verification) VALUES
(1, 'PANKAJ KUMAR DAS', 'useremail5569121@gmail.com', '9155726627', 'SEO', '2 Months', 'CCSIT', 'Kkishanganj', 1);

CREATE TABLE data (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(15) NOT NULL,
  message text NOT NULL,
  submitted_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);


CREATE TABLE email_list (
  id int NOT NULL AUTO_INCREMENT,
  Emails varchar(30) NOT NULL,
  Date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

INSERT INTO email_list (id , Emails, Date) VALUES
(1 , 'Pd5569121@gmail.com', '2025-09-19 18:56:48');


CREATE TABLE notes (
  id int DEFAULT NULL,
  title varchar(20) DEFAULT NULL,
  content varchar(270) DEFAULT NULL,
  noteLink varchar(82) DEFAULT NULL,
  created_at varchar(16) DEFAULT NULL
);


INSERT INTO notes (id, title, content, noteLink, created_at) VALUES
(1, 'DataScience', 'Data Science is an interdisciplinary field that combines statistics, computer science, and domain knowledge to extract meaningful insights from structured and unstructured data. It involves processes like data collection, cleaning, analysis, visualization, and modeling.', 'https://drive.google.com/file/d/1v3VyhLIe01gfFxlqyonpkDtT_DXlDZjz/view?usp=sharing', '09-06-2025 18:19'),
(2, 'Cyber Security', 'Cybersecurity refers to the practice of protecting systems, networks, and data from digital attacks, theft, and damage. It involves using technologies, processes, and best practices to defend against threats like malware, phishing, ransomware, and unauthorized access.', 'https://drive.google.com/file/d/1r-8qF36Kmv4jWFgEyNKVHbdsDO9Atuu0/view?usp=sharing', '09-06-2025 18:19'),
(3, 'Software Engineering', 'Software Engineering is the systematic approach to the development, operation, maintenance, and retirement of software. It applies engineering principles to create reliable, efficient, and scalable software systems.', 'https://drive.google.com/file/d/1mDz8EAcxwxdyWbNHQW4bReTOcwB3SeNy/view?usp=sharing', '09-06-2025 18:22');

-- Table structure for verified_intern
CREATE TABLE verified_intern (
  ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  Name varchar(17) DEFAULT NULL,
  Domain varchar(25) DEFAULT NULL,
  Duration varchar(9) DEFAULT NULL,
  Intern_ID varchar(10) DEFAULT NULL,
  College varchar(14) DEFAULT NULL,
  Project_Link varchar(60) DEFAULT NULL
);


CREATE TABLE web_client (
  Id int NOT NULL AUTO_INCREMENT,
  Name varchar(30) NOT NULL,
  Mobile varchar(12) DEFAULT NULL,
  Email varchar(30) NOT NULL,
  Address varchar(50) NOT NULL,
  Choice varchar(30) NOT NULL,
  Plan varchar(12) NOT NULL,
  Date timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  Verification int NOT NULL,
  PRIMARY KEY (Id)
);
