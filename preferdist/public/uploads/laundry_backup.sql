#Laundry Management MySQL database backup

# Generated: Sunday 18. December 2016 17:44 UTC  Laundry Management
# --------------------------------------------------------

SET sql_mode='NO_AUTO_VALUE_ON_ZERO';





#
# Delete any existing table `customers`
#

DROP TABLE IF EXISTS `customers`;



#
# Table structure of table `customers`
#

CREATE TABLE `customers` (
  `CustomersId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomerNumber` text,
  `CompaniesId` int(20) unsigned DEFAULT NULL,
  `CustomerName` text NOT NULL,
  `Address` text,
  `City` text,
  `Country` text,
  `PostCode` text,
  `ContactPerson` text,
  `PhoneNo` text,
  `FaxNumber` text,
  `Email` text,
  `DriverNo` text,
  `Notes` longtext,
  `Active` text,
  `Creditlimit` decimal(10,2) DEFAULT NULL,
  `DueSettlement` decimal(10,2) DEFAULT NULL,
  `TaxCode` int(20) DEFAULT NULL,
  `NominalCode` int(20) DEFAULT NULL,
  `VatNo` text,
  `ItemizingFixedBilling` text,
  `Invoicetype` text,
  `AmountFix` decimal(10,2) DEFAULT NULL,
  `HotTowelFree` text,
  `Weekday` text,
  `IsStanding` text,
  `StandingDay` int(20) DEFAULT NULL,
  `StandingAmount` decimal(10,2) DEFAULT NULL,
  `StandingType` text,
  `RegistrationDate` date NOT NULL,
  PRIMARY KEY (`CustomersId`),
  KEY `CompaniesId` (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;





#
# Data contents of table `customers`
#


INSERT INTO `customers`(`CustomersId`,`CustomerNumber`,`CompaniesId`,`CustomerName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`DriverNo`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxCode`,`NominalCode`,`VatNo`,`ItemizingFixedBilling`,`Invoicetype`,`AmountFix`,`HotTowelFree`,`Weekday`,`IsStanding`,`StandingDay`,`StandingAmount`,`StandingType`,`RegistrationDate`) VALUES
('25','1','1','JAIPUR','GRAFTON HOUSE,599 GRAFTON GATE EAST','MILTONKEYNES','','MK9 1AT','MR AHAED MIAH','01908669796','','','OP-B','VERY GOOD','yes','1500.00',NULL,'2','2','','Itemizing','monthly','1.00','no','1_3_','on','0','0.00','weekly','2016-01-01'),
('26','3','1','HIMALOY','2A CAMBRIDGE STREET.BLITCHLY','MILTONKYNES','','MK2 2TP','fds','07533879303','','','OP-B','','yes','100.00',NULL,'2','2','','Itemizing','weekly',NULL,'no','1_','',NULL,NULL,'','2016-01-01'),
('31','21','1','sdas','sdas','sdas','','sdas','sdas','sdas','','sdas','sdas','','yes','0.00',NULL,'3','3','','FixedBill','yearly','1.00','yes','3_5_','',NULL,NULL,'','2016-01-01'),
('40','22','1','sdas','re','rggre','','g','er','greg','','res','gser','regdg','yes','226.00',NULL,'3','2','','FixedBill','yearly','1.00','yes','2_3_4_6_','',NULL,NULL,'','2016-01-01'),
('47','5','1','BLUE ORCHID','THE SQUARE,ASPLEY GUISE','MILTONKEYNES','','MK17 8DF','MR KHALED','01908 282877','','','','','yes','500.00',NULL,'2','2','','Itemizing','monthly',NULL,'no','1_','on','0','0.00','weekly','2016-01-01'),
('61','44','1','gfg','dsgsdf','gds','','fgdf','fd','fdg','','g','fd','hffdhfg','yes','78858.00',NULL,'3','2','','Itemizing','yearly',NULL,'yes','1_3_5_7_','',NULL,NULL,'','2016-01-01'),
('63','2','1','ORCHID LOUNGE','1ST FLOOR,599 GRAFTON GATE EAST','MILTONKEYNES','','MK9 1 AT','MR AHAED MIAH','01908 669911','','','OP -B','','yes','200.00',NULL,'2','2','','Itemizing','monthly',NULL,'no','1_','',NULL,NULL,'','2016-01-01'),
('87','4','1','WOBURN THAI','2 LEIGHTON STREET','WOBURN','','ML17 9PJ','','07794064249','','','OP-B','Details','yes','200.00',NULL,'3','2','','FixedBill','weekly','1.00','no','1_','on','1','125.00','weekly','2016-01-01'),
('90','66666666','1','fuji color','dkaka','dhaka','','1206','selim','187596425385','','dsgd@dsfsd.dg','017558692453','wwwwwwwwwwwwwww','yes','99999999.99',NULL,'2','1','','Itemizing','yearly',NULL,'no','1_2_3_','on','25','22222.00','monthly','2016-01-01'),
('91','100','1','Fuad','canada','canada','','1206','canadacanada','canada','','canada@gmail.com','016438295','customr','yes','28.00',NULL,'1','1','','FixedBill','monthly','1.00','yes','2_4_6_','on','0','0.00','fortnight','2016-01-01'),
('92','20','1','ASIF','ASIF address','ASIF city','','12060','ASIF PS','0167435859','','ASIF@ASIF.ASIF','0155555555555','very good boy','yes','57.56',NULL,'2','2','','FixedBill','monthly','10.55','yes','1_2_3_','on','3','10.56','fortnight','2016-09-24'),
('93','22','1','asiq','asiq','asiq','','1206','asiqasiq','01674599855','','asiq','12','hot towel test','yes','4.00',NULL,'1','1','','FixedBill','yearly','1.00','yes','2_3_4_','on','0','0.00','fortnight','2016-10-12'),
('94','100','1','rubel','rubel','rubel','','rubel','rubel','rubel','','rubel','rubelrubel','fdghdfh','no','122.00',NULL,'1','1','','FixedBill','yearly','1.00','yes','1_3_6_','on','0','0.00','monthly','2016-08-13'),
('95','','1','e','ee','ee','','','ee','ee','','e','','','yes','1.00',NULL,'1','1','','FixedBill','yearly','1.00','no','5_7_','',NULL,NULL,'','2016-10-16');







#
# Delete any existing table `bank`
#

DROP TABLE IF EXISTS `bank`;



#
# Table structure of table `bank`
#

CREATE TABLE `bank` (
  `BankId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `BankName` text,
  `Address` text,
  `OpeningBalance` int(20) DEFAULT NULL,
  `Status` text,
  PRIMARY KEY (`BankId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `bank`
#








#
# Delete any existing table `banktransfer`
#

DROP TABLE IF EXISTS `banktransfer`;



#
# Table structure of table `banktransfer`
#

CREATE TABLE `banktransfer` (
  `BankTransferId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `BankIdTo` int(20) unsigned DEFAULT NULL,
  `BankIdFrom` int(20) unsigned DEFAULT NULL,
  `TransferDate` date DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  PRIMARY KEY (`BankTransferId`),
  KEY `BankIdTo` (`BankIdTo`),
  KEY `BankIdFrom` (`BankIdFrom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `banktransfer`
#








#
# Delete any existing table `companies`
#

DROP TABLE IF EXISTS `companies`;



#
# Table structure of table `companies`
#

CREATE TABLE `companies` (
  `CompaniesId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CompanyName` text NOT NULL,
  `Notes` text,
  `Creditlimit` int(20) DEFAULT NULL,
  `DueSettlement` int(20) DEFAULT NULL,
  `TaxCode` int(20) DEFAULT NULL,
  `NominalCode` int(20) DEFAULT NULL,
  `VatNo` text,
  `Active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;





#
# Data contents of table `companies`
#


INSERT INTO `companies`(`CompaniesId`,`CompanyName`,`Notes`,`Creditlimit`,`DueSettlement`,`TaxCode`,`NominalCode`,`VatNo`,`Active`) VALUES
('1','worldmart','',NULL,NULL,NULL,NULL,'',NULL);







#
# Delete any existing table `employees`
#

DROP TABLE IF EXISTS `employees`;



#
# Table structure of table `employees`
#

CREATE TABLE `employees` (
  `EmployeeId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` text,
  `LastName` text,
  `JobTitle` text,
  `Email` text,
  `Address` text,
  `City` text,
  `County` text,
  `PostalCode` text,
  `HomePhone` text,
  `MobilePhone` text,
  `BillingRate` int(20) DEFAULT NULL,
  `HireDate` date DEFAULT NULL,
  `Department` text,
  `EmployeeNote` longtext,
  `Active` text,
  `InTime` text,
  `OutTime` text,
  PRIMARY KEY (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `employees`
#








#
# Delete any existing table `employeestransition`
#

DROP TABLE IF EXISTS `employeestransition`;



#
# Table structure of table `employeestransition`
#

CREATE TABLE `employeestransition` (
  `EmployeesTransitionId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `EmployeeId` int(20) unsigned DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `HoursWorked` text,
  `BillingRate` int(20) DEFAULT NULL,
  `TotalPay` int(20) DEFAULT NULL,
  `Paid` tinyint(1) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `Refrence` text,
  `CheckNo` text,
  `BankId` int(20) DEFAULT NULL,
  `PayAmount` int(20) DEFAULT NULL,
  PRIMARY KEY (`EmployeesTransitionId`),
  KEY `EmployeeId` (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `employeestransition`
#








#
# Delete any existing table `employeestransitiondetails`
#

DROP TABLE IF EXISTS `employeestransitiondetails`;



#
# Table structure of table `employeestransitiondetails`
#

CREATE TABLE `employeestransitiondetails` (
  `EmployeesTransitionDetailsId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `EmployeesTransitionId` int(20) unsigned DEFAULT NULL,
  `EmployeeId` int(20) unsigned DEFAULT NULL,
  `WorkDate` date DEFAULT NULL,
  `TimeIn` text,
  `TimeOut` text,
  `HoursWorked` text,
  `Notes` longtext,
  PRIMARY KEY (`EmployeesTransitionDetailsId`),
  KEY `EmployeesTransitionId` (`EmployeesTransitionId`),
  KEY `EmployeeId` (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `employeestransitiondetails`
#








#
# Delete any existing table `expensedetails`
#

DROP TABLE IF EXISTS `expensedetails`;



#
# Table structure of table `expensedetails`
#

CREATE TABLE `expensedetails` (
  `ExpenseDetailsId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ExpencesType` int(20) unsigned DEFAULT NULL,
  `BankId` int(20) unsigned DEFAULT NULL,
  `CheckNumber` text,
  `Amount` int(20) DEFAULT NULL,
  `DueAmount` int(20) DEFAULT NULL,
  `EmployeeId` int(20) unsigned DEFAULT NULL,
  `ExpencesDate` date DEFAULT NULL,
  `Description` longtext,
  PRIMARY KEY (`ExpenseDetailsId`),
  KEY `BankId` (`BankId`),
  KEY `EmployeeId` (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `expensedetails`
#








#
# Delete any existing table `expensetype`
#

DROP TABLE IF EXISTS `expensetype`;



#
# Table structure of table `expensetype`
#

CREATE TABLE `expensetype` (
  `ExpenseTypeId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ExpenseType` text,
  PRIMARY KEY (`ExpenseTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `expensetype`
#








#
# Delete any existing table `invoicedetails`
#

DROP TABLE IF EXISTS `invoicedetails`;



#
# Table structure of table `invoicedetails`
#

CREATE TABLE `invoicedetails` (
  `InvoiceDetailsId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `InvoicesId` int(20) unsigned DEFAULT NULL,
  `ItemId` int(20) unsigned DEFAULT NULL,
  `ProductsId` int(20) unsigned DEFAULT NULL,
  `OrderNo` int(20) DEFAULT NULL,
  `Quantity` int(20) DEFAULT NULL,
  `Extra` int(20) DEFAULT NULL,
  `Damage` int(20) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `PricePerUnit` decimal(10,2) DEFAULT NULL,
  `PaymentTerms` text,
  `Discount` decimal(10,2) DEFAULT NULL,
  `Datetime` date DEFAULT NULL,
  `Flag` text,
  PRIMARY KEY (`InvoiceDetailsId`),
  KEY `InvoicesId` (`InvoicesId`),
  KEY `ItemId` (`ItemId`),
  KEY `ProductsId` (`ProductsId`)
) ENGINE=InnoDB AUTO_INCREMENT=347 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoicedetails`
#


INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`Price`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('13','9','3','16',NULL,'3','5','1','0.00','16.00','',NULL,NULL,'yes'),
('14','9','11','18',NULL,'3','5',NULL,'0.00','16.00','',NULL,NULL,''),
('15','9','13','20',NULL,'35','0',NULL,'0.00','70.00','',NULL,NULL,''),
('25','12','3','32',NULL,'3','5',NULL,'0.00','16.00','',NULL,NULL,''),
('26','12','12','33',NULL,'4','5',NULL,'0.00','18.00','',NULL,NULL,''),
('27','12','6','34',NULL,'3','0',NULL,'0.00','6.00','',NULL,NULL,'yes'),
('28','12','11','35',NULL,'4','4',NULL,'0.00','16.00','',NULL,NULL,''),
('29','12','13','36',NULL,'6','0',NULL,'0.00','12.00','',NULL,NULL,''),
('30','12','14','37',NULL,'45','0',NULL,'0.00','90.00','',NULL,NULL,''),
('32','14','3','16',NULL,'1','0','1','0.00','2.00','',NULL,NULL,'no'),
('33','14','6','17',NULL,'0','1','0','0.00','2.00','',NULL,NULL,'no'),
('34','14','11','18',NULL,'1','1','0','0.00','4.00','',NULL,NULL,'no'),
('35','14','14','21',NULL,'1','0','0','0.00','2.00','',NULL,NULL,'no'),
('42','17','3','16',NULL,'31','1','2','0.00','64.00','',NULL,NULL,'no'),
('43','17','11','18',NULL,'20','0','0','0.00','40.00','',NULL,NULL,'no'),
('44','17','13','20',NULL,'4','0','0','0.00','8.00','',NULL,NULL,'no'),
('66','16','3','16',NULL,'5','0','0','0.00','10.00','',NULL,NULL,'no'),
('67','16','11','18',NULL,'4','0','0','0.00','8.00','',NULL,NULL,'no'),
('68','16','13','20',NULL,'5','1','0','0.00','12.00','',NULL,NULL,'no'),
('69','16','14','21',NULL,'6','0','0','0.00','9.00','',NULL,NULL,'no'),
('70','18','3','16',NULL,'20','0','0','0.00','40.00','',NULL,NULL,'no'),
('71','18','11','18',NULL,'0','1','1','0.00','2.00','',NULL,NULL,'no'),
('72','18','13','20',NULL,'0','2','0','0.00','4.00','',NULL,NULL,'no'),
('73','18','14','21',NULL,'21','4','0','0.00','38.00','',NULL,NULL,'no'),
('74','19','3','16',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('75','20','3','16',NULL,'12','1','0','0.00','26.00','',NULL,NULL,'no'),
('76','20','11','18',NULL,'22','0','0','0.00','44.00','',NULL,NULL,'no'),
('158','59','3','16',NULL,'4','4','4','0.00','16.00','',NULL,NULL,'no'),
('159','59','6','17',NULL,'4','4','4','0.00','16.00','',NULL,NULL,'no'),
('160','59','11','18',NULL,'4','4','4','0.00','16.00','',NULL,NULL,'no'),
('161','59','13','20',NULL,'4','4','4','0.00','16.00','',NULL,NULL,'no'),
('162','59','14','21',NULL,'4','4','4','0.00','12.00','',NULL,NULL,'no'),
('163','60','3','32',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('164','60','12','33',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('165','60','6','34',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('166','60','11','35',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('167','60','13','36',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('168','60','14','37',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('169','61','6','38',NULL,'1','1','1','0.00','5.00','',NULL,NULL,'no'),
('170','61','11','39',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('171','62','6','38',NULL,'2','2','2','0.00','10.00','',NULL,NULL,'no'),
('172','62','11','39',NULL,'2','2','2','0.00','8.00','',NULL,NULL,'no'),
('178','64','3','16',NULL,'22','1','1','0.00','46.00','',NULL,NULL,'no'),
('179','64','6','17',NULL,'330','10','1','0.00','680.00','',NULL,NULL,'no'),
('180','64','11','18',NULL,'22','1','1','0.00','46.00','',NULL,NULL,'no'),
('181','64','13','20',NULL,'22','1','1','0.00','46.00','',NULL,NULL,'no'),
('182','64','14','21',NULL,'22','1','1','0.00','35.00','',NULL,NULL,'no'),
('198','66','3','32',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no'),
('199','66','12','33',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no'),
('200','66','6','34',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no'),
('201','66','11','35',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`Price`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('202','66','13','36',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no'),
('203','66','14','37',NULL,'22','22','22','0.00','88.00','',NULL,NULL,'no'),
('204','67','3','22',NULL,'22','2','2','0.00','48.00','',NULL,NULL,'no'),
('205','68','3','22',NULL,'1','1','1','0.00','4.00','',NULL,NULL,'no'),
('206','69','3','22',NULL,'2','22','0','0.00','48.00','',NULL,NULL,'no'),
('207','70','3','22',NULL,'2','2','2','0.00','8.00','',NULL,NULL,'no'),
('208','71','3','22',NULL,'3','0','0','0.00','6.00','',NULL,NULL,'no'),
('209','72','3','22',NULL,'33','0','0','0.00','66.00','',NULL,NULL,'no'),
('210','73','15','46',NULL,'20','1','1','0.00','42.00','',NULL,NULL,'no'),
('211','74','3','16',NULL,'5','0','0','0.00','10.00','',NULL,NULL,'no'),
('212','74','11','18',NULL,'7','0','0','0.00','14.00','',NULL,NULL,'no'),
('213','74','13','20',NULL,'8','0','0','0.00','16.00','',NULL,NULL,'no'),
('214','74','14','21',NULL,'8','0','0','0.00','12.00','',NULL,NULL,'no'),
('215','74','15','40',NULL,'6','0','0','0.00','12.00','',NULL,NULL,'no'),
('216','63','3','16',NULL,'5','5','5','0.00','20.00','',NULL,NULL,'no'),
('217','63','6','17',NULL,'5','5','5','0.00','20.00','',NULL,NULL,'no'),
('218','63','11','18',NULL,'5','5','5','0.00','20.00','',NULL,NULL,'no'),
('219','63','13','20',NULL,'5','5','5','0.00','20.00','',NULL,NULL,'no'),
('220','63','14','21',NULL,'5','55','5','0.00','90.00','',NULL,NULL,'no'),
('221','75','3','16',NULL,'1','0','0','0.00','2.00','',NULL,NULL,'no'),
('222','75','6','17',NULL,'2','0','0','0.00','4.00','',NULL,NULL,'no'),
('223','75','11','18',NULL,'5','0','0','0.00','10.00','',NULL,NULL,'no'),
('224','75','13','20',NULL,'5','0','0','0.00','10.00','',NULL,NULL,'no'),
('225','75','15','40',NULL,'2','0','0','0.00','4.00','',NULL,NULL,'no'),
('226','76','3','16',NULL,'1','0','0','0.00','2.00','',NULL,NULL,'no'),
('227','76','6','17',NULL,'1','0','0','0.00','2.00','',NULL,NULL,'no'),
('228','76','11','18',NULL,'2','0','0','0.00','4.00','',NULL,NULL,'no'),
('229','76','13','20',NULL,'2','0','0','0.00','4.00','',NULL,NULL,'no'),
('230','76','14','21',NULL,'2','0','0','0.00','3.00','',NULL,NULL,'no'),
('231','76','15','40',NULL,'3','0','0','0.00','6.00','',NULL,NULL,'no'),
('232','77','24','51',NULL,'135','0','0','0.00','73.00','',NULL,NULL,'no'),
('233','77','23','53',NULL,'1','0','0','0.00','0.00','',NULL,NULL,'no'),
('234','77','30','54',NULL,'15','0','0','0.00','17.00','',NULL,NULL,'no'),
('235','77','11','55',NULL,'63','0','0','0.00','19.00','',NULL,NULL,'no'),
('236','77','3','56',NULL,'395','0','0','0.00','51.00','',NULL,NULL,'no'),
('237','77','4','57',NULL,'36','0','0','0.00','18.00','',NULL,NULL,'no'),
('238','77','6','58',NULL,'28','0','0','0.00','28.00','',NULL,NULL,'no'),
('239','77','17','59',NULL,'5','0','0','0.00','5.00','',NULL,NULL,'no'),
('240','78','24','51',NULL,'5','0','0','0.00','3.00','',NULL,NULL,'no'),
('241','78','23','53',NULL,'2','0','0','0.00','1.00','',NULL,NULL,'no'),
('242','78','30','54',NULL,'3','0','0','0.00','3.00','',NULL,NULL,'no'),
('243','78','11','55',NULL,'0','1','0','0.00','0.00','',NULL,NULL,'no'),
('244','78','3','56',NULL,'1','0','0','0.00','0.00','',NULL,NULL,'no'),
('245','78','38','60',NULL,'5','0','0','0.00','4.00','',NULL,NULL,'no'),
('246','79','23','53',NULL,'3','0','0','0.00','1.00','',NULL,NULL,'no'),
('247','79','3','56',NULL,'5','0','0','0.00','1.00','',NULL,NULL,'no'),
('284','88','24','51',NULL,'1','0','0','0.00','0.54','',NULL,NULL,'no'),
('285','88','23','53',NULL,'2','0','0','0.00','0.90','',NULL,NULL,'no'),
('286','88','3','56',NULL,'22','0','0','0.00','2.86','',NULL,NULL,'no'),
('320','82','24','51',NULL,'11','0','0','0.54','5.94','',NULL,NULL,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`Price`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('321','82','23','53',NULL,'1','0','0','0.45','0.45','',NULL,NULL,'no'),
('322','82','30','54',NULL,'11','0','0','1.10','12.10','',NULL,NULL,'no'),
('323','82','11','55',NULL,'1','0','0','0.30','0.30','',NULL,NULL,'no'),
('324','82','3','56',NULL,'1','0','0','0.13','0.13','',NULL,NULL,'no'),
('325','82','6','58',NULL,'10','0','0','1.00','10.00','',NULL,NULL,'no'),
('326','82','17','59',NULL,'1','0','0','1.00','1.00','',NULL,NULL,'no'),
('327','82','38','60',NULL,'11','0','0','0.90','9.90','',NULL,NULL,'no'),
('328','82','37','61',NULL,'2','0','0','0.20','0.40','',NULL,NULL,'no'),
('329','90','24','51',NULL,'2','2','0','0.54','2.16','',NULL,NULL,'no'),
('330','90','23','53',NULL,'2','2','0','0.45','1.80','',NULL,NULL,'no'),
('331','90','11','55',NULL,'2','2','0','0.30','1.20','',NULL,NULL,'no'),
('332','90','3','56',NULL,'2','2','0','0.13','0.52','',NULL,NULL,'no'),
('333','90','37','61',NULL,'2','2','0','0.20','0.80','',NULL,NULL,'no'),
('334','81','38','60',NULL,'1','0','0','0.90','0.90','',NULL,NULL,'no'),
('335','80','24','51',NULL,'5','0','0','0.54','2.70','',NULL,NULL,'no'),
('336','80','23','53',NULL,'6','0','0','0.45','2.70','',NULL,NULL,'no'),
('337','80','38','60',NULL,'4','0','0','0.90','3.60','',NULL,NULL,'no'),
('338','89','24','51',NULL,'2','0','0','0.54','1.08','',NULL,NULL,'no'),
('339','89','23','53',NULL,'2','0','0','0.45','0.90','',NULL,NULL,'no'),
('340','89','11','55',NULL,'2','0','0','0.30','0.60','',NULL,NULL,'no'),
('341','89','3','56',NULL,'2','0','0','0.13','0.26','',NULL,NULL,'no'),
('342','89','4','57',NULL,'2','0','0','0.50','1.00','',NULL,NULL,'no'),
('343','89','6','58',NULL,'2','0','0','1.00','2.00','',NULL,NULL,'no'),
('344','89','17','59',NULL,'2','0','0','1.00','2.00','',NULL,NULL,'no'),
('345','89','38','60',NULL,'2','0','0','0.90','1.80','',NULL,NULL,'no'),
('346','89','37','61',NULL,'2','0','0','0.20','0.40','',NULL,NULL,'no');







#
# Delete any existing table `invoicemaster`
#

DROP TABLE IF EXISTS `invoicemaster`;



#
# Table structure of table `invoicemaster`
#

CREATE TABLE `invoicemaster` (
  `InvoiceMasterId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `TotalAmount` int(20) DEFAULT NULL,
  `DueAmount` int(20) DEFAULT NULL,
  `Notes` text,
  `Status` text,
  `Tax` int(20) DEFAULT NULL,
  `TotalWithVAT` int(20) DEFAULT NULL,
  `DueWithVAT` int(20) DEFAULT NULL,
  PRIMARY KEY (`InvoiceMasterId`),
  KEY `CustomersId` (`CustomersId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `invoicemaster`
#








#
# Delete any existing table `invoices`
#

DROP TABLE IF EXISTS `invoices`;



#
# Table structure of table `invoices`
#

CREATE TABLE `invoices` (
  `InvoicesId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `CompaniesId` int(20) unsigned DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `Notes` text,
  `Status` text,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `DueAmount` decimal(10,2) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  PRIMARY KEY (`InvoicesId`),
  KEY `CustomersId` (`CustomersId`),
  KEY `CompaniesId` (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoices`
#


INSERT INTO `invoices`(`InvoicesId`,`CustomersId`,`CompaniesId`,`InvoiceDate`,`Notes`,`Status`,`TotalAmount`,`DueAmount`,`DueDate`) VALUES
('9','25','1','2016-08-28','','yes','200.00','200.00',NULL),
('12','63','1','2016-08-28','','yes','200.00','200.00',NULL),
('14','25','1','2016-08-28','','yes','200.00','200.00',NULL),
('16','25','1','2016-08-29','','yes','39.00','39.00',NULL),
('17','25','1','2016-08-28','','yes','200.00','200.00',NULL),
('18','25','1','2016-08-28','','yes','84.00','84.00',NULL),
('19','25','1','2016-08-28','','yes','4.00','4.00',NULL),
('20','25','1','2016-09-17','','yes','70.00','70.00',NULL),
('59','25','1','2016-09-24','','yes','76.00','76.00',NULL),
('60','63','1','2016-09-21','','yes','24.00','24.00',NULL),
('61','92','1','2016-09-02','','yes','9.00','9.00',NULL),
('62','92','1','2016-10-02','','yes','18.00','18.00',NULL),
('63','25','1','2016-10-03','','yes','170.00','170.00',NULL),
('64','25','1','2016-10-08','','yes','853.00','853.00',NULL),
('66','63','1','2016-10-10','','yes','528.00','528.00',NULL),
('67','26','1','2016-10-12','','yes','48.00','48.00',NULL),
('68','26','1','2016-10-12','','yes','4.00','4.00',NULL),
('69','26','1','2016-10-12','','yes','48.00','48.00',NULL),
('70','26','1','2016-10-12','','yes','8.00','8.00',NULL),
('71','26','1','2016-10-12','','yes','6.00','6.00',NULL),
('72','26','1','2016-10-12','','yes','66.00','66.00',NULL),
('73','94','1','2016-10-06','','yes','42.00','42.00',NULL),
('74','25','1','2016-10-15','','yes','64.00','64.00',NULL),
('75','25','1','2016-10-16','','yes','30.00','30.00',NULL),
('76','25','1','2016-10-16','','yes','21.00','21.00',NULL),
('77','25','1','2016-10-01','','yes','211.00','211.00',NULL),
('78','25','1','2016-10-17','','yes','12.00','12.00',NULL),
('79','25','1','2016-10-17','','yes','2.00','2.00',NULL),
('80','25','1','2016-10-17','','yes','9.00','9.00',NULL),
('81','25','1','2016-10-17','','yes','0.90','0.90',NULL),
('82','25','1','2016-10-18','','yes','40.22','40.22',NULL),
('88','25','1','2016-10-18','','yes','4.30','4.30',NULL),
('89','25','1','2016-10-22','','yes','10.04','10.04',NULL),
('90','25','1','2016-10-22','','yes','6.48','6.48',NULL);







#
# Delete any existing table `invoicetransaction`
#

DROP TABLE IF EXISTS `invoicetransaction`;



#
# Table structure of table `invoicetransaction`
#

CREATE TABLE `invoicetransaction` (
  `InvoiceTransactionId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `InvoiceMasterId` int(20) unsigned DEFAULT NULL,
  `DeliveryNoteNo` int(20) DEFAULT NULL,
  `DueAmount` int(20) DEFAULT NULL,
  `DeliveryDate` date DEFAULT NULL,
  `TotalAmount` int(20) DEFAULT NULL,
  PRIMARY KEY (`InvoiceTransactionId`),
  KEY `InvoiceMasterId` (`InvoiceMasterId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `invoicetransaction`
#








#
# Delete any existing table `item`
#

DROP TABLE IF EXISTS `item`;



#
# Table structure of table `item`
#

CREATE TABLE `item` (
  `ItemId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ItemName` text,
  `AveragePrice` decimal(10,2) DEFAULT NULL,
  `ItemCategoryId` int(20) unsigned DEFAULT NULL,
  `ItemUnitId` int(20) unsigned DEFAULT NULL,
  `InitialQty` int(20) DEFAULT NULL,
  `ItemType` text,
  `ItemNote` longtext,
  `Active` text,
  `ItemColor` text,
  `MinStock` int(20) DEFAULT NULL,
  `MaxStock` int(20) DEFAULT NULL,
  PRIMARY KEY (`ItemId`),
  KEY `ItemCategoryId` (`ItemCategoryId`),
  KEY `ItemUnitId` (`ItemUnitId`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;





#
# Data contents of table `item`
#


INSERT INTO `item`(`ItemId`,`ItemName`,`AveragePrice`,`ItemCategoryId`,`ItemUnitId`,`InitialQty`,`ItemType`,`ItemNote`,`Active`,`ItemColor`,`MinStock`,`MaxStock`) VALUES
('3','NAPKIN','0.00','1','2','0','non-stock','','yes','','0','0'),
('4','APRON','1.00','1','2','0','non-stock','','yes','','0','0'),
('6','COAT','1.00','1','2','0','non-stock','','yes','','0','0'),
('11','K CLOTH','0.00','1','2','0','non-stock','','yes','','0','0'),
('12','H  TOWEL(LARGE)','0.00','1','4','0','stock','','yes','','0','0'),
('13','H TOWEL (MEDIUM)','0.00','1','4','0','stock','','yes','','0','0'),
('14','H TOWEL( SMALL)','0.00','1','4','0','stock','','yes','','0','0'),
('15','H TOWEL PAPER L','0.00','1','4','0','stock','','yes','','0','0'),
('16','H TOWEL PAPER  S','0.00','1','4','0','stock','','yes','','0','0'),
('17','CHEF TROUSER','0.00','1','2','0','stock','','yes','','0','0'),
('18','WAITER CLOTH','0.00','1','2','0','non-stock','','yes','','0','0'),
('19','CABINET ROLL','0.00','1','2','0','non-stock','','yes','','0','0'),
('20','DOOR MATT','0.00','1','2','0','non-stock','','yes','','0','0'),
('21','RUNNER','0.00','1','2','0','non-stock','','yes','','0','0'),
('22','T CLOTH 36X36','0.00','1','2','0','non-stock','','yes','','0','0'),
('23','T CLOTH 45X45','0.00','1','2','0','non-stock','','yes','','0','0'),
('24','T CLOTH 54X54','0.00','1','2','0','non-stock','','yes','','0','0'),
('25','T CLOTH 54X70','0.00','1','2','0','non-stock','','yes','','0','0'),
('26','T CLOTH 54X90','0.00','1','2','0','non-stock','','yes','','0','0'),
('27','T CLOTH 70X70','0.00','1','2','0','non-stock','','yes','','0','0'),
('28','T CLOTH 63X63','0.00','1','2','0','non-stock','','yes','','0','0'),
('29','T CLOTH 90X90','0.00','1','2','0','non-stock','','yes','','0','0'),
('30','T CLOTH 90 ROUND','0.00','1','2','0','non-stock','','yes','','0','0'),
('31','TURKISH ROLL','0.00','1','2','0','non-stock','','yes','','0','0'),
('32','SINGLE BEDSHEET','0.00','1','2','0','non-stock','','yes','','0','0'),
('33','PILLOW CASE','0.00','1','2','0','non-stock','','yes','','0','0'),
('34','PLIMSOLES','0.00','1','2','0','non-stock','','yes','','0','0'),
('35','SCRUB TOP','0.00','1','2','0','non-stock','','yes','','0','0'),
('36','SCRUB BOTTOM','0.00','1','2','0','non-stock','','yes','','0','0'),
('37','HOT TOWEL','0.00','1','2','0','non-stock','','yes','','0','0'),
('38','T CLOTH 70X80','1.00','1','2','0','non-stock','','yes','','0','0');







#
# Delete any existing table `itembuy`
#

DROP TABLE IF EXISTS `itembuy`;



#
# Table structure of table `itembuy`
#

CREATE TABLE `itembuy` (
  `ItemBuyId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ItemName` text,
  `Price` double DEFAULT NULL,
  `SupplierId` int(20) unsigned DEFAULT NULL,
  `ItemCategoryId` int(20) unsigned DEFAULT NULL,
  `MinStock` int(20) DEFAULT NULL,
  `MaxStock` int(20) DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL,
  `ItemNote` longtext,
  `ItemType` text,
  PRIMARY KEY (`ItemBuyId`),
  KEY `ItemCategoryId` (`ItemCategoryId`),
  KEY `SupplierId` (`SupplierId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





#
# Data contents of table `itembuy`
#








#
# Delete any existing table `itemcategory`
#

DROP TABLE IF EXISTS `itemcategory`;



#
# Table structure of table `itemcategory`
#

CREATE TABLE `itemcategory` (
  `ItemCategoryId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ItemCategory` text,
  PRIMARY KEY (`ItemCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;





#
# Data contents of table `itemcategory`
#


INSERT INTO `itemcategory`(`ItemCategoryId`,`ItemCategory`) VALUES
('1','cloth'),
('2','ttools'),
('3','furniture'),
('4','sports'),
('5','HOUSEhouse'),
('6','animal'),
('14','ffffff'),
('16','dgd'),
('17','ere'),
('18','fhf'),
('19','RRrrr'),
('20','dd'),
('21','SSC'),
('22','rr'),
('23','rhhh1'),
('39','tttt'),
('40','DDDDDDDDDDD'),
('41','fffffffffFFFFFFFF'),
('42','SSWWWRRRTT'),
('44','wedd');







#
# Delete any existing table `itemunit`
#

DROP TABLE IF EXISTS `itemunit`;



#
# Table structure of table `itemunit`
#

CREATE TABLE `itemunit` (
  `ItemUnitId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ItemUnit` text,
  PRIMARY KEY (`ItemUnitId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;





#
# Data contents of table `itemunit`
#


INSERT INTO `itemunit`(`ItemUnitId`,`ItemUnit`) VALUES
('1','kg'),
('2','eacH'),
('3','letter'),
('4','Piece');







#
# Delete any existing table `messages`
#

DROP TABLE IF EXISTS `messages`;



#
# Table structure of table `messages`
#

CREATE TABLE `messages` (
  `MessagesId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `MessageDate` date DEFAULT NULL,
  `Message` longtext,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `CompaniesId` int(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`MessagesId`),
  KEY `CustomersId` (`CustomersId`),
  KEY `CompaniesId` (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;





#
# Data contents of table `messages`
#


INSERT INTO `messages`(`MessagesId`,`MessageDate`,`Message`,`CustomersId`,`CompaniesId`) VALUES
('9','2016-08-30','hello','25','1'),
('10','2016-08-29','gi','25','1'),
('11','2016-10-15','hhhh','94','1');







#
# Delete any existing table `migrations`
#

DROP TABLE IF EXISTS `migrations`;



#
# Table structure of table `migrations`
#

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





#
# Data contents of table `migrations`
#


INSERT INTO `migrations`(`migration`,`batch`) VALUES
('2014_10_12_000000_create_users_table','1'),
('2014_10_12_100000_create_password_resets_table','1');







#
# Delete any existing table `nominal`
#

DROP TABLE IF EXISTS `nominal`;



#
# Table structure of table `nominal`
#

CREATE TABLE `nominal` (
  `NominalId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `NominalCode` text,
  `CodeDescription` text,
  PRIMARY KEY (`NominalId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;





#
# Data contents of table `nominal`
#


INSERT INTO `nominal`(`NominalId`,`NominalCode`,`CodeDescription`) VALUES
('1','5556','car'),
('2','5460','fuel'),
('3','5588','VISIT');







#
# Delete any existing table `password_resets`
#

DROP TABLE IF EXISTS `password_resets`;



#
# Table structure of table `password_resets`
#

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





#
# Data contents of table `password_resets`
#








#
# Delete any existing table `pendingwork`
#

DROP TABLE IF EXISTS `pendingwork`;



#
# Table structure of table `pendingwork`
#

CREATE TABLE `pendingwork` (
  `PendingWorkId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CompaniesId` int(20) unsigned DEFAULT NULL,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `CustomerName` text,
  `PendingDate` date DEFAULT NULL,
  `Status` text,
  PRIMARY KEY (`PendingWorkId`),
  KEY `CompaniesId` (`CompaniesId`),
  KEY `CustomersId` (`CustomersId`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;





#
# Data contents of table `pendingwork`
#


INSERT INTO `pendingwork`(`PendingWorkId`,`CompaniesId`,`CustomersId`,`CustomerName`,`PendingDate`,`Status`) VALUES
('31','1','63','worldmartccustomer','2016-08-22','Pending DeliveryNote'),
('32','1','63','worldmartccustomer','2016-08-23','Pending DeliveryNote'),
('33','1','63','worldmartccustomer','2016-08-24','Pending DeliveryNote'),
('34','1','25','raju','2016-08-12','Pending DeliveryNote'),
('35','1','25','raju','2016-08-13','Pending DeliveryNote'),
('36','1','25','raju','2016-08-15','Pending DeliveryNote'),
('37','1','25','raju','2016-08-17','Pending DeliveryNote'),
('38','1','25','raju','2016-08-18','Pending DeliveryNote'),
('39','1','25','raju','2016-08-19','Pending DeliveryNote'),
('40','1','25','raju','2016-08-20','Pending DeliveryNote'),
('41','1','25','raju','2016-08-22','Pending DeliveryNote'),
('42','1','25','raju','2016-08-24','Pending DeliveryNote'),
('43','1','25','raju','2016-08-25','Pending DeliveryNote'),
('44','1','25','raju','2016-08-26','Pending DeliveryNote'),
('45','1','25','raju','2016-08-27','Pending DeliveryNote'),
('46','1','25','raju','2016-08-29','Pending DeliveryNote'),
('47','1','25','raju','2016-08-31','Pending DeliveryNote'),
('48','1','25','raju','2016-09-01','Pending DeliveryNote'),
('49','1','25','raju','2016-09-02','Pending DeliveryNote'),
('50','1','25','raju','2016-09-03','Pending DeliveryNote'),
('51','1','63','worldmartccustomer','2016-08-29','Pending DeliveryNote'),
('52','1','63','worldmartccustomer','2016-08-30','Pending DeliveryNote'),
('53','1','63','worldmartccustomer','2016-08-31','Pending DeliveryNote'),
('54','1','25','raju','2016-09-05','Pending DeliveryNote'),
('55','1','25','raju','2016-09-07','Pending DeliveryNote'),
('56','1','25','raju','2016-09-08','Pending DeliveryNote'),
('57','1','25','raju','2016-09-09','Pending DeliveryNote'),
('58','1','25','raju','2016-09-10','Pending DeliveryNote'),
('59','1','25','raju','2016-09-12','Pending DeliveryNote'),
('60','1','25','raju','2016-09-14','Pending DeliveryNote'),
('61','1','25','raju','2016-09-15','Pending DeliveryNote'),
('62','1','25','raju','2016-09-16','Pending DeliveryNote'),
('63','1','25','raju','2016-09-17','Pending DeliveryNote'),
('64','1','63','worldmartccustomer','2016-09-05','Pending DeliveryNote'),
('65','1','63','worldmartccustomer','2016-09-06','Pending DeliveryNote'),
('66','1','63','worldmartccustomer','2016-09-07','Pending DeliveryNote'),
('67','1','63','worldmartccustomer','2016-09-12','Pending DeliveryNote'),
('68','1','63','worldmartccustomer','2016-09-13','Pending DeliveryNote'),
('69','1','63','worldmartccustomer','2016-09-14','Pending DeliveryNote'),
('70','1','25','raju','2016-09-19','Pending DeliveryNote'),
('71','1','25','raju','2016-09-21','Pending DeliveryNote'),
('72','1','25','raju','2016-09-22','Pending DeliveryNote'),
('73','1','25','raju','2016-09-23','Pending DeliveryNote'),
('74','1','25','raju','2016-09-24','Pending DeliveryNote'),
('75','1','63','worldmartccustomer','2016-09-19','Pending DeliveryNote'),
('76','1','63','worldmartccustomer','2016-09-20','Pending DeliveryNote'),
('77','1','63','worldmartccustomer','2016-09-21','Pending DeliveryNote');







#
# Delete any existing table `products`
#

DROP TABLE IF EXISTS `products`;



#
# Table structure of table `products`
#

CREATE TABLE `products` (
  `ProductsId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ProductName` text,
  `Price` decimal(10,2) DEFAULT NULL,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `Active` text,
  `ItemId` int(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`ProductsId`),
  KEY `CustomersId` (`CustomersId`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;





#
# Data contents of table `products`
#


INSERT INTO `products`(`ProductsId`,`ProductName`,`Price`,`CustomersId`,`Active`,`ItemId`) VALUES
('8','towel','2.00','40','yes','3'),
('9','mobile','2.00','40','yes','11'),
('10','fsdfssfs','2.00','40','yes','13'),
('11','fsdfssfs','2.00','31','yes','13'),
('12','towel','2.00','31','yes','3'),
('13','book','2.00','31','yes','6'),
('14','mobile','2.00','31','yes','11'),
('15','towel','2.00','31','yes','12'),
('22','towel','2.00','26','yes','3'),
('23','towel','1.50','47','yes','3'),
('32','towel','2.00','63','yes','3'),
('33','towel','2.00','63','yes','12'),
('34','book','2.00','63','yes','6'),
('35','mobile','2.00','63','yes','11'),
('36','fsdfssfs','2.00','63','yes','13'),
('37','esfs','2.00','63','yes','14'),
('38','book','2.50','92','yes','6'),
('39','mobile','2.00','92','yes','11'),
('41','Hot Towel','0.00','93','yes','15'),
('42','Hot Towel','2.00','63','yes','15'),
('43','Hot Towel','3.00','87','yes','15'),
('44','Hot Towel','3.00','91','yes','15'),
('45','Hot Towel','3.00','92','yes','15'),
('46','Hot Towel','0.00','94','yes','15'),
('47','Hot Towel','2.00','95','yes','15'),
('51','T CLOTH 54X54','0.54','25','yes','24'),
('53','T CLOTH 45X45','0.45','25','yes','23'),
('54','T CLOTH 90 ROUND','1.10','25','yes','30'),
('55','K CLOTH','0.30','25','yes','11'),
('56','NAPKIN','0.13','25','yes','3'),
('57','APRON','0.50','25','yes','4'),
('58','COAT','1.00','25','yes','6'),
('59','CHEF TROUSER','1.00','25','yes','17'),
('60','T CLOTH 70X80','0.90','25','yes','38'),
('61','HOT TOWEL','0.20','25','yes','37');







#
# Delete any existing table `purchase`
#

DROP TABLE IF EXISTS `purchase`;



#
# Table structure of table `purchase`
#

CREATE TABLE `purchase` (
  `PurchaseId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `SupplierId` int(20) unsigned DEFAULT NULL,
  `CompaniesId` int(20) unsigned DEFAULT NULL,
  `PurchaseDate` date DEFAULT NULL,
  `DueAmount` decimal(10,2) DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Note` text,
  `ShippingCost` decimal(10,2) DEFAULT NULL,
  `Status` text,
  PRIMARY KEY (`PurchaseId`),
  KEY `CompaniesId` (`CompaniesId`),
  KEY `SupplierId` (`SupplierId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;





#
# Data contents of table `purchase`
#


INSERT INTO `purchase`(`PurchaseId`,`SupplierId`,`CompaniesId`,`PurchaseDate`,`DueAmount`,`TotalAmount`,`DueDate`,`Note`,`ShippingCost`,`Status`) VALUES
('1','2','1','2016-08-16','1021.00','1021.00','2016-08-16','hello','30.00','no');







#
# Delete any existing table `purchasedetails`
#

DROP TABLE IF EXISTS `purchasedetails`;



#
# Table structure of table `purchasedetails`
#

CREATE TABLE `purchasedetails` (
  `PurchaseDetailsId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `PurchaseId` int(20) unsigned DEFAULT NULL,
  `ItemId` int(20) unsigned DEFAULT NULL,
  `SupplierId` int(20) unsigned DEFAULT NULL,
  `TaxRate` decimal(10,2) unsigned DEFAULT NULL,
  `Qty` int(20) DEFAULT NULL,
  `PurchasePrice` decimal(10,2) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PurchaseDate` date DEFAULT NULL,
  `EstimateDeliveryDate` date DEFAULT NULL,
  `Delivered` text,
  `ActualDeliveryDate` date DEFAULT NULL,
  `PurchaseDetailNote` longtext,
  `Discount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`PurchaseDetailsId`),
  KEY `PurchaseId` (`PurchaseId`),
  KEY `SupplierId` (`SupplierId`),
  KEY `ItemId` (`ItemId`),
  KEY `TaxId` (`TaxRate`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;





#
# Data contents of table `purchasedetails`
#


INSERT INTO `purchasedetails`(`PurchaseDetailsId`,`PurchaseId`,`ItemId`,`SupplierId`,`TaxRate`,`Qty`,`PurchasePrice`,`Amount`,`PurchaseDate`,`EstimateDeliveryDate`,`Delivered`,`ActualDeliveryDate`,`PurchaseDetailNote`,`Discount`) VALUES
('179','1','3','1','24.00','10','9.00','90.00','2016-08-16','2016-08-16','yes','2016-09-26','hello','0.00'),
('180','1','3','1','24.00','10','9.00','90.00','2016-08-16','2016-08-16','yes','2016-08-20','hello','0.00'),
('181','1','3','1','24.00','11','13.00','134.00','2016-08-16','2016-08-16','yes','2016-08-18','hello','9.00'),
('182','1','3','1','24.00','0','0.00','0.00','2016-08-16','2016-08-16','yes','2016-08-18','hello','0.00'),
('183','1','3','1','24.00','11','13.00','143.00','2016-08-16','2016-08-16','yes','2016-08-18','hello','0.00'),
('184','1','3','1','24.00','11','13.00','143.00','2016-08-16','2016-08-16','yes','2016-08-18','hello','0.00'),
('185','1','3','1','24.00','11','13.00','143.00','2016-08-16','2016-08-16','yes','2016-08-19','hello','0.00'),
('186','1','3','2','24.00','8','10.00','80.00','2016-08-16','2016-08-16','yes','2016-08-19','hello','0.00');







#
# Delete any existing table `supplier`
#

DROP TABLE IF EXISTS `supplier`;



#
# Table structure of table `supplier`
#

CREATE TABLE `supplier` (
  `SupplierId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CompanyId` int(20) unsigned DEFAULT NULL,
  `SupplierName` text,
  `Address` text,
  `City` text,
  `Country` text,
  `PostCode` text,
  `ContactPerson` text,
  `PhoneNo` text,
  `FaxNumber` text,
  `Email` text,
  `Notes` text,
  `Active` text,
  `Creditlimit` decimal(10,2) DEFAULT NULL,
  `DueSettlement` decimal(10,2) DEFAULT NULL,
  `TaxId` int(20) unsigned DEFAULT NULL,
  `NominalId` int(20) DEFAULT NULL,
  `VatNo` text,
  PRIMARY KEY (`SupplierId`),
  KEY `TaxId` (`TaxId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;





#
# Data contents of table `supplier`
#


INSERT INTO `supplier`(`SupplierId`,`CompanyId`,`SupplierName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxId`,`NominalId`,`VatNo`) VALUES
('1','1','garmenS','kachukhet','dhaka','bd','1902','kalam','0184575955','nkoun','kalam@gmail.com','hamum','yes','2000.00',NULL,'1','2','132'),
('2','1','RFL','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500.00',NULL,'2','1',''),
('5','1','Plastic BD','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500.00',NULL,'2','1','');







#
# Delete any existing table `tax`
#

DROP TABLE IF EXISTS `tax`;



#
# Table structure of table `tax`
#

CREATE TABLE `tax` (
  `TaxId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `TaxCode` text,
  `Rate` decimal(10,2) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`TaxId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;





#
# Data contents of table `tax`
#


INSERT INTO `tax`(`TaxId`,`TaxCode`,`Rate`,`Description`) VALUES
('1','A','12.00','annual Tax'),
('2','B','24.00','monthly tax'),
('3','C','43.00','weetly tax'),
('4','Dd','21.00','two year5');







#
# Delete any existing table `user`
#

DROP TABLE IF EXISTS `user`;



#
# Table structure of table `user`
#

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `Active` tinyint(4) NOT NULL,
  `Role` text NOT NULL,
  `Date` text NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;





#
# Data contents of table `user`
#


INSERT INTO `user`(`UserId`,`UserName`,`Password`,`Active`,`Role`,`Date`) VALUES
('1','raju','raj','0','admin',''),
('2','s','s','0','employee','');







#
# Delete any existing table `users`
#

DROP TABLE IF EXISTS `users`;



#
# Table structure of table `users`
#

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





#
# Data contents of table `users`
#


INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`role`) VALUES
('4','r','r@r.r','$2y$10$3bA5/CJVhNVv7ur/S.P4Cesvr88HZKKg2ZkAbagAgrB9vFbjkzUtK','g821BltuomTHMbpZBmnRdLsPshvIWblyFSCl8gdQGmwkwgSm6BJVFPJhKfCP','2016-08-06 17:10:05','2016-10-12 16:20:57','admin'),
('5','s','s@s.s','123456',NULL,'2016-08-09 16:58:00',NULL,'employee'),
('7','a','a@a.a','$2y$10$rLHlcZQNU0l2FTsb74J/yuQx/Loht0FpSk1Z2V9CCeaE3jFKthsYS',NULL,'2016-08-09 10:45:50','2016-08-09 10:45:50',''),
('9','b','b@b.b','$2y$10$xJnnBbglnf.vq5A85XkpVe9TTyXMeqXbkXerggsy6oEq96vmzLOne',NULL,'2016-08-09 10:47:50','2016-08-09 10:47:50',''),
('11','c','c@c.c','$2y$10$AK0sBWMPyO3oGc4w.IhqU.Vhnz75YVZ.PpUE7DnqEibArP2LZ6ejK',NULL,'2016-08-09 10:50:18','2016-08-09 10:50:18',''),
('12','d','d@d.d','$2y$10$AUDb4onq8t0/9Xsb5CPKKOG55KocGZ4MI24OIJ0LN5sDoj4fd6Reu',NULL,'2016-08-09 10:51:50','2016-08-09 10:51:50',''),
('13','e','e@e.e','$2y$10$XAQHITHuhDOT6KiO.nE3COjojdAbwqH0Hc233VWzVvY0qUmL1wjcW',NULL,'2016-08-09 10:53:28','2016-08-09 10:53:28',''),
('14','f','f@f.f','$2y$10$bIZhrjHFw8EjuZkmPiXFw.LH8kZd12fTZN6DyvCZlceHjW3AsomYS',NULL,NULL,NULL,'employee'),
('15','g','g@g.g','$2y$10$Wm2LzrZfXdYd12p99htZmeLrS.HJsxHHT5om/o32qFThjN67XYH.m',NULL,'2016-08-09 11:08:23','2016-08-09 11:08:23',''),
('17','h','h@h.h','$2y$10$bV2ICis120a1niCMggnpDeb2FfPGVaw41tI2kjfgZbaJNdAus9R.a',NULL,'2016-08-09 17:19:54','2016-08-09 17:19:54','employee'),
('21','i','i@i.i','$2y$10$.ezHJYaE7kkFlO9I4uDk8O8YlM7vRtr3MU4C36kN.FylLffoayb2O',NULL,'2016-08-09 17:33:42','2016-08-09 17:33:42','admin'),
('22','raju','aa@dd.gf','$2y$10$4qZKhqI8lE3/kVlGhGR5EOLn/WE.hUCM2AODlXBJJd7LBXiZoRTwm',NULL,'2016-08-09 17:48:56','2016-08-09 17:48:56','employee'),
('24','raju','rrr@dfsd.fg','$2y$10$It3uFx3kIogBIenhBQrFEuFDuFYJPJ2qQyAy60quC8ww5ivcwUODq',NULL,'2016-08-09 17:52:27','2016-08-09 17:52:27','admin');







#
# Delete any existing table `weekdaychange`
#

DROP TABLE IF EXISTS `weekdaychange`;



#
# Table structure of table `weekdaychange`
#

CREATE TABLE `weekdaychange` (
  `WeekDayChangeId` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `WeekDateUpdateString` text,
  `WeekDateUpdateDate` date DEFAULT NULL,
  PRIMARY KEY (`WeekDayChangeId`),
  KEY `CustomersId` (`CustomersId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;





#
# Data contents of table `weekdaychange`
#


INSERT INTO `weekdaychange`(`WeekDayChangeId`,`CustomersId`,`WeekDateUpdateString`,`WeekDateUpdateDate`) VALUES
('5','92','1_','2016-09-24'),
('6','92','1_2_','2016-09-25'),
('7','92','1_2_3_','2016-09-30'),
('10','93','2_3_4_','2016-10-12'),
('11','25','3_5_','2016-01-01'),
('12','40','2_3_4_6_','2016-10-12'),
('13','47','3_5_','2016-10-12'),
('14','63','1_2_3_5_7_','2016-10-12'),
('15','61','1_3_5_7_','2016-10-12'),
('16','87','2_4_6_','2016-10-12'),
('17','91','2_4_6_','2016-10-12'),
('18','90','1_2_3_','2016-10-12'),
('20','94','1_3_4_6_','2016-08-13'),
('21','25','1_3_4_','2016-10-13'),
('23','94','1_3_6_','2016-10-14'),
('24','25','1_3_','2016-10-16'),
('25','63','1_','2016-10-16'),
('26','26','1_','2016-10-16'),
('27','87','1_','2016-10-16'),
('28','47','1_','2016-10-16'),
('29','95','5_7_','2016-10-16');












ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`CompaniesId`) REFERENCES `companies` (`CompaniesId`);




ALTER TABLE `banktransfer`
  ADD CONSTRAINT `banktransfer_ibfk_1` FOREIGN KEY (`BankIdTo`) REFERENCES `bank` (`BankId`),  ADD CONSTRAINT `banktransfer_ibfk_2` FOREIGN KEY (`BankIdFrom`) REFERENCES `bank` (`BankId`);






ALTER TABLE `employeestransition`
  ADD CONSTRAINT `employeestransition_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmployeeId`);


ALTER TABLE `employeestransitiondetails`
  ADD CONSTRAINT `employeestransitiondetails_ibfk_1` FOREIGN KEY (`EmployeesTransitionId`) REFERENCES `employeestransition` (`EmployeesTransitionId`),  ADD CONSTRAINT `employeestransitiondetails_ibfk_2` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmployeeId`);


ALTER TABLE `expensedetails`
  ADD CONSTRAINT `expensedetails_ibfk_1` FOREIGN KEY (`BankId`) REFERENCES `bank` (`BankId`),  ADD CONSTRAINT `expensedetails_ibfk_2` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmployeeId`);




ALTER TABLE `invoicedetails`
  ADD CONSTRAINT `invoicedetails_ibfk_1` FOREIGN KEY (`InvoicesId`) REFERENCES `invoices` (`InvoicesId`),  ADD CONSTRAINT `invoicedetails_ibfk_2` FOREIGN KEY (`ItemId`) REFERENCES `item` (`ItemId`);


ALTER TABLE `invoicemaster`
  ADD CONSTRAINT `invoicemaster_ibfk_1` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`);


ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`),  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`CompaniesId`) REFERENCES `companies` (`CompaniesId`);


ALTER TABLE `invoicetransaction`
  ADD CONSTRAINT `invoicetransaction_ibfk_1` FOREIGN KEY (`InvoiceMasterId`) REFERENCES `invoicemaster` (`InvoiceMasterId`);


ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`ItemCategoryId`) REFERENCES `itemcategory` (`ItemCategoryId`),  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`ItemUnitId`) REFERENCES `itemunit` (`ItemUnitId`);


ALTER TABLE `itembuy`
  ADD CONSTRAINT `itembuy_ibfk_1` FOREIGN KEY (`ItemCategoryId`) REFERENCES `itemcategory` (`ItemCategoryId`),  ADD CONSTRAINT `itembuy_ibfk_2` FOREIGN KEY (`SupplierId`) REFERENCES `supplier` (`SupplierId`);






ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`),  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`CompaniesId`) REFERENCES `companies` (`CompaniesId`);








ALTER TABLE `pendingwork`
  ADD CONSTRAINT `pendingwork_ibfk_1` FOREIGN KEY (`CompaniesId`) REFERENCES `companies` (`CompaniesId`),  ADD CONSTRAINT `pendingwork_ibfk_2` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`);


ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`),  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`ItemId`) REFERENCES `item` (`ItemId`);


ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`CompaniesId`) REFERENCES `companies` (`CompaniesId`),  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`SupplierId`) REFERENCES `supplier` (`SupplierId`);


ALTER TABLE `purchasedetails`
  ADD CONSTRAINT `purchasedetails_ibfk_1` FOREIGN KEY (`PurchaseId`) REFERENCES `purchase` (`PurchaseId`),  ADD CONSTRAINT `purchasedetails_ibfk_2` FOREIGN KEY (`SupplierId`) REFERENCES `supplier` (`SupplierId`),  ADD CONSTRAINT `purchasedetails_ibfk_3` FOREIGN KEY (`ItemId`) REFERENCES `item` (`ItemId`);


ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`TaxId`) REFERENCES `tax` (`TaxId`);








ALTER TABLE `weekdaychange`
  ADD CONSTRAINT `weekdaychange_ibfk_1` FOREIGN KEY (`CustomersId`) REFERENCES `customers` (`CustomersId`);
;