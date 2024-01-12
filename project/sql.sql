
CREATE DATABASE IF NOT EXISTS company;

USE company;
-- Create schema 'company' if it does not exist
CREATE SCHEMA IF NOT EXISTS company;

-- Check if Person table exists before creating
IF NOT EXISTS (SELECT 1 FROM information_schema.tables WHERE table_schema = 'company' AND table_name = 'Person') THEN
    CREATE TABLE company.Person (
                                    person_id INT PRIMARY KEY,
                                    name VARCHAR(255),
                                    rights VARCHAR(10) CHECK (rights IN ('admin', 'user'))
    );
END IF;

-- Check if Company table exists before creating
IF NOT EXISTS (SELECT 1 FROM information_schema.tables WHERE table_schema = 'company' AND table_name = 'Company') THEN
    CREATE TABLE company.Company (
                                     company_id INT PRIMARY KEY,
                                     name VARCHAR(255)
    );
END IF;

-- Check if Course table exists before creating
IF NOT EXISTS (SELECT 1 FROM information_schema.tables WHERE table_schema = 'company' AND table_name = 'Course') THEN
    CREATE TABLE company.Course (
                                    course_id INT PRIMARY KEY,
                                    name VARCHAR(255),
                                    author_id INT,
                                    active BOOLEAN,
                                    FOREIGN KEY (author_id) REFERENCES company.Person(person_id)
    );
END IF;


-- Check if Employment table exists before creating
IF NOT EXISTS (SELECT 1 FROM information_schema.tables WHERE table_schema = 'company' AND table_name = 'Employment') THEN
    CREATE TABLE company.Employment (
                                        employment_id INT PRIMARY KEY,
                                        person_id INT,
                                        company_id INT,
                                        FOREIGN KEY (person_id) REFERENCES company.Person(person_id),
                                        FOREIGN KEY (company_id) REFERENCES company.Company(company_id)
    );
END IF;

-- Check if Training table exists before creating
IF NOT EXISTS (SELECT 1 FROM information_schema.tables WHERE table_schema = 'company' AND table_name = 'Training') THEN
    CREATE TABLE company.Training (
                                      training_id INT PRIMARY KEY,
                                      person_id INT,
                                      course_id INT,
                                      certificate VARCHAR(255),
                                      date_completed DATE,
                                      company_id INT,
                                      FOREIGN KEY (person_id) REFERENCES company.Person(person_id),
                                      FOREIGN KEY (course_id) REFERENCES company.Course(course_id),
                                      FOREIGN KEY (company_id) REFERENCES company.Company(company_id)
    );
END IF;

-- Rest of the script remains unchanged...


-- Záznamy pre tabuľku Person
INSERT INTO Person (person_id, name, rights) VALUES
                                                 (1, 'John Doe', 'admin'),
                                                 (2, 'Jane Smith', 'admin'),
                                                 (3, 'Alice Johnson', 'user'),
                                                 (4, 'Bob Williams', 'user'),
                                                 (5, 'Charlie Brown', 'user'),
                                                 (6, 'Eva Davis', 'admin'),
                                                 (7, 'Frank Miller', 'user'),
                                                 (8, 'Grace Wilson', 'user'),
                                                 (9, 'Henry Lee', 'admin'),
                                                 (10, 'Ivy Taylor', 'user'),
                                                 (11, 'Jack Robinson', 'user'),
                                                 (12, 'Karen White', 'admin'),
                                                 (13, 'Larry Anderson', 'user'),
                                                 (14, 'Mia Garcia', 'admin'),
                                                 (15, 'Nathan Clark', 'user'),
                                                 (16, 'Olivia Davis', 'user'),
                                                 (17, 'Paul Wright', 'admin'),
                                                 (18, 'Quinn Hall', 'user'),
                                                 (19, 'Ryan Harris', 'admin'),
                                                 (20, 'Sara Turner', 'user');

-- Záznamy pre tabuľku Company
INSERT INTO Company (company_id, name) VALUES
                                           (1, 'Company A'),
                                           (2, 'Company B'),
                                           (3, 'Company C'),
                                           (4, 'Company D'),
                                           (5, 'Company E'),
                                           (6, 'Company F'),
                                           (7, 'Company G'),
                                           (8, 'Company H'),
                                           (9, 'Company I'),
                                           (10, 'Company J'),
                                           (11, 'Company K'),
                                           (12, 'Company L'),
                                           (13, 'Company M'),
                                           (14, 'Company N'),
                                           (15, 'Company O'),
                                           (16, 'Company P'),
                                           (17, 'Company Q'),
                                           (18, 'Company R'),
                                           (19, 'Company S'),
                                           (20, 'Company T');

-- Záznamy pre tabuľku Course
INSERT INTO Course (course_id, name, author_id) VALUES
                                                    (1, 'Database Management', 1),
                                                    (2, 'Project Management', 2),
                                                    (3, 'Programming Basics', 3),
                                                    (4, 'Communication Skills', 4),
                                                    (5, 'Data Analysis', 5),
                                                    (6, 'Leadership Training', 6),
                                                    (7, 'Web Development', 7),
                                                    (8, 'Time Management', 8),
                                                    (9, 'Graphic Design', 9),
                                                    (10, 'Marketing Strategies', 10),
                                                    (11, 'Customer Service', 11),
                                                    (12, 'Financial Planning', 12),
                                                    (13, 'Team Building', 13),
                                                    (14, 'Conflict Resolution', 14),
                                                    (15, 'Mobile App Development', 15),
                                                    (16, 'Sales Techniques', 16),
                                                    (17, 'Cybersecurity Fundamentals', 17),
                                                    (18, 'Artificial Intelligence', 18),
                                                    (19, 'Human Resources Management', 19),
                                                    (20, 'E-commerce Strategies', 20);

-- Záznamy pre tabuľku Employment
INSERT INTO Employment (employment_id, person_id, company_id) VALUES
                                                                  (1, 1, 1),
                                                                  (2, 2, 1),
                                                                  (3, 3, 2),
                                                                  (4, 4, 2),
                                                                  (5, 5, 3),
                                                                  (6, 6, 3),
                                                                  (7, 7, 4),
                                                                  (8, 8, 4),
                                                                  (9, 9, 5),
                                                                  (10, 10, 5),
                                                                  (11, 11, 6),
                                                                  (12, 12, 6),
                                                                  (13, 13, 7),
                                                                  (14, 14, 7),
                                                                  (15, 15, 8),
                                                                  (16, 16, 8),
                                                                  (17, 17, 9),
                                                                  (18, 18, 9),
                                                                  (19, 19, 10),
                                                                  (20, 20, 10);

-- Záznamy pre tabuľku Training
INSERT INTO Training (training_id, person_id, course_id, certificate, date_completed, company_id) VALUES
                                                                                                      (1, 3, 1, 'Database Management Certificate', '2024-01-10', 2),
                                                                                                      (2, 5, 2, 'Project Management Certificate', '2024-02-15', 1),
                                                                                                      (3, 3, 3, 'Programming Basics Certificate', '2024-03-20', 2),
                                                                                                      (4, 4, 4, 'Communication Skills Certificate', '2024-04-25', 3),
                                                                                                      (5, 1, 5, 'Data Analysis Certificate', '2024-05-30', 4),
                                                                                                      (6, 6, 6, 'Leadership Training Certificate', '2024-06-15', 5),
                                                                                                      (7, 7, 7, 'Web Development Certificate', '2024-07-20', 6),
                                                                                                      (8, 8, 8, 'Time Management Certificate', '2024-08-25', 7),
                                                                                                      (9, 9, 9, 'Graphic Design Certificate', '2024-09-30', 8),
                                                                                                      (10, 10, 10, 'Marketing Strategies Certificate', '2024-10-05', 9),
                                                                                                      (11, 11, 11, 'Customer Service Certificate', '2024-11-10', 10),
                                                                                                      (12, 12, 12, 'Financial Planning Certificate', '2024-12-15', 11),
                                                                                                      (13, 13, 13, 'Team Building Certificate', '2025-01-20', 12),
                                                                                                      (14, 14, 14, 'Conflict Resolution Certificate', '2025-02-25', 13),
                                                                                                      (15, 15, 15, 'Mobile App Development Certificate', '2025-03-30', 14),
                                                                                                      (16, 16, 16, 'Sales Techniques Certificate', '2025-04-05', 15),
                                                                                                      (17, 17, 17, 'Cybersecurity Fundamentals Certificate', '2025-05-10', 16),
                                                                                                      (18, 18, 18, 'Artificial Intelligence Certificate', '2025-06-15', 17),
                                                                                                      (19, 19, 19, 'Human Resources Management Certificate', '2025-07-20', 18),
                                                                                                      (20, 20, 20, 'E-commerce Strategies Certificate', '2025-08-25', 19);


-- Ďalšie záznamy pre tabuľku Person
INSERT INTO Person (person_id, name, rights) VALUES
                                                 (21, 'Zoe Baker', 'user'),
                                                 (22, 'Xander Smith', 'user'),
                                                 (23, 'Admin 3', 'admin'),
                                                 (24, 'Employee 4', 'user'),
                                                 (25, 'Admin 4', 'admin');

-- Ďalšie záznamy pre tabuľku Employment (pre zamestnancov vo viacerých spoločnostiach)
INSERT INTO Employment (employment_id, person_id, company_id) VALUES
                                                                  (21, 21, 1),
                                                                  (22, 21, 2),
                                                                  (23, 22, 1),
                                                                  (24, 22, 3),
                                                                  (25, 23, 1),
                                                                  (26, 24, 2),
                                                                  (27, 24, 3),
                                                                  (28, 25, 1),
                                                                  (29, 25, 2);

-- Ďalšie záznamy pre tabuľku Employment (pre administrátorov vo viacerych spoločnostiach)
INSERT INTO Employment (employment_id, person_id, company_id) VALUES
                                                                  (30, 23, 2),
                                                                  (31, 23, 3),
                                                                  (32, 25, 3);

-- Ďalšie záznamy pre tabuľku Training (aby sme mali aj nejaké absolvované školenia)
INSERT INTO Training (training_id, person_id, course_id, certificate, date_completed, company_id) VALUES
                                                                                                      (21, 21, 1, 'Database Management Certificate', '2025-09-10', 1),
                                                                                                      (22, 23, 3, 'Programming Basics Certificate', '2025-09-15', 2),
                                                                                                      (23, 25, 5, 'Data Analysis Certificate', '2025-09-20', 1);
