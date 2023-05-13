CREATE TABLE staff(
    staff_id INT NOT NULL PRIMARY KEY,
	first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
	occupation VARCHAR(25) NOT NULL,
	login_id VARCHAR(25) NOT NULL,
	password VARCHAR(15) NOT NULL           
);

CREATE TABLE patients(
  patient_id INT NOT NULL PRIMARY KEY,
  patient_fname VARCHAR(25) NOT NULL,
  patient_lname VARCHAR(25) NOT NULL,
  dob DATE NOT NULL,
  address VARCHAR(50),
  phone_number VARCHAR(20),
  email VARCHAR(50),
  social_security VARCHAR(11),
  ethnicity VARCHAR(30)
);

CREATE TABLE insurance(
  insurance_id INT NOT NULL PRIMARY KEY,
  patient_id INT NOT NULL,
  insurance_name VARCHAR(30) NOT NULL,
  policy_num VARCHAR(20) NOT NULL,
  group_num VARCHAR(20) NOT NULL,
  FOREIGN KEY (patient_id) REFERENCES patients(patient_id)
);

CREATE TABLE caresFor (
    staff_id INT NOT NULL,
    patient_id INT NOT NULL,
    PRIMARY KEY (staff_id, patient_id),
    FOREIGN KEY (staff_id) REFERENCES staff(staff_id),
    FOREIGN KEY (patient_id) REFERENCES patients(patient_id)
);


