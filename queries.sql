CREATE DATABASE admission;

CREATE TABLE `admission`.`tb_general` ( 
    `general_id` INT(50) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL ,
    `gender` VARCHAR(1) NOT NULL , 
    `bloodGroup` VARCHAR(5) NOT NULL , 
    `dob` DATE NOT NULL , 
    `mob1` VARCHAR(10) NOT NULL , 
    `mob2` VARCHAR(10) NOT NULL , 
    `emailId` VARCHAR(40) NOT NULL , 
    `aadharNo` VARCHAR(16) NOT NULL UNIQUE, 
    `fatherName` VARCHAR(50) NOT NULL ,
    `fatherOccup` VARCHAR(30) NOT NULL , 
    `motherName` VARCHAR(50) NOT NULL , 
    `motherOccup` VARCHAR(30) NOT NULL , 
    `branch` VARCHAR(3) NOT NULL ,
    `minority` VARCHAR(12) NOT NULL , 
    `phyDis` VARCHAR(3) NOT NULL , 
    `image` BLOB NULL , 
    PRIMARY KEY (`general_id`)
);

CREATE TABLE `admission`.`tb_address` ( 
    `address_id` INT(50) NOT NULL AUTO_INCREMENT , 
    `general_id` INT(50) NOT NULL,
    `correspondenceAddress` VARCHAR(200) NOT NULL , 
    `correspondenceCity` VARCHAR(15) NOT NULL , 
    `correspondenceState` VARCHAR(15) NOT NULL ,
    `correspondencePincode` INT(8) NOT NULL , 
    `correspondenceMob` BIGINT(12) NOT NULL ,  
    `permanentAddress` VARCHAR(200) NOT NULL , 
    `permanentCity` VARCHAR(15) NOT NULL , 
    `permanentState` VARCHAR(15) NOT NULL , 
    `permanentPincode` INT(8) NOT NULL , 
    `PermanentMob` BIGINT(12) NOT NULL , 
    PRIMARY KEY (`address_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
) ;

CREATE TABLE `admission`.`tb_education` ( 
    `education_id` INT(50) NOT NULL AUTO_INCREMENT , 
    `general_id` INT(50) NOT NULL,
    `ssc10BoardName` VARCHAR(20) NOT NULL , 
    `ssc10YOP` INT(4) NOT NULL , 
    `ssc10Marks` INT(3) NOT NULL ,
    `ssc10Percentage` VARCHAR(3) NOT NULL , 
    `hsc12BoardName` VARCHAR(20) NOT NULL , 
    `hsc12YOP` INT(4) NOT NULL , 
    `hsc12Marks` INT(3) NOT NULL , 
    `hsc12Percentage` VARCHAR(3) NOT NULL , 
    `hsc12Sub` VARCHAR(150) NOT NULL , 
    `ssc10Sub` VARCHAR(150) NOT NULL , 
    PRIMARY KEY (`education_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
);

CREATE TABLE `admission`.`tb_enclosures` ( 
    `enclosure_id` INT(50) NOT NULL AUTO_INCREMENT ,
    `general_id` INT(50) NOT NULL,
    `seatAllotmentLetter` VARCHAR(3) NOT NULL , 
    `jeeRankCard` VARCHAR(3) NOT NULL , 
    `PhotoIdProof` VARCHAR(3) NOT NULL , 
    `CertificateDob` VARCHAR(3) NOT NULL ,
    `QualifyingExamMarksheet` VARCHAR(3) NOT NULL , 
    `IC-EWS` VARCHAR(3) NOT NULL , 
    `CC` VARCHAR(3) NOT NULL ,
    `CV` VARCHAR(3) NOT NULL , 
    `NCL-Certificate` VARCHAR(3) NOT NULL , 
    `disabilityCertificate` VARCHAR(3) NOT NULL , 
    `transferCertificate` VARCHAR(3) NOT NULL , 
    `migrationCertificate` VARCHAR(3) NOT NULL , 
    `aadharCard` VARCHAR(3) NOT NULL , 
    `gapCertificate` VARCHAR(3) NOT NULL , 
    PRIMARY KEY (`enclosure_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
);

CREATE TABLE `admission`.`tb_feePayment` ( 
    `feePayment_id` INT(50) NOT NULL AUTO_INCREMENT ,
    `general_id` INT(50) NOT NULL,
    `dd-ecs1` VARCHAR(30) NOT NULL , 
    `councelDate` DATE NOT NULL ,   
    `councelAmount` INT(5) NOT NULL , 
    `dd-ecs2` VARCHAR(30) NOT NULL , 
    `admissionDate` DATE NOT NULL , 
    `admissionAmount` INT(5) NOT NULL , 
    `totalAmount` INT(6) NOT NULL , 
    PRIMARY KEY (`feePayment_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
);

CREATE TABLE `admission`.`tb_jeeDetails` ( 
    `jeeDetail_id` INT(50) NOT NULL AUTO_INCREMENT, 
    `general_id` INT(50) NOT NULL,
    `roundOfAllotment` INT(2) NOT NULL, 
    `jeeRollNo` VARCHAR(20) NOT NULL,
    `air` INT(7) NOT NULL, 
    `mark` INT(3) NOT NULL, 
    `score` FLOAT(4) NOT NULL, 
    `year` INT(4) NOT NULL, 
    `allotmentCategory` VARCHAR(5) NOT NULL, 
    `candidateCategory` VARCHAR(5) NOT NULL, 
    PRIMARY KEY (`jeeDetail_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
);

CREATE TABLE `admission`.`tb_requirements` ( 
    `requirements_id` INT(50) NOT NULL AUTO_INCREMENT , 
    `general_id` INT(50) NOT NULL,
    `marksheet10` VARCHAR(3) NOT NULL , 
    `marksheet12` VARCHAR(3) NOT NULL , 
    `aashar` VARCHAR(3) NOT NULL , 
    `cc` VARCHAR(3) NOT NULL , 
    `pc` VARCHAR(3) NOT NULL , 
    `ews` VARCHAR(3) NOT NULL , 
    `hostelReq` VARCHAR(3) NOT NULL ,
    `chronicDisease` VARCHAR(3) NOT NULL , 
    `chronicDetails` LONGTEXT NOT NULL , 
    `dateOfFilling` DATE NOT NULL , 
    PRIMARY KEY (`requirements_id`),
    FOREIGN KEY (`general_id`) REFERENCES `tb_general`(`general_id`)
);

INSERT INTO `admission`.`tb_general` (`general_id`, `name`, `gender`, `bloodGroup`, `dob`, `mob1`, `mob2`, `emailId`, `aadharNo`, `fatherName`, `fatherOccup`, `motherName`, `motherOccup`, `branch`, `minority`, `phyDis`, `image`) 
VALUES (NULL, '$nameenglish', '$gender', '$bloodGroup', '$dob', '$mobile1', '$mobile2', '$emailid', '$aadhar', '$fatherName', '$fatherOccupation', '$motherName', '$motherOccupation', '$branch', '$religion', '$Disabled', NULL);

INSERT INTO `admission`.`tb_address` (`address_id`, `general_id`, `correspondenceAddress`, `correspondenceCity`, `correspondenceState`, `correspondencePincode`, `correspondenceMob`, `permanentAddress`, `permanentCity`, `permanentState`, `permanentPincode`, `PermanentMob`)
VALUES (NULL, '1', '$correspondenceAddress', '$correspondenceCity', '$correspondenceState', '$correspondencePincode', '$correspondenceMobile', '$permanentAddress', '$permanentCity', '$permanentState', '$permanentPincode', '$permanentMobile');

INSERT INTO `admission`.`tb_education` (`education_id`, `general_id`, `ssc10BoardName`, `ssc10YOP`, `ssc10Marks`, `ssc10Percentage`, `hsc12BoardName`, `hsc12YOP`, `hsc12Marks`, `hsc12Percentage`, `hsc12Sub`, `ssc10Sub`) 
VALUES (NULL, '1', '$boardName1', '$yop1', '$marksObtained1', '$grade1', '$boardName2', '$yop2', '$marksObtained2', '$grade2', ' $subject1', '$subject2 ');

INSERT INTO `admission`.`tb_enclosures` (`enclosure_id`, general_id,`seatAllotmentLetter`, `jeeRankCard`, `PhotoIdProof`, `CertificateDob`, `QualifyingExamMarksheet`, `IC-EWS`, `CC`, `CV`, `NCL-Certificate`, `disabilityCertificate`, `transferCertificate`, `migrationCertificate`, `aadharCard`, `gapCertificate`) 
VALUES (NULL, '1', '$SeatAllotment', '$RankCard', '$IDProof', '$proofofdate', '$MarkSheet', '$IncomeCertificate', '$CastCertificate ', '$Castvalidity', '$layerCertificate', '$disabilities', '$Transfer', '$MigrationCertificate', '$AadhaarCard ', '$GAP');

INSERT INTO `admission`.`tb_feePayment` (`feePayment_id`, `general_id`, `dd-ecs1`, `councelDate`, `councelAmount`, `dd-ecs2`, `admissionDate`, `admissionAmount`, `totalAmount`) 
VALUES (NULL, '1', '$dd1', '$date1', ' $amount1', '$dd2', '$date2', '$amount2', ($amount1 + $amount2));

INSERT INTO `admission`.`tb_jeeDetails` (`jeeDetail_id`, `general_id`, `roundOfAllotment`, `jeeRollNo`, `air`, `mark`, `score`, `year`, `allotmentCategory`, `candidateCategory`)
VALUES (NULL, '1', '$allotmentRound', '$jeeRollno', '$jeeAir ', '$jeeMark', '$jeeScore', '$jeeyear', '$category1', ' $category2');

INSERT INTO `admission`.`tb_requirements` (`requirements_id`, `general_id`,`marksheet10`, `marksheet12`, `aashar`, `cc`, `pc`, `ews`, `hostelReq`, `chronicDisease`, `chronicDetails`, `dateOfFilling`)
VALUES (NULL, '1', '$scanitem', '$scanitem2', '$scanitem3', '$scanitem4', '$scanitem5', '$scanitem6', '$hostelyn', '$sufferitem', '$diseaseText', '$declarationDate');

