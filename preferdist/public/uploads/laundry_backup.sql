#Laundry Management MySQL database backup

# Generated: Saturday 15. October 2016 17:13 UTC  Laundry Management
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
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;





#
# Data contents of table `customers`
#


INSERT INTO `customers`(`CustomersId`,`CustomerNumber`,`CompaniesId`,`CustomerName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`DriverNo`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxCode`,`NominalCode`,`VatNo`,`ItemizingFixedBilling`,`Invoicetype`,`AmountFix`,`HotTowelFree`,`Weekday`,`IsStanding`,`StandingDay`,`StandingAmount`,`StandingType`,`RegistrationDate`) VALUES
('25','10','1','raju','dhaka','dahak','','1206','ABUL','0134575995','','RAJU@RAJU.COM','01674266054','VERY GOOD','yes','14',NULL,'2','2','','FixedBill','yearly','2200','no','1_3_4_5_','',NULL,NULL,'','2016-01-01'),
('26','10','1','raju','sdg','dfs','','dfsd','fds','01674382555','','dfgs','dsaf','','yes','2',NULL,'2','2','','Itemizing','yearly',NULL,'yes','2_3_','',NULL,NULL,'','2016-01-01'),
('31','21','1','sdas','sdas','sdas','','sdas','sdas','sdas','','sdas','sdas','','yes','0',NULL,'3','3','','FixedBill','yearly','200','yes','3_5_','',NULL,NULL,'','2016-01-01'),
('40','22','1','sdas','re','rggre','','g','er','greg','','res','gser','regdg','yes','226',NULL,'3','2','','FixedBill','yearly','424','yes','2_3_4_6_','',NULL,NULL,'','2016-01-01'),
('47','12','1','vdvdv','dsvs','ddv','','dsv','sd','s','','vds','vdsvsd','','yes','5354',NULL,'2','2','','Itemizing','yearly',NULL,'yes','3_5_','',NULL,NULL,'','2016-01-01'),
('61','44','1','gfg','dsgsdf','gds','','fgdf','fd','fdg','','g','fd','hffdhfg','yes','78858',NULL,'3','2','','Itemizing','yearly',NULL,'yes','1_3_5_7_','',NULL,NULL,'','2016-01-01'),
('63','11','1','worldmartccustomer','dhaka','dk','','1206','mofij','01675956554','','ewfer22@RDGD.GRE','01845484818','erhgreh','yes','2000',NULL,'3','2','','Itemizing','monthly',NULL,'yes','1_2_3_5_7_','',NULL,NULL,'','2016-01-01'),
('87','11','1','walton','tangail','Dhaka','','1902','mofij','01684575990','','sds@dsfs.hgk','017548965525','Details','yes','1000',NULL,'2','2','','FixedBill','monthly','1200','no','2_4_6_','on','1','2000','fortnight','2016-01-01'),
('90','66666666','1','fuji color','dkaka','dhaka','','1206','selim','187596425385','','dsgd@dsfsd.dg','017558692453','wwwwwwwwwwwwwww','yes','123456789',NULL,'2','1','','Itemizing','yearly',NULL,'no','1_2_3_','on','25','22222','monthly','2016-01-01'),
('91','100','1','Fuad','canada','canada','','1206','canadacanada','canada','','canada@gmail.com','016438295','customr','yes','28',NULL,'1','1','','FixedBill','monthly','2000','yes','2_4_6_','on','0','0','fortnight','2016-01-01'),
('92','20','1','ASIF','ASIF address','ASIF city','','12060','ASIF PS','0167435859','','ASIF@ASIF.ASIF','0155555555555','very good boy','yes','57',NULL,'2','2','','FixedBill','monthly','40000','yes','1_2_3_','on','0','0','fortnight','2016-09-24'),
('93','22','1','asiq','asiq','asiq','','1206','asiqasiq','01674599855','','asiq','12','hot towel test','yes','4',NULL,'1','1','','FixedBill','yearly','200','yes','2_3_4_','on','0','0','fortnight','2016-10-12'),
('94','100','1','rubel','rubel','rubel','','rubel','rubel','rubel','','rubel','rubelrubel','fdghdfh','yes','122',NULL,'1','1','','FixedBill','yearly','22','no','1_3_6_','',NULL,NULL,'','2016-08-13'),
('95','10','1','shourob','shourob','shourob','','shourob','shourob','shourob','','shourob','shourob','dfgdfh','yes','0',NULL,'1','1','','FixedBill','yearly','200','no','2_4_6_','',NULL,NULL,'','2016-10-15'),
('96','d','1','dDDDDDDDD','d','Dd','','d','d','d','','d','d','wefef','yes','11',NULL,'1','1','','FixedBill','yearly','200','no','2_4_6_','',NULL,NULL,'','2016-10-15');







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
  `PricePerUnit` int(20) DEFAULT NULL,
  `PaymentTerms` text,
  `Discount` int(20) DEFAULT NULL,
  `Datetime` date DEFAULT NULL,
  `Flag` text,
  PRIMARY KEY (`InvoiceDetailsId`),
  KEY `InvoicesId` (`InvoicesId`),
  KEY `ItemId` (`ItemId`),
  KEY `ProductsId` (`ProductsId`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoicedetails`
#


INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('13','9','3','16',NULL,'3','5','1','16','',NULL,NULL,'yes'),
('14','9','11','18',NULL,'3','5',NULL,'16','',NULL,NULL,''),
('15','9','13','20',NULL,'35','0',NULL,'70','',NULL,NULL,''),
('25','12','3','32',NULL,'3','5',NULL,'16','',NULL,NULL,''),
('26','12','12','33',NULL,'4','5',NULL,'18','',NULL,NULL,''),
('27','12','6','34',NULL,'3','0',NULL,'6','',NULL,NULL,'yes'),
('28','12','11','35',NULL,'4','4',NULL,'16','',NULL,NULL,''),
('29','12','13','36',NULL,'6','0',NULL,'12','',NULL,NULL,''),
('30','12','14','37',NULL,'45','0',NULL,'90','',NULL,NULL,''),
('32','14','3','16',NULL,'1','0','1','2','',NULL,NULL,'no'),
('33','14','6','17',NULL,'0','1','0','2','',NULL,NULL,'no'),
('34','14','11','18',NULL,'1','1','0','4','',NULL,NULL,'no'),
('35','14','14','21',NULL,'1','0','0','2','',NULL,NULL,'no'),
('42','17','3','16',NULL,'31','1','2','64','',NULL,NULL,'no'),
('43','17','11','18',NULL,'20','0','0','40','',NULL,NULL,'no'),
('44','17','13','20',NULL,'4','0','0','8','',NULL,NULL,'no'),
('66','16','3','16',NULL,'5','0','0','10','',NULL,NULL,'no'),
('67','16','11','18',NULL,'4','0','0','8','',NULL,NULL,'no'),
('68','16','13','20',NULL,'5','1','0','12','',NULL,NULL,'no'),
('69','16','14','21',NULL,'6','0','0','9','',NULL,NULL,'no'),
('70','18','3','16',NULL,'20','0','0','40','',NULL,NULL,'no'),
('71','18','11','18',NULL,'0','1','1','2','',NULL,NULL,'no'),
('72','18','13','20',NULL,'0','2','0','4','',NULL,NULL,'no'),
('73','18','14','21',NULL,'21','4','0','38','',NULL,NULL,'no'),
('74','19','3','16',NULL,'1','1','1','4','',NULL,NULL,'no'),
('75','20','3','16',NULL,'12','1','0','26','',NULL,NULL,'no'),
('76','20','11','18',NULL,'22','0','0','44','',NULL,NULL,'no'),
('77','22','3','16',NULL,'14','0','0','28','',NULL,NULL,'no'),
('78','22','11','18',NULL,'0','12','0','24','',NULL,NULL,'no'),
('79','23','3','16',NULL,'1','1','1','4','',NULL,NULL,'no'),
('82','25','3','16',NULL,'1','1','1','4','',NULL,NULL,'no'),
('83','25','13','20',NULL,'1','1','1','4','',NULL,NULL,'no'),
('84','26','3','16',NULL,'1','1','1','4','',NULL,NULL,'no'),
('85','27','3','16',NULL,'1','0','0','2','',NULL,NULL,'no'),
('86','27','11','18',NULL,'0','1','0','2','',NULL,NULL,'no'),
('87','28','3','16',NULL,'1','0','0','2','',NULL,NULL,'no'),
('88','28','11','18',NULL,'0','1','0','2','',NULL,NULL,'no'),
('138','55','3','16',NULL,'1','1','1','4','',NULL,NULL,'no'),
('139','55','6','17',NULL,'1','1','1','4','',NULL,NULL,'no'),
('140','55','11','18',NULL,'1','1','1','4','',NULL,NULL,'no'),
('141','55','13','20',NULL,'1','1','1','4','',NULL,NULL,'no'),
('142','55','14','21',NULL,'1','1','1','3','',NULL,NULL,'no'),
('158','59','3','16',NULL,'4','4','4','16','',NULL,NULL,'no'),
('159','59','6','17',NULL,'4','4','4','16','',NULL,NULL,'no'),
('160','59','11','18',NULL,'4','4','4','16','',NULL,NULL,'no'),
('161','59','13','20',NULL,'4','4','4','16','',NULL,NULL,'no'),
('162','59','14','21',NULL,'4','4','4','12','',NULL,NULL,'no'),
('163','60','3','32',NULL,'1','1','1','4','',NULL,NULL,'no'),
('164','60','12','33',NULL,'1','1','1','4','',NULL,NULL,'no'),
('165','60','6','34',NULL,'1','1','1','4','',NULL,NULL,'no'),
('166','60','11','35',NULL,'1','1','1','4','',NULL,NULL,'no');
INSERT INTO `invoicedetails`(`InvoiceDetailsId`,`InvoicesId`,`ItemId`,`ProductsId`,`OrderNo`,`Quantity`,`Extra`,`Damage`,`PricePerUnit`,`PaymentTerms`,`Discount`,`Datetime`,`Flag`) VALUES
('167','60','13','36',NULL,'1','1','1','4','',NULL,NULL,'no'),
('168','60','14','37',NULL,'1','1','1','4','',NULL,NULL,'no'),
('169','61','6','38',NULL,'1','1','1','5','',NULL,NULL,'no'),
('170','61','11','39',NULL,'1','1','1','4','',NULL,NULL,'no'),
('171','62','6','38',NULL,'2','2','2','10','',NULL,NULL,'no'),
('172','62','11','39',NULL,'2','2','2','8','',NULL,NULL,'no'),
('173','63','3','16',NULL,'5','5','5','20','',NULL,NULL,'no'),
('174','63','6','17',NULL,'5','5','5','20','',NULL,NULL,'no'),
('175','63','11','18',NULL,'5','5','5','20','',NULL,NULL,'no'),
('176','63','13','20',NULL,'5','5','5','20','',NULL,NULL,'no'),
('177','63','14','21',NULL,'5','5','5','15','',NULL,NULL,'no'),
('178','64','3','16',NULL,'22','1','1','46','',NULL,NULL,'no'),
('179','64','6','17',NULL,'330','10','1','680','',NULL,NULL,'no'),
('180','64','11','18',NULL,'22','1','1','46','',NULL,NULL,'no'),
('181','64','13','20',NULL,'22','1','1','46','',NULL,NULL,'no'),
('182','64','14','21',NULL,'22','1','1','35','',NULL,NULL,'no'),
('198','66','3','32',NULL,'22','22','22','88','',NULL,NULL,'no'),
('199','66','12','33',NULL,'22','22','22','88','',NULL,NULL,'no'),
('200','66','6','34',NULL,'22','22','22','88','',NULL,NULL,'no'),
('201','66','11','35',NULL,'22','22','22','88','',NULL,NULL,'no'),
('202','66','13','36',NULL,'22','22','22','88','',NULL,NULL,'no'),
('203','66','14','37',NULL,'22','22','22','88','',NULL,NULL,'no'),
('204','67','3','22',NULL,'22','2','2','48','',NULL,NULL,'no'),
('205','68','3','22',NULL,'1','1','1','4','',NULL,NULL,'no'),
('206','69','3','22',NULL,'2','22','0','48','',NULL,NULL,'no'),
('207','70','3','22',NULL,'2','2','2','8','',NULL,NULL,'no'),
('208','71','3','22',NULL,'3','0','0','6','',NULL,NULL,'no'),
('209','72','3','22',NULL,'33','0','0','66','',NULL,NULL,'no'),
('210','73','15','46',NULL,'20','1','1','42','',NULL,NULL,'no');







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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;





#
# Data contents of table `invoices`
#


INSERT INTO `invoices`(`InvoicesId`,`CustomersId`,`CompaniesId`,`InvoiceDate`,`Notes`,`Status`,`TotalAmount`,`DueAmount`,`DueDate`) VALUES
('9','25','1','2016-08-28','','yes','200','200',NULL),
('12','63','1','2016-08-28','','yes','200','200',NULL),
('14','25','1','2016-08-28','','yes','200','200',NULL),
('16','25','1','2016-08-29','','yes','39','39',NULL),
('17','25','1','2016-08-28','','yes','200','200',NULL),
('18','25','1','2016-08-28','','yes','84','84',NULL),
('19','25','1','2016-08-28','','yes','4','4',NULL),
('20','25','1','2016-09-17','','yes','70','70',NULL),
('22','25','1','2016-09-23','','yes','52','52',NULL),
('23','25','1','2016-09-23','','yes','4','4',NULL),
('25','25','1','2016-09-23','','yes','8','8',NULL),
('26','25','1','2016-09-23','','yes','4','4',NULL),
('27','25','1','2016-09-23','','yes','4','4',NULL),
('28','25','1','2016-09-23','','yes','4','4',NULL),
('37','25','1','2016-09-23','','yes','4','4',NULL),
('38','25','1','2016-09-23','','yes','4','4',NULL),
('39','25','1','2016-09-23','','yes','4','4',NULL),
('55','25','1','2016-09-23','','yes','19','19',NULL),
('59','25','1','2016-09-24','','yes','76','76',NULL),
('60','63','1','2016-09-21','','yes','24','24',NULL),
('61','92','1','2016-09-02','','yes','9','9',NULL),
('62','92','1','2016-10-02','','yes','18','18',NULL),
('63','25','1','2016-10-03','','yes','95','95',NULL),
('64','25','1','2016-10-08','','yes','853','853',NULL),
('66','63','1','2016-10-10','','yes','528','528',NULL),
('67','26','1','2016-10-12','','yes','48','48',NULL),
('68','26','1','2016-10-12','','yes','4','4',NULL),
('69','26','1','2016-10-12','','yes','48','48',NULL),
('70','26','1','2016-10-12','','yes','8','8',NULL),
('71','26','1','2016-10-12','','yes','6','6',NULL),
('72','26','1','2016-10-12','','yes','66','66',NULL),
('73','94','1','2016-10-06','','yes','42','42',NULL);







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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;





#
# Data contents of table `item`
#


INSERT INTO `item`(`ItemId`,`ItemName`,`AveragePrice`,`ItemCategoryId`,`ItemUnitId`,`InitialQty`,`ItemType`,`ItemNote`,`Active`,`ItemColor`,`MinStock`,`MaxStock`) VALUES
('3','towel','2','1','1','255','stock','valo','yes','red','2','3'),
('4','scatewqdas','20','4','1','0','stock','sportssssssssssss','no','','0','0'),
('6','book','50','3','2','10','non-stock','b0000okkkkkkkkkkkkkkk','yes','','10','10'),
('11','mobile','200000','2','1','20','stock','xaomi','yes','','0','12'),
('12','towel','2','1','1','255','stock','valo','yes','','2','3'),
('13','fsdfssfs','12','1','1','0','stock','ghj','yes','','0','0'),
('14','esfs','0','1','1','0','stock','dsfsf','yes','','0','0'),
('15','Hot Towel','2','1','4','0','stock','good ','yes','','0','0');







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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;





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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;





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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;





#
# Data contents of table `nominal`
#


INSERT INTO `nominal`(`NominalId`,`NominalCode`,`CodeDescription`) VALUES
('1','5556','car'),
('2','5461','fuel'),
('3','5588','VISIT'),
('4','4444','fao');







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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;





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
('39','mobile','2','92','yes','11'),
('40','Hot Towel','2','25','yes','15'),
('41','Hot Towel','0','93','yes','15'),
('42','Hot Towel','0','63','yes','15'),
('43','Hot Towel','3','87','yes','15'),
('44','Hot Towel','3','91','yes','15'),
('45','Hot Towel','3','92','yes','15'),
('46','Hot Towel','2','94','yes','15'),
('47','Hot Towel','2','95','yes','15'),
('48','Hot Towel','2','96','yes','15');







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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;





#
# Data contents of table `supplier`
#


INSERT INTO `supplier`(`SupplierId`,`CompanyId`,`SupplierName`,`Address`,`City`,`Country`,`PostCode`,`ContactPerson`,`PhoneNo`,`FaxNumber`,`Email`,`Notes`,`Active`,`Creditlimit`,`DueSettlement`,`TaxId`,`NominalId`,`VatNo`) VALUES
('1','1','garmenS','kachukhet','Dhaka','bd','1902','kalam','0184575955','nkoun','kalam@gmail.com','Halum','yes','2001',NULL,'1','3','132'),
('2','1','RFL','Dhaka','Dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500',NULL,'2','3',''),
('5','1','Plastic BD','Dhaka','Dhaka','BD','1206','MOFIJ','016743595665','HJFC','ASSDD@SDF.FSDF','plastic tools','yes','500',NULL,'2','3','');







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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;





#
# Data contents of table `tax`
#


INSERT INTO `tax`(`TaxId`,`TaxCode`,`Rate`,`Description`) VALUES
('1','A','12','annual Tax'),
('2','B','24','monthly tax'),
('3','C','43','weetly tax'),
('4','Dd','21','two year5'),
('6','4444','2','income');







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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;





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
('24','95','2_4_6_','2016-10-15'),
('25','96','2_4_6_','2016-10-15');












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