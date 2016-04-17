<!-- Created by Rakesh Balan Lingakumar -->

-- -----------------------------------------------------
-- Creating Schema
-- -----------------------------------------------------

DROP SCHEMA IF EXISTS `its_data_warriors` ;
CREATE SCHEMA IF NOT EXISTS `its_data_warriors` ;

 USE `its_data_warriors` ;

-- -----------------------------------------------------
-- Table `its_data_warriors`.`person_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`person_details`;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`person_details` ( 
`person_id` INT AUTO_INCREMENT NOT NULL, 
`person_type` ENUM('S','A') NOT NULL, 
`first_name` VARCHAR(50) NOT NULL, 
`middle_name` VARCHAR(50) NULL, 
`last_name` VARCHAR(50) NOT NULL, 
`street_address` VARCHAR(100) NULL, 
`city` VARCHAR(50) NULL, 
`state` CHAR(2) NULL, 
`zip` VARCHAR(10) NULL, 
`phone` VARCHAR(20) NOT NULL, 
`email` VARCHAR(50) NOT NULL, 
`gender` ENUM('M','F') NOT NULL, 
`dob` DATE NOT NULL, 
PRIMARY KEY (`person_id`));


INSERT INTO `its_data_warriors`.`person_details`
VALUES (100001,
        'S',
        'John',
        'Mathew',
        'Isner',
        '212 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '9876543210',
        'abc@uncc.com',
        'M',
        '1991-07-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('A',
        'Jimmy',
        'Mathew',
        'Anderson',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('S',
        'Jammy',
        'Dam',
        'Son',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'F',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('A',
        'Rakesh',
        'Balan',
        'Ander',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('S',
        'Kapil',
        'Mathew',
        'Abdul',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('A',
        'Ramesh',
        'Mathew',
        'Kumar',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('S',
        'Obama',
        'Mathew',
        'Barrack',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (person_type, first_name, middle_name, last_name, street_address, city, STATE, zip, phone, email, gender, dob)
VALUES ('A',
        'Sachin',
        'Ramesh',
        'Tendulkar',
        '456 ABC Drive',
        'Charlotte',
        'NC',
        '28262',
        '123456789',
        'qwerty@uncc.com',
        'M',
        '1997-06-18');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100009',
        'S',
        'Pranitha',
        'R ',
        'Mooli',
        '434 Barton Creek ',
        'Charlotte ',
        'NC ',
        '28262',
        '123456789',
        'pmooli@uncc.edu',
        'F ',
        '1997-09-30');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100010',
        'S ',
        'Navjot',
        'K',
        'Kaur',
        '434 Barton Creek ',
        'Charlotte ',
        'NC ',
        '28262',
        '123456789',
        'nkaur@uncc,edu',
        'F',
        '1997-09-30');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100011',
        'S ',
        'Sharn ',
        'R',
        'Kadiri',
        '654 greek Dr ',
        'Charlotte ',
        'NC ',
        '23456',
        '123456789',
        'jhgfvv@uncc.edu',
        'M ',
        '1993-04-09');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100012',
        'S',
        'Salman ',
        'K',
        'Khan',
        '654 breek ',
        'San Fransisco',
        'CA ',
        '43256',
        '123456789',
        'edcvbg@uncc.edu',
        'M',
        '1993-04-09');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100013',
        'S',
        'Deman',
        'K',
        'Thompson',
        '435 Nerkg',
        'New York',
        'NY',
        '76543',
        '123457899',
        'ujgrbbn@uncc.edu',
        'F',
        '1993-04-09');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100014',
        'S',
        'John',
        'K',
        'Reddy',
        '678 Barton',
        'Detorit',
        'MI',
        '65431',
        '123457890',
        'tgndjj@uncc.edu',
        'M',
        '1995-04-09');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100015',
        'S',
        'Brad',
        'K',
        'Pitt',
        '8765 Georiga',
        'Los Angels',
        'CA ',
        '76544',
        '123456789',
        'ygfrrvv@uncc.edu',
        'M',
        '1995-04-09');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100016',
        'S',
        'Angelina',
        'M',
        'Jolie',
        '6556 harry Potter',
        'Chicago',
        'IL',
        '87667',
        '123456789',
        'ajolie@uncc.edu',
        'F',
        '1995-04-19');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100017',
        'S',
        'Tom',
        'C',
        'Cruise',
        '7545 Belk',
        'Dallas',
        'TX',
        '87578',
        '123456789',
        'tcruise@uncc.edu',
        'M',
        '1996-05-30');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100018',
        'S',
        'Will ',
        'S ',
        'Smith',
        '76567 fairfax',
        'Fairfox',
        'VI',
        '87659',
        '123456789',
        'wsmill@uncc.edu',
        'M',
        '1996-05-30');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100019',
        'S',
        'Emma',
        'S ',
        'Watson',
        '8767 Georiga',
        'Las Vegas',
        'NV',
        '97657',
        '123456789',
        'ewatson@uncc.edu',
        'F',
        '1996-05-21');


INSERT INTO `its_data_warriors`.`person_details` (`person_id`, `person_type`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `gender`, `dob`)
VALUES ('100020',
        'S',
        'Leonido',
        'S',
        'Dicaprio',
        '7865 fairfox',
        'Las Vegas',
        'NV',
        '65433',
        '123456789',
        'pljybdabds@uncc.edu',
        'F',
        '1995-09-21');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`login_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`login_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`login_details` ( 
`person_id` INT AUTO_INCREMENT NOT NULL, 
`person_type` ENUM('S','A') NOT NULL, 
`password` VARCHAR(20) NOT NULL, 
`security_question` VARCHAR(200) NOT NULL, 
`security_answer` VARCHAR(50) NOT NULL, 
PRIMARY KEY (`person_id`),
FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`));

INSERT INTO `its_data_warriors`.`login_details` 
(person_id,person_type,password,security_question,security_answer)
SELECT person_id,person_type,concat(first_name,'123'),'What is your name',first_name
FROM `its_data_warriors`.`person_details`;


 -- -----------------------------------------------------
-- Table `its_data_warriors`.`department_details
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`department_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`department_details` ( `department_id` CHAR(10) NOT NULL, `department_name` VARCHAR(50) NOT NULL, PRIMARY KEY (`department_id`)) ;


INSERT INTO `its_data_warriors`.`department_details`
VALUES ('D0001',
        'Department of Computer Science'), ('D0002',
                                            'Department of Information Technology'), ('D0003',
                                                                                      'Department of Maths');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0004',
        'Department of Information Security');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0005',
        'Department of Lifeguard');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0006',
        'Department of Electrical');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0007',
        'Department of Biology');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0008',
        'Department of Medicine');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0009',
        'Department of History');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0010',
        'Department of Dance');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0011',
        'Department of Art');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0012',
        'Department of Music');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0013',
        'Department of Fastion Design');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0014',
        'Department of Cardialogy');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0015',
        'Department of Civil Engineering');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0016',
        'Department of Mecanical');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0017',
        'Department of Production');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0018',
        'Department of EE');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0019',
        'Department of Instrumentation');


INSERT INTO `its_data_warriors`.`department_details` (`department_id`, `department_name`)
VALUES ('D0020',
        'Department of Environment Sciences');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`student_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`student_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`student_details` ( `person_id` INT NOT NULL, `department_id` CHAR(10) NOT NULL, `major` VARCHAR(20) NOT NULL, `student_level` VARCHAR(20) NOT NULL, `current_semester` CHAR(5) NOT NULL, `cgpa` FLOAT(3,2) NOT NULL, PRIMARY KEY (`person_id`),
                                                                  FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`),
                                                                  FOREIGN KEY (`department_id`) REFERENCES `its_data_warriors`.`department_details` (`department_id`));


INSERT INTO `its_data_warriors`.`student_details`
VALUES (100001,
        'D0001',
        'Computer Science',
        'Graduate',
        '04',
        '3.52'), (100003,
                  'D0001',
                  'Computer Science',
                  'Under-Graduate',
                  '08',
                  '3.52'), (100005,
                            'D0003',
                            'Mathematics',
                            'Under-Graduate',
                            '05',
                            '3.52'), (100007,
                                      'D0002',
                                      'IT',
                                      'Under-Graduate',
                                      '04',
                                      '3.52');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100008',
        'D0010',
        'Dance',
        'Under-Graduate',
        '08',
        '3.87');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100009',
        'D0009',
        'History',
        'Graduate',
        '03',
        '3.25');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100010',
        'D0013',
        'Fashion',
        'Under-Graduate',
        '10',
        '3.87');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100011',
        'D0011',
        'Art',
        'Under-Graduate',
        '04',
        '3.98');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100012',
        'D0006',
        'Electrical',
        'Under-Graduate',
        '09',
        '3.12');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100013',
        'D0007',
        'Biology',
        'Under-Graduate',
        '03',
        '3.67');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100014',
        'D0008',
        'Medicine',
        'Under-Graduate',
        '09',
        '3.21');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100015',
        'D0014',
        'Cardiology',
        'Under-Graduate',
        '03',
        '3.12');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100016',
        'D0016',
        'Mechanical',
        'Under-Graduate',
        '06',
        '3.65');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100017',
        'D0017',
        'Production',
        'Under-Graduate',
        '04',
        '3.40');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100018',
        'D0020',
        'Envi Science',
        'Under-Graduate',
        '05',
        '3.00');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100019',
        'D0018',
        'Electrical Engg',
        'Graduate',
        '01',
        '3.18');


INSERT INTO `its_data_warriors`.`student_details` (`person_id`, `department_id`, `major`, `student_level`, `current_semester`, `cgpa`)
VALUES ('100020',
        'D0012',
        'Music',
        'Graduate',
        '02',
        '3.00');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`skills_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`skills_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`skills_details` ( `skill_id` CHAR(10) NOT NULL, `skill_name` VARCHAR(50) NOT NULL, `skill_description` VARCHAR(200) NULL, PRIMARY KEY (`skill_id`)) ;


INSERT INTO `its_data_warriors`.`skills_details`
VALUES ('S0001',
        'JAVA',
        'JAVA is a programming language'), ('S0002',
                                            'CPP',
                                            'CPP is a programming language'), ('S0003',
                                                                               'PHP',
                                                                               'PHP is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0004',
        'C++',
        'C++ is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0005',
        'C',
        'C is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0006',
        '.Net',
        '.Net is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0007',
        'Andriod',
        'Andriod is is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0008',
        'IOS',
        'IOS is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0009',
        'HTML',
        'HTML is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0010',
        'web development',
        'web developing is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0011',
        'J2EE',
        'J2EE is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0012',
        'BALLE',
        'BALLE is dance ');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0013',
        'SALSA',
        'Salsa is dance');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0014',
        'Painting',
        'Painting is in ARTS');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0015',
        'Python',
        'Python is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0016',
        'Cobol',
        'Cobol is a programming language');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0017',
        'Auto CAD',
        'Auto CAD is tool ');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0018',
        'MATLAB',
        'MATLAB is tool');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0019',
        'Guitar',
        'Guitar is music');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0020',
        'piano',
        'piono is music');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0021',
        'Europe History',
        'Europe History');


INSERT INTO `its_data_warriors`.`skills_details` (`skill_id`, `skill_name`, `skill_description`)
VALUES ('S0022',
        'Pathalogy',
        'Pathalogy');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`student_skill`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`student_skill` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`student_skill` ( `person_id` INT NOT NULL, `skill_id` CHAR(10) NOT NULL, `level` VARCHAR(15) NOT NULL, PRIMARY KEY (`person_id`, `skill_id`),
                                                                FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`),
                                                                FOREIGN KEY (`skill_id`) REFERENCES `its_data_warriors`.`skills_details` (`skill_id`));


INSERT INTO `its_data_warriors`.`student_skill`
VALUES (100001,
        'S0001',
        'Level 1'), (100001,
                     'S0003',
                     'Level 3'), (100003,
                                  'S0002',
                                  'Level 5'), (100005,
                                               'S0002',
                                               'Level 3'), (100007,
                                                            'S0002',
                                                            'Level 2');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100008',
        'S0012',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100009',
        'S0021',
        'Level 2');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100011',
        'S0014',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100011',
        'S0017',
        'Level 2');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100012',
        'S0018',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100013',
        'S0022',
        'Level 1');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100014',
        'S0022',
        'Level 2');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100016',
        'S0017',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100017',
        'S0017',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100019',
        'S0004',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100019',
        'S0005',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100020',
        'S0019',
        'Level 3');


INSERT INTO `its_data_warriors`.`student_skill` (`person_id`, `skill_id`, `level`)
VALUES ('100020',
        'S0020',
        'Level 2');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`admin_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`admin_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`admin_details` ( `person_id` INT NOT NULL, `department_id` CHAR(10) NOT NULL, `title` VARCHAR(20) NOT NULL,
                                                                FOREIGN KEY (`department_id`) REFERENCES `its_data_warriors`.`department_details` (`department_id`),
                                                                FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`));


INSERT INTO `its_data_warriors`.`admin_details`
VALUES (100002,
        'D0001',
        'Manager'), (100004,
                     'D0001',
                     'IT Technician'), (100006,
                                        'D0002',
                                        'Manager'), (100008,
                                                     'D0003',
                                                     'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100002',
        'D0004',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100004',
        'D0005',
        'IT Technician');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100006',
        'D0006',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100008',
        'D0007',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100002',
        'D0008',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100004',
        'D0009',
        'IT Technician');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100006',
        'D0010',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100008',
        'D0011',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100002',
        'D0012',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100004',
        'D0013',
        'IT Technician');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100006',
        'D0014',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100008',
        'D0015',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100002',
        'D0016',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100004',
        'D0017',
        'IT Technician');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100006',
        'D0018',
        'Manager');


INSERT INTO `its_data_warriors`.`admin_details` (`person_id`, `department_id`, `title`)
VALUES ('100008',
        'D0019',
        'Manager');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`business_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`business_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`business_details` ( `company_id` CHAR(10) NOT NULL, `company_name` VARCHAR(50) NOT NULL, `company_type` VARCHAR(30) NOT NULL, `street_address` VARCHAR(100) NOT NULL, `city` VARCHAR(50) NOT NULL, `state` CHAR(2) NOT NULL, `zip` VARCHAR(10) NOT NULL, `phone` VARCHAR(20) NOT NULL, `email` VARCHAR(50) NOT NULL, `link` VARCHAR(100) NOT NULL, `hr_first_name` VARCHAR(50) NOT NULL, `hr_middle_name` VARCHAR(50) NOT NULL, `hr_last_name` VARCHAR(50) NOT NULL, `hr_email` VARCHAR(50) NOT NULL, `hr_contact` VARCHAR(20) NOT NULL, PRIMARY KEY (`company_id`)) ;


INSERT INTO `its_data_warriors`.`business_details`
VALUES ('C0001',
        'ABC',
        'IT',
        '234 ABC DRIVE',
        'San Jose',
        'CA',
        '45678',
        '123654796',
        'awdaw@gmail.com',
        'www.abc.com',
        'Andrew',
        'Mallow',
        'Symonds',
        'ams@abc.com',
        '1478523699'), ('C0002',
                        'Romeo and Co.',
                        'IT',
                        '234 ABC DRIVE',
                        'San Jose',
                        'CA',
                        '45678',
                        '123654796',
                        'awdaw@gmail.com',
                        'www.abc.com',
                        'Paul',
                        'Walker',
                        'Gibson',
                        'ams@abc.com',
                        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0003',
        'Bank of America',
        'Bank',
        '567 BOFA street',
        'San Fransisco',
        'CA',
        '32432',
        '123654796',
        'info@bofa.com',
        'www.bofa.com',
        'John',
        'W',
        'Jonhson',
        'hr@bofa.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0004',
        'Wells Fargo',
        'Bank',
        '123 WF street',
        'Charlotte',
        'NC',
        '65756',
        '123654796',
        'info@wf.com',
        'www.wf.com',
        'Brad',
        'Q',
        'Williamson',
        'hr@wf.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0005',
        'Amazon',
        'Retail',
        '222 Amazon street',
        'San Diego',
        'CA',
        '34574',
        '123654796',
        'info@amazon.com',
        'www.amazon.com',
        'Tom',
        'G',
        'Atkinson',
        'hr@amazon.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0006',
        'Google',
        'IT',
        '1234 google street',
        'New York',
        'NY',
        '53452',
        '123654796',
        'info@google.com',
        'www.google.com',
        'Thomas',
        'D',
        'Watson',
        'hr@google.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0007',
        'Apple',
        'IT',
        '2345 apple street',
        'Chicago',
        'IL',
        '76554',
        '123654796',
        'info@apple.com',
        'www.apple.com',
        'Emma',
        'E',
        'Pit',
        'hr@apple.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0008',
        'Microsoft',
        'IT',
        '345 microsoft street',
        'Dallas',
        'TX',
        '87435',
        '123654796',
        'info@ms.com',
        'www.ms.com',
        'George',
        'R',
        'Fernandes',
        'hr@ms.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0009',
        'Dell',
        'Hardware',
        '3456 dell drive',
        'Los angles',
        'CA',
        '23243',
        '123654796',
        'info@dell.com',
        'www.dell.com',
        'Robert',
        'Y',
        'Crus',
        'hr@dell.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0010',
        'TCS',
        'Software',
        '456 tcs hill lane',
        'Charlotte',
        'NC',
        '43564',
        '123654796',
        'info@tcs.com',
        'www.tcs.com',
        'Leo',
        'U',
        'Decaprio',
        'hr@tcs.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0011',
        'Carolina Health Centre',
        'Hospital',
        '765 N. Trion street',
        'Charlotte',
        'NC',
        '65524',
        '123654796',
        'info@chc.comm',
        'www.chc.com',
        'Harry',
        'K',
        'Willis',
        'hr@chc.comm',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0012',
        'Fox Entertainment',
        'Entertainment',
        '6867 South Willian Road',
        'New York',
        'NY',
        '34345',
        '123654796',
        'info@fox.com',
        'www.fox.com',
        'John',
        'N',
        'Bravo',
        'hr@fox.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0013',
        'Pixar',
        'Art',
        '987 pixar drive',
        'New York',
        'NY',
        '21333',
        '123654796',
        'info@pixar.com',
        'www.pixar.com',
        'Vickey',
        'M',
        'Jones',
        'hr@pixar.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0014',
        'Nation Geographic',
        'TV',
        '435 NGC street',
        'Arlington',
        'TX',
        '53254',
        '123654796',
        'info@ngc.com',
        'www.angc.com',
        'William',
        'K',
        'Shakesperar',
        'hr@ngc.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0015',
        'Discovery',
        'TV',
        '234 discovery Drive',
        'Las Vegas',
        'NV',
        '62345',
        '123654796',
        'info@discovery.com',
        'www.discovery.com',
        'Ted',
        'W',
        'Mosbey',
        'hr@discovery.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0016',
        'Duke Energy',
        'Electricity',
        '8733 Duke drive',
        'Charlotte',
        'NC',
        '24562',
        '123654796',
        'info@duke.com',
        'www.duke.com',
        'Ross',
        'R',
        'Gellar',
        'hr@duke.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0017',
        'General Motor',
        'Automobile',
        '3245 GM Road',
        'San Jose',
        'CA',
        '24624',
        '123654796',
        'info@gm.com',
        'www.gm.com',
        'Marshal',
        'P',
        'Ericson',
        'hr@gm.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0018',
        'Autozone',
        'Automobile',
        '423 autozone street',
        'Secramento',
        'CA',
        '35664',
        '123654796',
        'info@autozone.com',
        'www.autozone.com',
        'Barney',
        'K',
        'Stinson',
        'hr@autozone.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0019',
        'XYZ Contructions',
        'Construction',
        '3454 xyz hills',
        'Raleigh',
        'NC',
        '74653',
        '123654796',
        'info@xyz.com',
        'www.xyz.com',
        'Robert',
        'L',
        'Harris',
        'hr@xyz.com',
        '1478523699');


INSERT INTO `its_data_warriors`.`business_details` (`company_id`, `company_name`, `company_type`, `street_address`, `city`, `state`, `zip`, `phone`, `email`, `link`, `hr_first_name`, `hr_middle_name`, `hr_last_name`, `hr_email`, `hr_contact`)
VALUES ('C0020',
        'Thought Works',
        'Software',
        '4208 tw street',
        'San Jose',
        'CA',
        '23567',
        '123654796',
        'info@tw.com',
        'www.tw.com',
        'William',
        'Q',
        'Stinson',
        'hr@tw.com',
        '1478523699');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`supervisor_details`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`supervisor_details` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`supervisor_details` ( `supervisor_id` CHAR(10) NOT NULL, `company_id` CHAR(10) NOT NULL, `first_name` VARCHAR(50) NOT NULL, `middle_name` VARCHAR(50) NOT NULL, `last_name` VARCHAR(50) NOT NULL, `phone` VARCHAR(20) NOT NULL, `email` VARCHAR(50) NOT NULL, PRIMARY KEY (`supervisor_id`),
                                                                     FOREIGN KEY (`company_id`) REFERENCES `its_data_warriors`.`business_details` (`company_id`));


INSERT INTO `its_data_warriors`.`supervisor_details`
VALUES ('S0001',
        'C0001',
        'Jason',
        'Rame',
        'Statham',
        '145236657',
        'awawd@gmail.com'), ('S0002',
                             'C0002',
                             'Jeny',
                             'Rame',
                             'Statham',
                             '145236657',
                             'awawd@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0003',
        'C0003',
        'Micheal',
        'K',
        'Turner',
        '145236657',
        'mt@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0004',
        'C0004',
        'David',
        'H',
        'Jackson',
        '145236657',
        'dj@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0005',
        'C0005',
        'Richard',
        'J',
        'Anderson',
        '145236657',
        'ra@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0006',
        'C0006',
        'Joseph',
        'D',
        'Watson',
        '145236657',
        'jw@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0007',
        'C0007',
        'Thomas',
        'W',
        'Harris',
        '145236657',
        'ht@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0008',
        'C0008',
        'Steven',
        'R',
        'Robinson',
        '145236657',
        'st@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0009',
        'C0009',
        'Ronald',
        'P',
        'Brown',
        '145236657',
        'rb@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0010',
        'C0010',
        'Jennifer',
        'L',
        'Davis',
        '145236657',
        'jd@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0011',
        'C0011',
        'Mary',
        'M',
        'Moore',
        '145236657',
        'mm@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0012',
        'C0012',
        'Maria',
        'D',
        'King',
        '145236657',
        'mk@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0013',
        'C0013',
        'Lisa',
        'F',
        'Wright',
        '145236657',
        'lw@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0014',
        'C0014',
        'Laura',
        'V',
        'Lopez',
        '145236657',
        'll@yahoo.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0015',
        'C0015',
        'Sarah',
        'B',
        'Scott',
        '145236657',
        'ss@hotmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0016',
        'C0016',
        'Jason',
        'A',
        'Green',
        '145236657',
        'jg@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0017',
        'C0017',
        'Danial',
        'W',
        'Nelson',
        '145236657',
        'dn@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0018',
        'C0018',
        'Paul',
        'R',
        'Perez',
        '145236657',
        'pp@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0019',
        'C0019',
        'Mark',
        'T',
        'Parker',
        '145236657',
        'mp@gmail.com');


INSERT INTO `its_data_warriors`.`supervisor_details` (`supervisor_id`, `company_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`)
VALUES ('S0020',
        'C0020',
        'Donald',
        'H',
        'Phillips',
        '145236657',
        'dp@gmail.com');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`internship_opportunities`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`internship_opportunities` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`internship_opportunities` ( `internship_id` CHAR(10) NOT NULL, `company_id` CHAR(10) NOT NULL, `job_title` VARCHAR(30) NOT NULL, `job_location` VARCHAR(30) NOT NULL, `job_requirements` TEXT NOT NULL, `job_duties` TEXT NOT NULL, `internship_type` ENUM('P','NP') NOT NULL, `supervisor_id` CHAR(10) NOT NULL, `pay_per_hour` FLOAT(4,2) NOT NULL, `due_date` DATE NOT NULL, `start_date` DATE NOT NULL, `end_date` DATE NOT NULL, `weekly_hours_required` FLOAT(4,2) NOT NULL, `semester` VARCHAR(20) NOT NULL, `total_openings` INT NOT NULL, `number_of_openings_left` INT NOT NULL, PRIMARY KEY (`internship_id`),
                                                                           FOREIGN KEY (`company_id`) REFERENCES `its_data_warriors`.`business_details` (`company_id`),
                                                                           FOREIGN KEY (`supervisor_id`) REFERENCES `its_data_warriors`.`supervisor_details` (`supervisor_id`));


INSERT INTO `its_data_warriors`.`internship_opportunities`
VALUES ('I0001',
        'C0001',
        'Developer',
        'Boston',
        '2 years exp., profinient in Java',
        'coding, managing',
        'P',
        'S0001',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '05',
        20,
        19), ('I0002',
              'C0002',
              'Tester',
              'Boston',
              '2 years exp., profinient in Java',
              'testin, managing',
              'P',
              'S0002',
              '33.33',
              '2015-05-12',
              '2015-06-01',
              '2015-06-30',
              '20.00',
              '05',
              20,
              19);


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0003',
        'C0003',
        'Java Deveoper',
        'Charlotte',
        'Proficient in Java, J2EE',
        'programming',
        'P',
        'S0003',
        '33.33',
        '2015-06-30',
        '2015-07-01',
        '2015-08-30',
        '20.00',
        '06',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0004',
        'C0004',
        'QA',
        'New  York',
        '1 year exp., Automation',
        'testing',
        'P',
        'S0004',
        '33.33',
        '2015-05-15',
        '2015-06-01',
        '2015-08-30',
        '20.00',
        '06',
        '10',
        '9');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0005',
        'C0005',
        'J2EE Developer',
        'Raleigh',
        '1 year of exp. , J2EE, Java',
        'coding',
        'P',
        'S0005',
        '33.33',
        '2015-05-01',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '08',
        '2',
        '2');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0006',
        'C0006',
        'Python Developer',
        'San Jose',
        'Good understanding of Python',
        'coding',
        'P',
        'S0006',
        '36.33',
        '2015-06-12',
        '2015-06-30',
        '2015-07-30',
        '20.00',
        '07',
        '2',
        '2');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0007',
        'C0007',
        'Senior Developer',
        'Dallas',
        '3 year of exp., C , C++, Java',
        'design, programming',
        'P',
        'S0007',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '16.00',
        '07',
        '25',
        '20');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0008',
        'C0008',
        'Senior QA',
        'Maryland',
        '3 years of exp, working knowledge of Black box and white box testing',
        'testing, managing',
        'P',
        'S0008',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '20',
        '19');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0009',
        'C0009',
        'Developer',
        'Chicago',
        'Proficient in Android or IOS',
        'programming',
        'P',
        'S0009',
        '32.00',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '5',
        '4');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0010',
        'C0010',
        'Tester',
        'San Jose',
        'minimum 3. GPA',
        'testing',
        'P',
        'S0010',
        '34.66',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '05',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0011',
        'C0010',
        'Developer',
        'San Jose',
        'Good knowledge of C, C++',
        'coding',
        'P',
        'S0010',
        '38.00',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '04',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0012',
        'C0012',
        'Music Intern',
        'New York',
        'Good in any music intrument',
        'Composing',
        'NP',
        'S0012',
        '00.00',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '03',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0013',
        'C0013',
        'Sketcher',
        'San Fransisco',
        'Good sketching or paiting skill',
        'Sketching',
        'NP',
        'S0013',
        '00.0',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '10',
        '8');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0014',
        'C0014',
        'History Intern',
        'Arlington',
        'Dynamic person having interest and good knowledge of world history',
        'documenting',
        'P',
        'S0014',
        '40.00',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '10',
        '9');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0015',
        'C0016',
        'History Intern',
        'Arlington',
        'Willing to travel, Dynamic ',
        'documenting',
        'NP',
        'S0016',
        '00.00',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '10',
        '9');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0016',
        'C0016',
        'Developer',
        'Charlotte',
        'MATLAB programmer',
        'coding',
        'P',
        'S0016',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '08',
        '10',
        '8');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0017',
        'C0017',
        'Designer',
        'Chicago',
        'proficient in Auto CAD',
        'designing',
        'P',
        'S0017',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '07',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0018',
        'C0018',
        'Designer',
        'Chicago',
        'Good knowledge of Auto CAD',
        'designing',
        'P',
        'S0018',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0019',
        'C0019',
        'Civil Intern',
        'Dallas',
        'more than 3.5 GPA',
        'contruction',
        'P',
        'S0019',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '5',
        '5');


INSERT INTO `its_data_warriors`.`internship_opportunities` (`internship_id`, `company_id`, `job_title`, `job_location`, `job_requirements`, `job_duties`, `internship_type`, `supervisor_id`, `pay_per_hour`, `due_date`, `start_date`, `end_date`, `weekly_hours_required`, `semester`, `total_openings`, `number_of_openings_left`)
VALUES ('I0020',
        'C0020',
        'Jr. Architect',
        'Las Vegas',
        'C++, C, Java, More than 2 years of Experience',
        'design, coding, managing',
        'P',
        'S0020',
        '33.33',
        '2015-05-12',
        '2015-06-01',
        '2015-06-30',
        '20.00',
        '06',
        '10',
        '8');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`internship_skill`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`internship_skill` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`internship_skill` ( `skill_id` CHAR(10) NOT NULL, `internship_id` CHAR(10) NOT NULL, `level` VARCHAR(15) NOT NULL, PRIMARY KEY (`skill_id`, `internship_id`),
                                                                   FOREIGN KEY (`internship_id`) REFERENCES `its_data_warriors`.`internship_opportunities` (`internship_id`),
                                                                   FOREIGN KEY (`skill_id`) REFERENCES `its_data_warriors`.`skills_details` (`skill_id`));


INSERT INTO `its_data_warriors`.`internship_skill`
VALUES ('S0001',
        'I0001',
        'Level 2'),('S0002',
                    'I0001',
                    'Level 3'), ('S0001',
                                 'I0002',
                                 'Level 2') ;


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0001',
        'I0003',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0011',
        'I0003',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0001',
        'I0005',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0011',
        'I0005',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0015',
        'I0006',
        'Level 2');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0005',
        'I0007',
        'Level 2');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0004',
        'I0007',
        'Level 2');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0001',
        'I0007',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0007',
        'I0009',
        'Level 2');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0008',
        'I0009',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0004',
        'I0011',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0005',
        'I0011',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0019',
        'I0012',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0020',
        'I0012',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0017',
        'I0017',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0017',
        'I0018',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0001',
        'I0020',
        'Level 3');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0004',
        'I0020',
        'Level 2');


INSERT INTO `its_data_warriors`.`internship_skill` (`skill_id`, `internship_id`, `level`)
VALUES ('S0005',
        'I0020',
        'Level 2');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`intern_placements`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`intern_placements` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`intern_placements` ( 
`person_id` INT NOT NULL, 
`internship_id` CHAR(10) NOT NULL, 
`placed` ENUM('Y','N','Interview_in_Progress') NOT NULL,
FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`),
FOREIGN KEY (`internship_id`) REFERENCES `its_data_warriors`.`internship_opportunities` (`internship_id`));


INSERT INTO `its_data_warriors`.`intern_placements`
VALUES (100001,
        'I0001',
        'Y'), (100001,
               'I0002',
               'Interview_in_Progress'), (100005,
                      'I0002',
                      'Y'), (100003,
                             'I0002',
                             'Y');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100007',
        'I0004',
        'Interview_in_Progress');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100007',
        'I0003',
        'Y');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100012',
        'I0006',
        'Y');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100012',
        'I0007',
        'Interview_in_Progress');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100012',
        'I0003',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100020',
        'I0012',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0001',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0002',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0003',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0004',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0005',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0006',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0007',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0008',
        'N');


INSERT INTO `its_data_warriors`.`intern_placements` (`person_id`, `internship_id`, `placed`)
VALUES ('100019',
        'I0009',
        'N');

 -- -----------------------------------------------------
-- Table `its_data_warriors`.`evaluation`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `its_data_warriors`.`evaluation` ;


CREATE TABLE IF NOT EXISTS `its_data_warriors`.`evaluation` ( `person_id` INT NOT NULL, `internship_id` CHAR(10) NOT NULL, `supervisor_evaluation` ENUM('Y','N') NOT NULL, `student_evalution` ENUM('Y','N') NOT NULL, `comments` VARCHAR(200) NULL,
                                                             FOREIGN KEY (`internship_id`) REFERENCES `its_data_warriors`.`internship_opportunities` (`internship_id`),
                                                             FOREIGN KEY (`person_id`) REFERENCES `its_data_warriors`.`person_details` (`person_id`));


INSERT INTO `its_data_warriors`.`evaluation`
VALUES (100001,
        'I0001',
        'Y',
        'N',
        'No Comments'), (100005,
                         'I0002',
                         'N',
                         'Y',
                         'No Comments'), (100003,
                                          'I0002',
                                          'Y',
                                          'N',
                                          'No Comments');


INSERT INTO `its_data_warriors`.`evaluation` (`person_id`, `internship_id`, `supervisor_evaluation`, `student_evalution`, `comments`)
VALUES ('100007',
        'I0004',
        'Y',
        'Y',
        'No Comments');


INSERT INTO `its_data_warriors`.`evaluation` (`person_id`, `internship_id`, `supervisor_evaluation`, `student_evalution`, `comments`)
VALUES ('100012',
        'I0006',
        'N',
        'Y',
        'No Comments');


INSERT INTO `its_data_warriors`.`evaluation` (`person_id`, `internship_id`, `supervisor_evaluation`, `student_evalution`, `comments`)
VALUES ('100019',
        'I0001',
        'Y',
        'N',
        'No Comment');







-- --------------------------------
-- trigger
-- --------------------------------
DELIMITER $$
CREATE TRIGGER placed_evaluation_insert AFTER UPDATE ON intern_placements
FOR EACH ROW
	BEGIN
	IF NEW.placed = 'Y'
	THEN
	INSERT INTO evaluation VALUES (NEW.person_id,NEW.internship_id,'N','N','None');
	END IF;
END$$
DELIMITER ;





-- ----------------------------------
-- STORED PROCEDURE
-- ----------------------------------
DELIMITER $$
CREATE procedure updateEvaluation(IN studentId INT , IN internId CHAR(10),
IN supervisor CHAR(1), IN student CHAR(1))

begin

UPDATE its_data_warriors.evaluation set supervisor_evaluation = supervisor,student_evalution = student
WHERE person_id = studentId AND internship_id = internId;

end$$
DELIMITER ;





-- -------------------
-- UNIQUE index
-- -------------------

CREATE INDEX index_skill_name
ON skills_details (skill_name);







-- -------------------
-- STORED PROCEDURE FOR ADDING INTERNSHIP
-- -------------------
DELIMITER $$

CREATE PROCEDURE its_data_warriors.add_internship(
IN companyid CHAR(10), 
IN supervisorid CHAR(10), 
IN newinternshipId CHAR(10), 
IN jobtitle VARCHAR(30), 
IN joblocation VARCHAR(30), 
IN jobrequirements TEXT, 
IN jobduties TEXT, 
IN internshiptype CHAR(5), 
IN payperhour FLOAT(4,2), 
IN duedate DATE, 
IN startdate DATE, 
IN enddate DATE, 
IN weeklyhoursrequired FLOAT(4,2), 
IN semester VARCHAR(20), 
IN totalopenings INT)


BEGIN

insert into its_data_warriors.internship_opportunities 
values
(
newinternshipId,
companyid,
jobtitle,
joblocation,
jobrequirements,
jobduties,
internshiptype,
supervisorid,
payperhour,
duedate,
startdate,
enddate,
weeklyhoursrequired,
semester,
totalopenings,
totalopenings
);


END$$
DELIMITER ;
