
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- mealcategory
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mealcategory`;


CREATE TABLE `mealcategory`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`desc` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- terminal
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `terminal`;


CREATE TABLE `terminal`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`location` VARCHAR(255)  NOT NULL,
	`ipaddress` VARCHAR(255)  NOT NULL,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- mealcharges
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mealcharges`;


CREATE TABLE `mealcharges`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meal` VARCHAR(255),
	`itemserial` VARCHAR(255),
	`unit` DECIMAL,
	`cost` DECIMAL,
	`price` DECIMAL,
	`select` VARCHAR(255),
	`quantity` VARCHAR(255),
	`customer` VARCHAR(255),
	`terminal` VARCHAR(255),
	`status` VARCHAR(255),
	`vatin` DECIMAL,
	`vatex` DECIMAL,
	`date` DATE,
	`comments` VARCHAR(1000),
	`discount` VARCHAR(255),
	`discount1` VARCHAR(255),
	`receipt` VARCHAR(255),
	`areceipt` VARCHAR(255),
	`cashier` VARCHAR(255),
	`senior` VARCHAR(255),
	`location` VARCHAR(255),
	`ret` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ingredients
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ingredients`;


CREATE TABLE `ingredients`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`qty` VARCHAR(255)  NOT NULL,
	`main` INTEGER,
	`items` INTEGER,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `ingredients_FI_1` (`main`),
	CONSTRAINT `ingredients_FK_1`
		FOREIGN KEY (`main`)
		REFERENCES `inventoryingri` (`id`),
	INDEX `ingredients_FI_2` (`items`),
	CONSTRAINT `ingredients_FK_2`
		FOREIGN KEY (`items`)
		REFERENCES `inventoryingri` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- addons
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `addons`;


CREATE TABLE `addons`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`price` VARCHAR(255)  NOT NULL,
	`main` INTEGER,
	`items` INTEGER,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `addons_FI_1` (`main`),
	CONSTRAINT `addons_FK_1`
		FOREIGN KEY (`main`)
		REFERENCES `inventoryingri` (`id`),
	INDEX `addons_FI_2` (`items`),
	CONSTRAINT `addons_FK_2`
		FOREIGN KEY (`items`)
		REFERENCES `inventoryingri` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- inventorycount
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `inventorycount`;


CREATE TABLE `inventorycount`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meal` VARCHAR(255),
	`quantity` VARCHAR(255),
	`location` VARCHAR(255),
	`category` VARCHAR(255),
	`date` DATE,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- inventoryingri
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `inventoryingri`;


CREATE TABLE `inventoryingri`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`barcode` VARCHAR(255),
	`reorder` VARCHAR(255),
	`qty` VARCHAR(255),
	`vatin` DECIMAL  NOT NULL,
	`vatex` DECIMAL  NOT NULL,
	`selprice` DECIMAL  NOT NULL,
	`price` DECIMAL  NOT NULL,
	`uom` VARCHAR(255),
	`pouom` VARCHAR(255),
	`con1` VARCHAR(255),
	`con2` VARCHAR(255),
	`category` VARCHAR(255),
	`type` VARCHAR(255),
	`file` VARCHAR(255),
	`senior` TINYINT,
	`nonstock` TINYINT,
	`active` VARCHAR(255),
	`addons` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- location
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `location`;


CREATE TABLE `location`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(255),
	`name` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- discount
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `discount`;


CREATE TABLE `discount`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`discount` VARCHAR(255),
	`status` VARCHAR(255),
	`table` VARCHAR(255),
	`receipt` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- itemlogs
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `itemlogs`;


CREATE TABLE `itemlogs`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`ingredients` VARCHAR(255)  NOT NULL,
	`name` VARCHAR(255),
	`begin` DECIMAL,
	`adjust` DECIMAL,
	`endin` DECIMAL,
	`uom` DECIMAL,
	`remarks` VARCHAR(255),
	`user` VARCHAR(255),
	`branch` VARCHAR(255),
	`type` VARCHAR(255),
	`date` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- modepayments
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `modepayments`;


CREATE TABLE `modepayments`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`type` VARCHAR(255),
	`status` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- payments
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `payments`;


CREATE TABLE `payments`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`table` VARCHAR(255),
	`card` VARCHAR(255),
	`code` VARCHAR(255),
	`type` VARCHAR(255),
	`amount` DECIMAL,
	`mop` VARCHAR(255),
	`cashier` VARCHAR(255),
	`status` VARCHAR(255),
	`receipt` VARCHAR(255),
	`areceipt` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- receipt
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `receipt`;


CREATE TABLE `receipt`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`ornumber` VARCHAR(255),
	`table` VARCHAR(255),
	`cashier` VARCHAR(255),
	`date` VARCHAR(255),
	`subtotal` DECIMAL,
	`vatable` DECIMAL,
	`vatin` DECIMAL,
	`vatex` DECIMAL,
	`senior` VARCHAR(255),
	`discount` VARCHAR(255),
	`total` DECIMAL,
	`status` VARCHAR(255),
	`type` VARCHAR(255),
	`comments` VARCHAR(255),
	`customer` VARCHAR(255),
	`name` VARCHAR(255),
	`tin` VARCHAR(255),
	`address` VARCHAR(255),
	`arorder` VARCHAR(255),
	`smac` VARCHAR(255),
	`eplus` VARCHAR(255),
	`credit` DECIMAL,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- areceipt
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `areceipt`;


CREATE TABLE `areceipt`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`ornumber` VARCHAR(255),
	`table` VARCHAR(255),
	`cashier` VARCHAR(255),
	`date` VARCHAR(255),
	`subtotal` DECIMAL,
	`vatable` DECIMAL,
	`vatin` DECIMAL,
	`vatex` DECIMAL,
	`senior` DECIMAL,
	`discount` VARCHAR(255),
	`total` DECIMAL,
	`status` VARCHAR(255),
	`type` VARCHAR(255),
	`comments` VARCHAR(255),
	`customer` VARCHAR(255),
	`credit` DECIMAL,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- senior
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `senior`;


CREATE TABLE `senior`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`senior` VARCHAR(255),
	`status` VARCHAR(255)  NOT NULL,
	`table` VARCHAR(255)  NOT NULL,
	`take` VARCHAR(255)  NOT NULL,
	`card` VARCHAR(255)  NOT NULL,
	`discount` VARCHAR(255),
	`receipt` VARCHAR(255)  NOT NULL,
	`customer` VARCHAR(255)  NOT NULL,
	`giftcert` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- auditlogs
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `auditlogs`;


CREATE TABLE `auditlogs`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user` VARCHAR(255),
	`receipt` VARCHAR(255),
	`tran` VARCHAR(255),
	`date` DATE,
	`machine` VARCHAR(255),
	`ipaddress` VARCHAR(255),
	`type` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vendor
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vendor`;


CREATE TABLE `vendor`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`address` VARCHAR(255),
	`contactname` VARCHAR(255),
	`contactphone` VARCHAR(255),
	`fax` VARCHAR(255),
	`email` VARCHAR(255),
	`tin` VARCHAR(255),
	`file` VARCHAR(255),
	`remarks` VARCHAR(255),
	`charge` VARCHAR(255),
	`other` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vendoritems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vendoritems`;


CREATE TABLE `vendoritems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`vendor` VARCHAR(255),
	`inventoryingri` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- purchaseorder
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `purchaseorder`;


CREATE TABLE `purchaseorder`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`branch` INTEGER,
	`vendor` INTEGER,
	`number` VARCHAR(255),
	`deliveredby` VARCHAR(255),
	`notedby` VARCHAR(255),
	`approvedby` VARCHAR(255),
	`checkedby` VARCHAR(255),
	`date` DATE,
	`expdate` DATE,
	`status` VARCHAR(255),
	`remarks` VARCHAR(10000),
	`category` VARCHAR(255),
	`remarksreceive` VARCHAR(10000),
	`remarksreturn` VARCHAR(10000),
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `purchaseorder_FI_1` (`branch`),
	CONSTRAINT `purchaseorder_FK_1`
		FOREIGN KEY (`branch`)
		REFERENCES `location` (`id`),
	INDEX `purchaseorder_FI_2` (`vendor`),
	CONSTRAINT `purchaseorder_FK_2`
		FOREIGN KEY (`vendor`)
		REFERENCES `vendor` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- orderitems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `orderitems`;


CREATE TABLE `orderitems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`purchaseorder` VARCHAR(255),
	`items` VARCHAR(255),
	`qoh` DECIMAL,
	`quantity` DECIMAL,
	`unitprice` DECIMAL,
	`price` DECIMAL,
	`date` DATE,
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- receiveitems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `receiveitems`;


CREATE TABLE `receiveitems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`purchaseorder` VARCHAR(255),
	`items` VARCHAR(255),
	`quantity` DECIMAL,
	`unitprice` DECIMAL,
	`price` DECIMAL,
	`date` DATE,
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- receiveitemsbarcode
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `receiveitemsbarcode`;


CREATE TABLE `receiveitemsbarcode`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`purchaseorder` VARCHAR(255),
	`items` VARCHAR(255),
	`quantity` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- returnitems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `returnitems`;


CREATE TABLE `returnitems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`purchaseorder` VARCHAR(255),
	`items` VARCHAR(255),
	`quantity` DECIMAL,
	`unitprice` DECIMAL,
	`price` DECIMAL,
	`date` DATE,
	`user` VARCHAR(255),
	`remarks` VARCHAR(255),
	`branch` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- issuance
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `issuance`;


CREATE TABLE `issuance`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`branch` INTEGER,
	`branch1` INTEGER,
	`purchaseorder` INTEGER,
	`number` VARCHAR(255),
	`deliveredby` VARCHAR(255),
	`notedby` VARCHAR(255),
	`date` DATE,
	`status` VARCHAR(255),
	`remarks` VARCHAR(10000),
	`remarksreceive` VARCHAR(10000),
	`remarksreturn` VARCHAR(10000),
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `issuance_FI_1` (`branch`),
	CONSTRAINT `issuance_FK_1`
		FOREIGN KEY (`branch`)
		REFERENCES `location` (`id`),
	INDEX `issuance_FI_2` (`branch1`),
	CONSTRAINT `issuance_FK_2`
		FOREIGN KEY (`branch1`)
		REFERENCES `location` (`id`),
	INDEX `issuance_FI_3` (`purchaseorder`),
	CONSTRAINT `issuance_FK_3`
		FOREIGN KEY (`purchaseorder`)
		REFERENCES `vendor` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- issuanceitems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `issuanceitems`;


CREATE TABLE `issuanceitems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`issuance` VARCHAR(255),
	`items` VARCHAR(255),
	`quantity` DECIMAL,
	`receive` DECIMAL,
	`unitprice` DECIMAL,
	`price` DECIMAL,
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- receive
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `receive`;


CREATE TABLE `receive`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`branch` INTEGER,
	`number` VARCHAR(255),
	`deliveredby` VARCHAR(255),
	`notedby` VARCHAR(255),
	`date` DATE,
	`status` VARCHAR(255),
	`remarks` VARCHAR(10000),
	`remarksreceive` VARCHAR(10000),
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `receive_FI_1` (`branch`),
	CONSTRAINT `receive_FK_1`
		FOREIGN KEY (`branch`)
		REFERENCES `location` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- receivingitems
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `receivingitems`;


CREATE TABLE `receivingitems`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`receive` VARCHAR(255),
	`items` VARCHAR(255),
	`quantity` DECIMAL,
	`unitprice` DECIMAL,
	`price` DECIMAL,
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- customer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;


CREATE TABLE `customer`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(255),
	`name` VARCHAR(255),
	`address` VARCHAR(255),
	`contactname` VARCHAR(255),
	`contactphone` VARCHAR(255),
	`fax` VARCHAR(255),
	`email` VARCHAR(255),
	`type` VARCHAR(255),
	`credit` DECIMAL,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- configuration
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `configuration`;


CREATE TABLE `configuration`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`branch` VARCHAR(255),
	`content` VARCHAR(10000),
	`footer` VARCHAR(10000),
	`file` VARCHAR(255),
	`alliance` VARCHAR(255),
	`giftcert` VARCHAR(255),
	`scdiscount` VARCHAR(255),
	`itemdiscount` VARCHAR(255),
	`discount` VARCHAR(255),
	`demo` VARCHAR(255),
	`transdate` DATE,
	`transon` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- giftcertificate
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `giftcertificate`;


CREATE TABLE `giftcertificate`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`number` VARCHAR(255),
	`value` VARCHAR(255),
	`status` VARCHAR(255),
	`type` VARCHAR(255),
	`customer` VARCHAR(255),
	`contact` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- giftcert
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `giftcert`;


CREATE TABLE `giftcert`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`senior` VARCHAR(255)  NOT NULL,
	`giftcert` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cashcount
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cashcount`;


CREATE TABLE `cashcount`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`date` DATE  NOT NULL,
	`oneth` VARCHAR(255),
	`fiveh` VARCHAR(255),
	`twoh` VARCHAR(255),
	`oneh` VARCHAR(255),
	`fifty` VARCHAR(255),
	`twenty` VARCHAR(255),
	`ten` VARCHAR(255),
	`five` VARCHAR(255),
	`one` VARCHAR(255),
	`fiftyc` VARCHAR(255),
	`twentyfivec` VARCHAR(255),
	`tenc` VARCHAR(255),
	`fivec` VARCHAR(255),
	`amount` VARCHAR(255),
	`total` VARCHAR(255),
	`over` VARCHAR(255),
	`short` VARCHAR(255),
	`terminal` VARCHAR(255),
	`cashier` VARCHAR(255),
	`type` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- help
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `help`;


CREATE TABLE `help`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`short` VARCHAR(30000),
	`desc` VARCHAR(30000),
	`file` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- discountlist
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `discountlist`;


CREATE TABLE `discountlist`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`amount` VARCHAR(255),
	`status` VARCHAR(255),
	`type` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- itemserial
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `itemserial`;


CREATE TABLE `itemserial`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`items` VARCHAR(255),
	`number` VARCHAR(255),
	`quantity` VARCHAR(255),
	`date` DATE,
	`user` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
