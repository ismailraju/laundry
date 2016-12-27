#Laundry Management MySQL database backup

# Generated: Monday 10. October 2016 19:02 UTC  Laundry Management
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
  `Creditlimit` int(20) DEFAULT NULL,
  `DueSettlement` int(20) DEFAULT NULL,
  `TaxCode` int(20) DEFAULT NULL,
  `NominalCode` int(20) DEFAULT NULL,
  `VatNo` text,
  `ItemizingFixedBilling` text,
  `Invoicetype` text,
  `AmountFix` int(20) DEFAULT NULL,
  `HotTowelFree` text,
  `Weekday` text,
  `IsStanding` text,
  `StandingDay` int(20) DEFAULT NULL,
  `StandingAmount` int(20) DEFAULT NULL,
  `StandingType` text,
  `RegistrationDate` date NOT NULL,
  PRIMARY KEY (`CustomersId`),
  KEY `CompaniesId` (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;





#
# Data contents of table `customers`
#


INSERT INTO `customers`(`CustomersId`,`CustomerNumber`,`CompaniesId`,`CustomerName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`DriverNo`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxCode`,`NominalCode`,`VatNo`,`ItemizingFixedBilling`,`Invoicetype`,`AmountFix`,`HotTowelFree`,`Weekday`,`IsStanding`,`StandingDay`,`StandingAmount`,`StandingType`,`RegistrationDate`) VALUES
('25','10','1','raju','dhaka','dahak',,'1206','ABUL','0134575995',,'RAJU@RAJU.COM','01674266054','VERY GOOD','yes','14',,'2','2',,'FixedBill','yearly','2200','yes','1_3_4_5_',,,,,'2016-01-01'),
('26',,'1','raju','sdg','dfs',,'dfsd','fds','01674382555',,'dfgs','dsaf',,'yes','2',,,'0',,'Itemizing','yearly',,'yes','2_3_',,,,,'2016-01-01'),
('27',,'1','raju','sdg','dfs',,'dfsd','fds','01674382555',,'dfgs','dsaf','dsfgsd','yes','2',,,'0',,'FixedBill','yearly',,'yes','2_3_5_6_',,,,,'2016-01-01'),
('28',,'1','raju','sdg','dfs',,'dfsd','fds','01674382555',,'dfgs','dsaf','dsfgsd','yes','2',,,'0',,'Itemizing','yearly',,'yes','2_3_5_6_',,,,,'2016-01-01'),
('29',,'1','raju','sdg','dfs',,'dfsd','fds','01674382555',,'dfgs','dsaf','dsfgsd','yes','2',,,'0',,'Itemizing','yearly',,'yes','2_3_5_6_',,,,,'2016-01-01'),
('30',,'1','raju','sdg','dfs',,'dfsd','fds','01674382555',,'dfgs','dsaf','dsfgsd','yes','2',,,'0',,'Itemizing','yearly',,'yes','2_3_5_6_',,,,,'2016-01-01'),
('31',,'1','sdas',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,,,,,'2016-01-01'),
('32',,'1','sdas',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,,,,,'2016-01-01'),
('34',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','0',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('35',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','0',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('36',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('39',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('40',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('41',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('42',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('43',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('44',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('45',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('46',,'1','sdas','re','rggre',,'g','er','greg',,'res','gser','regdg','yes','226',,,'0',,'FixedBill','yearly',,'yes','2_3_4_',,,,,'2016-01-01'),
('47',,'1','vdvdv','dsvs','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('48',,'1','vdvdv','dsvs','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('49',,'1','vdvdv','dsvs','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('50',,'1','fdfddfdssfd',,,,,,,,,,,,,,,,,,,,,,'on','1','22','sgfsad','2016-01-01'),
('51','5','1','vdvdv','dsvs','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,'2','2',,'FixedBill','yearly','5000','yes','1_2_3_',,,,,'2016-06-01'),
('52',,'1','vdvdvfgfg','dsvsgffg','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('53',,'1','vdvdv','dsvs','ddv',,'dsv','sd','s',,'vds','vdsvsd',,'yes','5354',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('54',,'1','gfg',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,,,,,'2016-01-01'),
('55',,'1','gfg',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,,,,,'2016-01-01'),
('56',,'1','gfg',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,'on','1',,,'2016-01-01'),
('57',,'1','gfg',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly',,'yes',,'on','54','454','monthly','2016-01-01'),
('58',,'1','gfg','dsgsdf','gds',,'fgdf','fd','fdg',,'g','fd','hffdhfg','yes','78858',,,'0',,'FixedBill','yearly','5278','yes','2_3_4_','on','54','454','monthly','2016-01-01'),
('59',,'1','dsfd',,,,,,,,,,,'yes','0',,,'0',,'FixedBill','yearly','5277','yes',,'on','52','257','weekly','2016-01-01'),
('61',,'1','gfg','dsgsdf','gds',,'fgdf','fd','fdg',,'g','fd','hffdhfg','yes','78858',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('62',,'1','gfg','dsgsdf','gds',,'fgdf','fd','fdg',,'g','fd','hffdhfg','yes','78858',,,'0',,'Itemizing','yearly',,'yes',,,,,,'2016-01-01'),
('63',,'1','worldmartccustomer','dhaka','dk',,'1206','mofij','01675956554',,'ewfer22@RDGD.GRE','01845484818','erhgreh','yes','2000',,,'727',,'Itemizing','monthly',,,'1_2_3_',,,,,'2016-01-01'),
('86',,'1','fdfd','fd','aadsa',,'1902','sdsds','dsdsd',,'sds@dsfs.hgk','ghgfhgfhh',,'yes','6',,,'1',,'FixedBill','monthly','1200','yes',' 2_3_','on','1','2000','fortnight','2016-01-01'),
('87',,'1','walton','tangail','Dhaka',,'1902','mofij','01684575990',,'sds@dsfs.hgk','017548965525','Details','yes','1000',,'2','2',,'FixedBill','monthly','1200','no',' 2_','on','1','2000','fortnight','2016-01-01'),
('89','333333','1','fuji color','dkaka','dhaka',,'1206','selim','187596425385',,'dsgd@dsfsd.dg','017558692453','wwwwwwwwwwwwwww','yes','123456789',,'2','1',,'FixedBill','yearly','4444444','no',' 1_2_3_4_5_6_7_','on','25','22222','monthly','2016-01-01'),
('90','66666666','1','fuji color','dkaka','dhaka',,'1206','selim','187596425385',,'dsgd@dsfsd.dg','017558692453','wwwwwwwwwwwwwww','yes','123456789',,'2','1',,'Itemizing','yearly',,'no',' 1_2_3_','on','25','22222','monthly','2016-01-01'),
('91',,'1','Fuad','canada','canada',,'1206','canadacanada','canada',,'canada@gmail.com','016438295','customr','yes','28',,'1','1',,'FixedBill','monthly','2000','yes',' 2_',,,,,'2016-01-01'),
('92','20','1','ASIF','ASIF address','ASIF city',,'12060','ASIF PS','0167435859',,'ASIF@ASIF.ASIF','0155555555555','very good boy','yes','57',,'2','2',,'FixedBill','monthly','40000','yes','1_2_3_',,,,,'2016-09-24');







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
('1','worldmart',,,,,,,);







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
  `PricePerUnit` int(20) DEFAULT NULL,
  `PaymentTerms` text,
  `Discount` int(20) DEFAULT NULL,
  `Datetime` date DEFAULT NULL,
  `Flag` text,
  PRIMARY KEY (`InvoiceDetailsId`),
  KEY `InvoicesId` (`InvoicesId`),
  KEY `ItemId` (`ItemId`),
  KEY `ProductsId` (`ProductsId`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoicedetails`
#


INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('13','9','3','16',,'3','5','1','16',,,,'yes'),
('14','9','11','18',,'3','5',,'16',,,,),
('15','9','13','20',,'35','0',,'70',,,,),
('16','10','3','16',,'3','5',,'16',,,,'yes'),
('17','10','11','18',,'3','5',,'16',,,,),
('18','10','13','20',,'35','0',,'70',,,,),
('19','10','14','21',,'0','3',,'5',,,,),
('20','11','3','16',,'3','3',,'12',,,,'no'),
('21','11','6','17',,'2','0',,'8',,,,'no'),
('22','11','11','18',,'3','3',,'12',,,,),
('23','11','13','20',,'3','1',,'8',,,,),
('24','11','14','21',,'2','0',,'3',,,,),
('25','12','3','32',,'3','5',,'16',,,,),
('26','12','12','33',,'4','5',,'18',,,,),
('27','12','6','34',,'3','0',,'6',,,,'yes'),
('28','12','11','35',,'4','4',,'16',,,,),
('29','12','13','36',,'6','0',,'12',,,,),
('30','12','14','37',,'45','0',,'90',,,,),
('31','13','3','16',,'40','10','40','100',,,,'no'),
('32','14','3','16',,'1','0','1','2',,,,'no'),
('33','14','6','17',,'0','1','0','2',,,,'no'),
('34','14','11','18',,'1','1','0','4',,,,'no'),
('35','14','14','21',,'1','0','0','2',,,,'no'),
('36','15','3','32',,'1','0','1','2',,,,'no'),
('37','15','12','33',,'2','0','0','4',,,,'no'),
('38','15','11','35',,'3','0','1','6',,,,'no'),
('39','15','13','36',,'4','4','0','16',,,,'no'),
('40','15','14','37',,'0','4','0','8',,,,'no'),
('42','17','3','16',,'31','1','2','64',,,,'no'),
('43','17','11','18',,'20','0','0','40',,,,'no'),
('44','17','13','20',,'4','0','0','8',,,,'no'),
('66','16','3','16',,'5','0','0','10',,,,'no'),
('67','16','11','18',,'4','0','0','8',,,,'no'),
('68','16','13','20',,'5','1','0','12',,,,'no'),
('69','16','14','21',,'6','0','0','9',,,,'no'),
('70','18','3','16',,'20','0','0','40',,,,'no'),
('71','18','11','18',,'0','1','1','2',,,,'no'),
('72','18','13','20',,'0','2','0','4',,,,'no'),
('73','18','14','21',,'21','4','0','38',,,,'no'),
('74','19','3','16',,'1','1','1','4',,,,'no'),
('75','20','3','16',,'12','1','0','26',,,,'no'),
('76','20','11','18',,'22','0','0','44',,,,'no'),
('77','22','3','16',,'14','0','0','28',,,,'no'),
('78','22','11','18',,'0','12','0','24',,,,'no'),
('79','23','3','16',,'1','1','1','4',,,,'no'),
('80','24','3','16',,'1','0','0','2',,,,'no'),
('81','24','11','18',,'0','1','0','2',,,,'no'),
('82','25','3','16',,'1','1','1','4',,,,'no'),
('83','25','13','20',,'1','1','1','4',,,,'no'),
('84','26','3','16',,'1','1','1','4',,,,'no'),
('85','27','3','16',,'1','0','0','2',,,,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('86','27','11','18',,'0','1','0','2',,,,'no'),
('87','28','3','16',,'1','0','0','2',,,,'no'),
('88','28','11','18',,'0','1','0','2',,,,'no'),
('89','40','3','16',,'0','0','1','0',,,,'no'),
('90','40','6','17',,'0','0','1','0',,,,'no'),
('91','40','11','18',,'0','0','1','0',,,,'no'),
('92','40','13','20',,'0','0','1','0',,,,'no'),
('93','40','14','21',,'0','0','1','0',,,,'no'),
('94','41','3','16',,'100','1','1','202',,,,'no'),
('95','41','6','17',,'1','1','1','4',,,,'no'),
('96','41','11','18',,'1','1','1','4',,,,'no'),
('97','41','13','20',,'1','1','1','4',,,,'no'),
('98','41','14','21',,'1','1','1','3',,,,'no'),
('99','42','3','16',,'14','10','0','48',,,,'no'),
('100','42','6','17',,'16','18','1','68',,,,'no'),
('101','42','11','18',,'0','18','1','36',,,,'no'),
('102','42','13','20',,'15','13','1','56',,,,'no'),
('103','42','14','21',,'23','17','1','60',,,,'no'),
('104','43','3','16',,'1','0','0','2',,,,'no'),
('105','43','11','18',,'0','1','0','2',,,,'no'),
('106','43','13','20',,'0','0','1','0',,,,'no'),
('107','44','3','16',,'1','1','1','4',,,,'no'),
('108','44','6','17',,'1','1','1','4',,,,'no'),
('109','44','11','18',,'1','1','1','4',,,,'no'),
('110','44','13','20',,'1','1','1','4',,,,'no'),
('111','44','14','21',,'1','1','1','3',,,,'no'),
('112','45','3','16',,'1','1','0','4',,,,'no'),
('113','45','6','17',,'1','1','0','4',,,,'no'),
('114','45','11','18',,'1','1','0','4',,,,'no'),
('115','45','13','20',,'1','1','0','4',,,,'no'),
('116','45','14','21',,'1','1','0','3',,,,'no'),
('117','46','3','16',,'1','1','0','4',,,,'no'),
('118','46','6','17',,'1','1','0','4',,,,'no'),
('119','46','11','18',,'1','1','0','4',,,,'no'),
('120','46','13','20',,'1','1','0','4',,,,'no'),
('121','46','14','21',,'1','1','0','3',,,,'no'),
('122','47','3','16',,'1','1','1','4',,,,'no'),
('123','47','6','17',,'1','1','1','4',,,,'no'),
('124','47','11','18',,'1','1','1','4',,,,'no'),
('125','47','13','20',,'1','1','1','4',,,,'no'),
('126','47','14','21',,'1','1','1','3',,,,'no'),
('127','48','3','16',,'0','9','0','18',,,,'no'),
('128','53','3','16',,'1','1','1','4',,,,'no'),
('129','53','6','17',,'1','1','1','4',,,,'no'),
('130','53','11','18',,'1','1','1','4',,,,'no'),
('131','53','13','20',,'1','1','1','4',,,,'no'),
('132','53','14','21',,'1','1','1','3',,,,'no'),
('133','54','3','16',,'1','1','1','4',,,,'no'),
('134','54','6','17',,'1','1','1','4',,,,'no'),
('135','54','11','18',,'1','1','1','4',,,,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('136','54','13','20',,'1','1','1','4',,,,'no'),
('137','54','14','21',,'1','1','1','3',,,,'no'),
('138','55','3','16',,'1','1','1','4',,,,'no'),
('139','55','6','17',,'1','1','1','4',,,,'no'),
('140','55','11','18',,'1','1','1','4',,,,'no'),
('141','55','13','20',,'1','1','1','4',,,,'no'),
('142','55','14','21',,'1','1','1','3',,,,'no'),
('143','56','3','16',,'1','1','1','4',,,,'no'),
('144','56','6','17',,'1','1','1','4',,,,'no'),
('145','56','11','18',,'1','1','1','4',,,,'no'),
('146','56','13','20',,'1','1','1','4',,,,'no'),
('147','56','14','21',,'1','1','1','3',,,,'no'),
('148','57','3','16',,'1','1','1','4',,,,'no'),
('149','57','6','17',,'1','1','1','4',,,,'no'),
('150','57','11','18',,'1','1','1','4',,,,'no'),
('151','57','13','20',,'1','1','1','4',,,,'no'),
('152','57','14','21',,'1','1','1','3',,,,'no'),
('153','58','3','16',,'2','2','2','8',,,,'no'),
('154','58','6','17',,'2','2','2','8',,,,'no'),
('155','58','11','18',,'2','2','2','8',,,,'no'),
('156','58','13','20',,'2','2','2','8',,,,'no'),
('157','58','14','21',,'2','2','2','6',,,,'no'),
('158','59','3','16',,'4','4','4','16',,,,'no'),
('159','59','6','17',,'4','4','4','16',,,,'no'),
('160','59','11','18',,'4','4','4','16',,,,'no'),
('161','59','13','20',,'4','4','4','16',,,,'no'),
('162','59','14','21',,'4','4','4','12',,,,'no'),
('163','60','3','32',,'1','1','1','4',,,,'no'),
('164','60','12','33',,'1','1','1','4',,,,'no'),
('165','60','6','34',,'1','1','1','4',,,,'no'),
('166','60','11','35',,'1','1','1','4',,,,'no'),
('167','60','13','36',,'1','1','1','4',,,,'no'),
('168','60','14','37',,'1','1','1','4',,,,'no'),
('169','61','6','38',,'1','1','1','5',,,,'no'),
('170','61','11','39',,'1','1','1','4',,,,'no'),
('171','62','6','38',,'2','2','2','10',,,,'no'),
('172','62','11','39',,'2','2','2','8',,,,'no'),
('173','63','3','16',,'5','5','5','20',,,,'no'),
('174','63','6','17',,'5','5','5','20',,,,'no'),
('175','63','11','18',,'5','5','5','20',,,,'no'),
('176','63','13','20',,'5','5','5','20',,,,'no'),
('177','63','14','21',,'5','5','5','15',,,,'no'),
('178','64','3','16',,'22','1','1','46',,,,'no'),
('179','64','6','17',,'330','10','1','680',,,,'no'),
('180','64','11','18',,'22','1','1','46',,,,'no'),
('181','64','13','20',,'22','1','1','46',,,,'no'),
('182','64','14','21',,'22','1','1','35',,,,'no'),
('193','65','3','16',,'78678','1','4547','157358',,,,'no'),
('194','65','6','17',,'678','0','0','1356',,,,'no'),
('195','65','11','18',,'86','6','254','184',,,,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('196','65','13','20',,'515','786','0','2602',,,,'no'),
('197','65','14','21',,'999','528','26','1499292',,,,'no');







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
  `TotalAmount` int(20) DEFAULT NULL,
  `DueAmount` int(20) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  PRIMARY KEY (`InvoicesId`),
  KEY `CustomersId` (`CustomersId`),
  KEY `CompaniesId` (`CompaniesId`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoices`
#


INSERT INTO `invoices`(`InvoicesId`,`CustomersId`,`CompaniesId`,`InvoiceDate`,`Notes`,`Status`,`TotalAmount`,`DueAmount`,`DueDate`) VALUES
('9','25','1','2016-08-28',,'yes','200','200',),
('10','25','1','2016-08-28',,'yes','200','200',),
('11','25','1','2016-08-28',,'yes','200','200',),
('12','63','1','2016-08-28',,'yes','200','200',),
('13','25','1','2016-08-28',,'yes','200','200',),
('14','25','1','2016-08-28',,'yes','200','200',),
('15','63','1','2016-08-28',,'yes','200','200',),
('16','25','1','2016-08-29',,'yes','39','39',),
('17','25','1','2016-08-28',,'yes','200','200',),
('18','25','1','2016-08-28',,'yes','84','84',),
('19','25','1','2016-08-28',,'yes','4','4',),
('20','25','1','2016-09-17',,'yes','70','70',),
('21','25','1','2016-09-23',,'yes','0','0',),
('22','25','1','2016-09-23',,'yes','52','52',),
('23','25','1','2016-09-23',,'yes','4','4',),
('24','25','1','2016-09-23',,'yes','4','4',),
('25','25','1','2016-09-23',,'yes','8','8',),
('26','25','1','2016-09-23',,'yes','4','4',),
('27','25','1','2016-09-23',,'yes','4','4',),
('28','25','1','2016-09-23',,'yes','4','4',),
('29','25','1','2016-09-23',,'yes','0','0',),
('30','25','1','2016-09-23',,'yes','0','0',),
('31','25','1','2016-09-23',,'yes','0','0',),
('32','25','1','2016-09-23',,'yes','0','0',),
('33','25','1','2016-09-23',,'yes','0','0',),
('34','25','1','2016-09-23',,'yes','2','2',),
('35','25','1','2016-09-23',,'yes','0','0',),
('36','25','1','2016-09-23',,'yes','2','2',),
('37','25','1','2016-09-23',,'yes','4','4',),
('38','25','1','2016-09-23',,'yes','4','4',),
('39','25','1','2016-09-23',,'yes','4','4',),
('40','25','1','2016-09-23',,'yes','0','0',),
('41','25','1','2016-09-23',,'yes','217','217',),
('42','25','1','2016-09-23',,'yes','268','268',),
('43','25','1','2016-09-23',,'yes','4','4',),
('44','25','1','2016-09-23',,'yes','19','19',),
('45','25','1','2016-09-23',,'yes','19','19',),
('46','25','1','2016-09-23',,'yes','19','19',),
('47','25','1','2016-09-23',,'yes','19','19',),
('48','25','1','2016-09-23',,'yes','18','18',),
('49','25','1','2016-09-23',,'yes','2','2',),
('50','25','1','2016-09-23',,'yes','2','2',),
('51','25','1','2016-09-23',,'yes','4','4',),
('52','25','1','2016-09-23',,'yes','4','4',),
('53','25','1','2016-09-23',,'yes','19','19',),
('54','25','1','2016-09-23',,'yes','19','19',),
('55','25','1','2016-09-23',,'yes','19','19',),
('56','25','1','2016-09-24',,'yes','19','19',),
('57','25','1','2016-09-25',,'yes','19','19',),
('58','25','1','2016-09-23',,'yes','38','38',),
('59','25','1','2016-09-24',,'yes','76','76',);
INSERT INTO `invoices`(`InvoicesId`,`CustomersId`,`CompaniesId`,`InvoiceDate`,`Notes`,`Status`,`TotalAmount`,`DueAmount`,`DueDate`) VALUES
('60','63','1','2016-09-21',,'yes','24','24',),
('61','92','1','2016-09-02',,'yes','9','9',),
('62','92','1','2016-10-02',,'yes','18','18',),
('63','25','1','2016-10-03',,'yes','95','95',),
('64','25','1','2016-10-08',,'yes','853','853',),
('65','25','1','2016-10-08',,'yes','1660792','1660792',);







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
  `AveragePrice` int(20) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;





#
# Data contents of table `item`
#


INSERT INTO `item`(`ItemId`,`ItemName`,`AveragePrice`,`ItemCategoryId`,`ItemUnitId`,`InitialQty`,`ItemType`,`ItemNote`,`Active`,`ItemColor`,`MinStock`,`MaxStock`) VALUES
('3','towel','2','1','1','255','stock','valo','yes','red','2','3'),
('4','scatewqdas','20','4','1','0','stock','sportssssssssssss','no',,'0','0'),
('6','book','50','3','2','10','non-stock','b0000okkkkkkkkkkkkkkk','yes',,'10','10'),
('11','mobile','200000','2','1','20','stock','xaomi','yes',,'0','12'),
('12','towel','2','1','1','255','stock','valo','yes',,'2','3'),
('13','fsdfssfs','12','1','1','0','stock','ghj','yes',,'0','0'),
('14','esfs','0','1','1','0','stock','dsfsf','yes',,'0','0');







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
  `Price` int(20) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;





#
# Data contents of table `itemunit`
#


INSERT INTO `itemunit`(`ItemUnitId`,`ItemUnit`) VALUES
('1','kg'),
('2','eacH'),
('3','letter'),
('4','Piece'),
('7','dss');







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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;





#
# Data contents of table `messages`
#


INSERT INTO `messages`(`MessagesId`,`MessageDate`,`Message`,`CustomersId`,`CompaniesId`) VALUES
('9','2016-08-30','hello','25','1'),
('10','2016-08-29','gi','25','1');







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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;





#
# Data contents of table `nominal`
#


INSERT INTO `nominal`(`NominalId`,`NominalCode`,`CodeDescription`) VALUES
('1','5556','car'),
('2','5461','fuel');







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
  `Price` float DEFAULT NULL,
  `CustomersId` int(20) unsigned DEFAULT NULL,
  `Active` text,
  `ItemId` int(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`ProductsId`),
  KEY `CustomersId` (`CustomersId`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;





#
# Data contents of table `products`
#


INSERT INTO `products`(`ProductsId`,`ProductName`,`Price`,`CustomersId`,`Active`,`ItemId`) VALUES
('8','towel','2','40','yes','3'),
('9','mobile','2','40','yes','11'),
('10','fsdfssfs','2','40','yes','13'),
('11','fsdfssfs','2','31','yes','13'),
('12','towel','2','31','yes','3'),
('13','book','2','31','yes','6'),
('14','mobile','2','31','yes','11'),
('15','towel','2','31','yes','12'),
('16','towel','2','25','yes','3'),
('17','book','2','25','yes','6'),
('18','mobile','2','25','yes','11'),
('20','fsdfssfs','2','25','yes','13'),
('21','esfs','1.5','25','yes','14'),
('22','towel','2','26','yes','3'),
('23','towel','1.5','47','yes','3'),
('32','towel-red','2','63','yes','3'),
('33','towel','2','63','yes','12'),
('34','book','2','63','yes','6'),
('35','mobile','2','63','yes','11'),
('36','fsdfssfs','2','63','yes','13'),
('37','esfs','2','63','yes','14'),
('38','book','2.5','92','yes','6'),
('39','mobile','2','92','yes','11');







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
  `DueAmount` int(20) DEFAULT NULL,
  `TotalAmount` int(20) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Note` text,
  `ShippingCost` int(20) DEFAULT NULL,
  `Status` text,
  PRIMARY KEY (`PurchaseId`),
  KEY `CompaniesId` (`CompaniesId`),
  KEY `SupplierId` (`SupplierId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;





#
# Data contents of table `purchase`
#


INSERT INTO `purchase`(`PurchaseId`,`SupplierId`,`CompaniesId`,`PurchaseDate`,`DueAmount`,`TotalAmount`,`DueDate`,`Note`,`ShippingCost`,`Status`) VALUES
('1','2','1','2016-08-16','1021','1021','2016-08-16','hello','30','no');







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
  `TaxRate` int(20) unsigned DEFAULT NULL,
  `Qty` int(20) DEFAULT NULL,
  `PurchasePrice` int(20) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `PurchaseDate` date DEFAULT NULL,
  `EstimateDeliveryDate` date DEFAULT NULL,
  `Delivered` text,
  `ActualDeliveryDate` date DEFAULT NULL,
  `PurchaseDetailNote` longtext,
  `Discount` int(11) DEFAULT NULL,
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
('179','1','3','1','24','10','9','90','2016-08-16','2016-08-16','yes','2016-09-26','hello','0'),
('180','1','3','1','24','10','9','90','2016-08-16','2016-08-16','yes','2016-08-20','hello','0'),
('181','1','3','1','24','11','13','134','2016-08-16','2016-08-16','yes','2016-08-18','hello','9'),
('182','1','3','1','24','0','0','0','2016-08-16','2016-08-16','yes','2016-08-18','hello','0'),
('183','1','3','1','24','11','13','143','2016-08-16','2016-08-16','yes','2016-08-18','hello','0'),
('184','1','3','1','24','11','13','143','2016-08-16','2016-08-16','yes','2016-08-18','hello','0'),
('185','1','3','1','24','11','13','143','2016-08-16','2016-08-16','yes','2016-08-19','hello','0'),
('186','1','3','2','24','8','10','80','2016-08-16','2016-08-16','yes','2016-08-19','hello','0');







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
  `Creditlimit` int(20) DEFAULT NULL,
  `DueSettlement` int(20) DEFAULT NULL,
  `TaxId` int(20) unsigned DEFAULT NULL,
  `NominalId` int(20) DEFAULT NULL,
  `VatNo` text,
  PRIMARY KEY (`SupplierId`),
  KEY `TaxId` (`TaxId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;





#
# Data contents of table `supplier`
#


INSERT INTO `supplier`(`SupplierId`,`CompanyId`,`SupplierName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxId`,`NominalId`,`VatNo`) VALUES
('1','1','garmenS','kachukhet','dhaka','bd','1902','kalam','0184575955','nkoun','kalam@gmail.com','hamum','yes','2000',,'1','2','132'),
('2','1','RFL','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500',,'2','1',),
('5','1','Plastic BD','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','no','500',,'2','1',),
('7','1','Plastic BD','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','no','500',,'2','1',),
('10','1','Plastic BD','Dhaka','dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500',,'2','1',);







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
  `Rate` int(11) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`TaxId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;





#
# Data contents of table `tax`
#


INSERT INTO `tax`(`TaxId`,`TaxCode`,`Rate`,`Description`) VALUES
('1','A','12','annual Tax'),
('2','B','24','monthly tax'),
('3','C','43','weetly tax'),
('4','Dd','21','two year5');







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
('1','raju','raj','0','admin',),
('2','s','s','0','employee',);







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
('4','r','r@r.r','$2y$10$3bA5/CJVhNVv7ur/S.P4Cesvr88HZKKg2ZkAbagAgrB9vFbjkzUtK','MIihmy7rwAzB0zOtzfZwXnrsuKxwMveqLaNwV0K0ltnmRvLuuGl0C0ygfZ3S','2016-08-06 17:10:05','2016-10-08 09:33:00','admin'),
('5','s','s@s.s','123456',,'2016-08-09 16:58:00',,'employee'),
('7','a','a@a.a','$2y$10$rLHlcZQNU0l2FTsb74J/yuQx/Loht0FpSk1Z2V9CCeaE3jFKthsYS',,'2016-08-09 10:45:50','2016-08-09 10:45:50',),
('9','b','b@b.b','$2y$10$xJnnBbglnf.vq5A85XkpVe9TTyXMeqXbkXerggsy6oEq96vmzLOne',,'2016-08-09 10:47:50','2016-08-09 10:47:50',),
('11','c','c@c.c','$2y$10$AK0sBWMPyO3oGc4w.IhqU.Vhnz75YVZ.PpUE7DnqEibArP2LZ6ejK',,'2016-08-09 10:50:18','2016-08-09 10:50:18',),
('12','d','d@d.d','$2y$10$AUDb4onq8t0/9Xsb5CPKKOG55KocGZ4MI24OIJ0LN5sDoj4fd6Reu',,'2016-08-09 10:51:50','2016-08-09 10:51:50',),
('13','e','e@e.e','$2y$10$XAQHITHuhDOT6KiO.nE3COjojdAbwqH0Hc233VWzVvY0qUmL1wjcW',,'2016-08-09 10:53:28','2016-08-09 10:53:28',),
('14','f','f@f.f','$2y$10$bIZhrjHFw8EjuZkmPiXFw.LH8kZd12fTZN6DyvCZlceHjW3AsomYS',,,,'employee'),
('15','g','g@g.g','$2y$10$Wm2LzrZfXdYd12p99htZmeLrS.HJsxHHT5om/o32qFThjN67XYH.m',,'2016-08-09 11:08:23','2016-08-09 11:08:23',),
('17','h','h@h.h','$2y$10$bV2ICis120a1niCMggnpDeb2FfPGVaw41tI2kjfgZbaJNdAus9R.a',,'2016-08-09 17:19:54','2016-08-09 17:19:54','employee'),
('21','i','i@i.i','$2y$10$.ezHJYaE7kkFlO9I4uDk8O8YlM7vRtr3MU4C36kN.FylLffoayb2O',,'2016-08-09 17:33:42','2016-08-09 17:33:42','admin'),
('22','raju','aa@dd.gf','$2y$10$4qZKhqI8lE3/kVlGhGR5EOLn/WE.hUCM2AODlXBJJd7LBXiZoRTwm',,'2016-08-09 17:48:56','2016-08-09 17:48:56','employee'),
('24','raju','rrr@dfsd.fg','$2y$10$It3uFx3kIogBIenhBQrFEuFDuFYJPJ2qQyAy60quC8ww5ivcwUODq',,'2016-08-09 17:52:27','2016-08-09 17:52:27','admin');







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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;





#
# Data contents of table `weekdaychange`
#


INSERT INTO `weekdaychange`(`WeekDayChangeId`,`CustomersId`,`WeekDateUpdateString`,`WeekDateUpdateDate`) VALUES
('5','92','1_','2016-09-24'),
('6','92','1_2_','2016-09-25'),
('7','92','1_2_3_','2016-09-30'),
('8','25','1_3_4_5_','2016-01-01'),
('9','51','1_2_3_','2016-06-01');












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
  ADD CONSTRAINT `invoicedetails_ibfk_1` FOREIGN KEY (`InvoicesId`) REFERENCES `invoices` (`InvoicesId`),  ADD CONSTRAINT `invoicedetails_ibfk_2` FOREIGN KEY (`ItemId`) REFERENCES `item` (`ItemId`),  ADD CONSTRAINT `invoicedetails_ibfk_3` FOREIGN KEY (`ProductsId`) REFERENCES `products` (`ProductsId`);


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