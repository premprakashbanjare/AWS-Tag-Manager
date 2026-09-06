-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: tagsync-rds.cfjyhlovqa0v.us-west-2.rds.amazonaws.com    Database: master
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aws_account_details`
--

DROP TABLE IF EXISTS `aws_account_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aws_account_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `secret_key` varchar(256) NOT NULL,
  `access_key` varchar(256) NOT NULL,
  `imported_timestamp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aws_account_details`
--

LOCK TABLES `aws_account_details` WRITE;
/*!40000 ALTER TABLE `aws_account_details` DISABLE KEYS */;
INSERT INTO `aws_account_details` VALUES (1,'508611289386','Tagsync-service','Jitb@123456','hfnvF0h5kyWxCXROLouY4FP3+nN7iO7vwl5cWzl6','AKIAXM24YMEVJJDIRABX','Tue Feb  1 16:14:14 2022'),(3,'282902823755','Tagsync-service','Jitb@123456','Frcc/Z2c8FcaMOETL2Ps+ADOu6COvESKaBxKKdKx','AKIAUDXSSQNF6AGO7SPU','Tue Feb  1 16:17:17 2022');
/*!40000 ALTER TABLE `aws_account_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_store`
--

DROP TABLE IF EXISTS `tag_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_store` (
  `id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(125) DEFAULT NULL,
  `instance_id` varchar(250) NOT NULL,
  `resource_name` varchar(256) NOT NULL,
  `region` varchar(256) NOT NULL,
  `resource_type` varchar(256) NOT NULL,
  `compliance` varchar(256) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `Application Name` varchar(256) DEFAULT NULL,
  `Environment` varchar(256) DEFAULT NULL,
  `Application Owner` varchar(256) DEFAULT NULL,
  `Function` varchar(256) DEFAULT NULL,
  `Previous Hostname` varchar(256) DEFAULT NULL,
  `DailyBackup` varchar(256) DEFAULT NULL,
  `Hostname` varchar(256) DEFAULT NULL,
  `MonthlyBackup` varchar(256) DEFAULT NULL,
  `OS` varchar(256) DEFAULT NULL,
  `Patch Group` varchar(256) DEFAULT NULL,
  `DR Replication` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_store`
--

LOCK TABLES `tag_store` WRITE;
/*!40000 ALTER TABLE `tag_store` DISABLE KEYS */;
INSERT INTO `tag_store` VALUES (1,'508611289386','i-0924122188779dd53','AWS Storage Gateway','us-west-2','Ec2','Non-compliant','AWS Storage Gateway','Storage-Gateway-Test-Corpsys','Test','N/A','Storage Gateway Applicance','N/A','True','ip-10-4-150-156','True','Linux','DO_NOT_PATCH','FALSE'),(2,'508611289386','i-09a0802f82ba31c35','ManageEngine Audit+ Security & Access Reporting System - old','us-west-2','Ec2','Non-compliant','ManageEngine Audit+ Security & Access Reporting System - old','ManageEngine Audit+ Security & Access Reporting System','Test','michelle.watson@jackinthebox.com','Reporting System','CSADMGRP01V','True','AW2ADMGRT01','True','2012','DO_NOT_PATCH','FALSE'),(3,'508611289386','i-0f28901f12ad87a63','Active Directory Recovery Program','us-west-2','Ec2','Non-compliant','Active Directory Recovery Program','Active Directory Recovery Program','Test','michelle.watson@jackinthebox.com','AD Recovery program','CSRCVMGRP01V','True','AW2RCVMGRT02','True','2012','DO_NOT_PATCH','FALSE'),(4,'508611289386','i-0c2b19d315c47a63b','ROSS','us-west-2','Ec2','Non-compliant','ROSS','ROSS','Test','Ben.Pierce@jackinthebox.com','N/A','CSBOSWEBT01V','True','AW2ROSST01','True','2012','DO_NOT_PATCH','FALSE'),(5,'508611289386','i-04511dc30135d83dc','NServiceBus 02','us-west-2','Ec2','Non-compliant','NServiceBus 02','NServiceBus','Test','wade.cook@jackinthebox.com','N/A','AW2NSBT02V','True','AW2NSBT02','True','2012','DO_NOT_PATCH','FALSE'),(6,'508611289386','i-043132ca8fd4fa72a','Octopus Deploy','us-west-2','Ec2','Non-compliant','Octopus Deploy','Octopus Deploy','Test','wade.cook@jackinthebox.com','N/A','CSINTMGRP01V','True','AW2INTMGRT02','True','2012','DO_NOT_PATCH','FALSE'),(7,'508611289386','i-0572aa8f3bafe8213','NServiceBus ServiceControl','us-west-2','Ec2','Non-compliant','NServiceBus ServiceControl','NServiceBus','Test','wade.cook@jackinthebox.com','Service Controller','CSNSBSCT01V','True','AW2NSBSCT01','True','2012','DO_NOT_PATCH','FALSE'),(8,'508611289386','i-061d781eab13f7ead','test-corpsys-SVR','us-west-2','Ec2','Non-compliant','test-corpsys-SVR','Test-Server','Test','olga.carrillo@jackinthebox.com','Test server ','N/A','True','EC2AMAZ-2JQ9CMR','True','2019','DO_NOT_PATCH','FALSE'),(9,'508611289386','i-075adab9ade0d3759','Back Office Webserver - 01','us-west-2','Ec2','Non-compliant','Back Office Webserver - 01','Back Office Webserver','Test','wade.cook@jackinthebox.com','Webserver','CSBOSWEBT03V','True','AW2BOSWEBT01','True','2012','DO_NOT_PATCH','FALSE'),(10,'508611289386','i-05563dbdcaa0d3eb7','Location Database','us-west-2','Ec2','Non-compliant','Location Database','Location Database','Test','mike.ritchey@jackinthebox.com','Location Database server','CSLOCT01V','True','AW2LOCT01','FALSE','2012','DO_NOT_PATCH','FALSE'),(11,'508611289386','i-023365670c814c9fb','AW2IDNOWT01','us-west-2','Ec2','Non-compliant','AW2IDNOWT01','Sailpoint','Test','Paul.Phillips@jackinthebox.com / SaliPoint','Sailpoint','N/A','FALSE','AW2IDNOWT01','FALSE','Linux','DO_NOT_PATCH','FALSE'),(12,'508611289386','i-031f42a5f5b406fef','NW-LINUX-TEST-SVR','us-west-2','Ec2','Non-compliant','NW-LINUX-TEST-SVR','Test-Server','Test','olga.carrillo@jackinthebox.com','Test server ','N/A','FALSE','ip-10-4-150-125','FALSE','Linux','DO_NOT_PATCH','FALSE'),(13,'508611289386','i-09a6cf20ea3e0ff2a','AW2COGNOST01','us-west-2','Ec2','Non-compliant','AW2COGNOST01','Cognos','Test','pat.cooper@jackinthebox.com','Cognos server','N/A','FALSE','AW2COGNOST01','True','2012','DO_NOT_PATCH','FALSE'),(14,'508611289386','i-0cf8169a4accd8fe2','SiteCenter Hierarchy Manager','us-west-2','Ec2','Non-compliant','SiteCenter Hierarchy Manager','SiteCenter Hierarchy Manager','Test','mike.ritchey@jackinthebox.com','Hierarchy Manager','N/A','True','AW2SITCTRT01','True','2016','DO_NOT_PATCH','FALSE'),(15,'508611289386','i-01b7e1ae282780ae1','NServiceBus 01','us-west-2','Ec2','Non-compliant','NServiceBus 01','NServiceBus','Test','wade.cook@jackinthebox.com','N/A','AW2NSBT01V','True','AW2NSBT01','True','2012','DO_NOT_PATCH','FALSE'),(16,'508611289386','i-03fc3a71d4ad0fbcd','Back Office Webserver - 02','us-west-2','Ec2','Non-compliant','Back Office Webserver - 02','Back Office Webserver','Test','wade.cook@jackinthebox.com','Webserver','CSBOSWEBT02V','True','AW2BOSWEBT02','True','2012','DO_NOT_PATCH','FALSE'),(17,'508611289386','i-054b3b337b4a4617f','OCS Graphics','us-west-2','Ec2','Non-compliant','OCS Graphics','OCS Graphics','Test','Simeon.brett@jackinthebox.com','Graphics server','CSOCSGRAP01V','True','AW2OCSGRAT01','True','2008','DO_NOT_PATCH','FALSE'),(18,'508611289386','i-0612243cb78eab932','Corporate Tax','us-west-2','Ec2','Non-compliant','Corporate Tax','Corporate Tax','Test','mike.ritchey@jackinthebox.com','Corporate Tax server','PRD-TAX-APP1','True','AW2CORPTAXT01','True','2016','DO_NOT_PATCH','FALSE'),(19,'508611289386','i-0f6c16769290c374f','Storage Gateway - test-corpsys-sgw','us-west-2','Ec2','Non-compliant','Storage Gateway - test-corpsys-sgw','Storage-Gateway-Test-Corpsys-1','Test','N/A','Storage Gateway Applicance','N/A','FALSE','ip-10-4-151-172','FALSE','Linux','DO_NOT_PATCH','FALSE'),(20,'508611289386','i-0977a619dd9874e68','SSIS','us-west-2','Ec2','Non-compliant','SSIS','SQL Server 2016 with SSIS','Test','jackinthebox-sql@xtivia.com','SQL server ','N/A','True','AW2SSIST01','True','2019','DO_NOT_PATCH','FALSE'),(21,'508611289386','i-0cf65a7f91954e4b8','Payroll','us-west-2','Ec2','Non-compliant','Payroll','Payroll','Test','Ben.Pierce@jackinthebox.com','Payroll application server','CSMFHRIST01V','True','AW2PAYROLLT01','True','2012','DO_NOT_PATCH','FALSE'),(22,'508611289386','i-09ba882f4666ecd5a','AW2IDNOWT02','us-west-2','Ec2','Non-compliant','AW2IDNOWT02','IdentityNow','Test','Paul.Phillips@jackinthebox.com','Identity Server(IAM)','N/A','FALSE','AW2IDNOWT02','FALSE','Linux','DO_NOT_PATCH','FALSE'),(23,'508611289386','i-0528ce3def0af570a','SFTP NW TEST SVR','us-west-2','Ec2','Non-compliant','SFTP NW TEST SVR','Network server','Test','olga.carrillo@jackinthebox.com','SFTP server for Networks ','N/A','FALSE','EC2AMAZ-AF914F1','FALSE','2019','DO_NOT_PATCH','FALSE'),(24,'508611289386','i-0710742080cd0f28f','AW2CORPCAT01','us-west-2','Ec2','Non-compliant','AW2CORPCAT01','Subordinate Certificate Server','Test','beth.trout@jackinthebox.com','Certificate Manager server','N/A','FALSE','N/A','FALSE','2019','DO_NOT_PATCH','FALSE'),(25,'508611289386','i-0bbeac3bc890a2195','AW2RAT01V','us-west-2','Ec2','Non-compliant','AW2RAT01V','Root Certificate Server','Test','beth.trout@jackinthebox.com','Root certificate server','N/A','FALSE','N/A','FALSE','2019','DO_NOT_PATCH','FALSE'),(26,'508611289386','i-0887e879bca534cef','AW2ADMGRT02','us-west-2','Ec2','Non-compliant','AW2ADMGRT02','ADManager Plus and ADAudit Plus','Test','michelle.watson@jackinthebox.com','AD Manager server','N/A','True','AW2ADMGRT02','True','2019','DO_NOT_PATCH','FALSE'),(27,'508611289386','i-0c502552f5fec2fb7','aws-tools-v1','us-west-2','Ec2','Non-compliant','aws-tools-v1','aws-tools','Test','sherri.conrod@jackinthebox.com','AWS','N/A','FALSE','N/A','FALSE','Linux','DO_NOT_PATCH','FALSE'),(28,'508611289386','i-0ed828f9d52cc16e9','awszabbproxt01','us-west-2','Ec2','Non-compliant','awszabbproxt01','Test-Server','Test','viktor.todorov@jackinthebox.com','Test server ','N/A','FALSE','N/A','FALSE','Linux','DO_NOT_PATCH','FALSE'),(29,'508611289386','i-0e2513ce45f119a7f','Sailpoint Test Server','us-west-2','Ec2','Non-compliant','Sailpoint Test Server','Sailpoint-Test','Test','michelle.watson@jackinthebox.com','Test server for Sailpoint','N/A','FALSE','AW2SECADMINT01','FALSE','2019','DO_NOT_PATCH','FALSE'),(30,'508611289386','i-077f6b101d097c19f','AW2NWAT01','us-west-2','Ec2','Non-compliant','AW2NWAT01','N/A','Test','mike.ritchey@jackinthebox.com','N/A','N/A','FALSE','AW2NWAT01','FALSE','2008','DO_NOT_PATCH','FALSE'),(31,'508611289386','i-089f8bb4c205bf9b5','AW2PRINTSVRT04','us-west-2','Ec2','Non-compliant','AW2PRINTSVRT04','Print-Server','Test','rudy.prado@jackinthebox.com','Print server','N/A','FALSE','N/A','FALSE','2012','DO_NOT_PATCH','FALSE'),(32,'508611289386','i-06a5a38c8ef67b0e9','ManageEngine Audit+ Security & Access Reporting System - from backup 03/05','us-west-2','Ec2','Non-compliant','ManageEngine Audit+ Security & Access Reporting System - from backup 03/05','Reporting server','Test','michelle.watson@jackinthebox.com','Backup server','N/A','FALSE','AW2ADMGRT01','FALSE','2012','DO_NOT_PATCH','FALSE'),(33,'508611289386','i-028309275ec075370','OCS Grapics','us-west-2','Ec2','Non-compliant','OCS Grapics','OCS Grapics','Test','Simeon.brett@jackinthebox.com','Graphics server','N/A','FALSE','AW2OCSGRAT02','FALSE','2019','DO_NOT_PATCH','FALSE'),(34,'508611289386','i-0f1a1f1e213b7edc4','Scheduler Testing','us-west-2','Ec2','Non-compliant','Scheduler Testing','Scheduler','Test','N/A','Scheduler server','N/A','FALSE','N/A','FALSE','N/A','DO_NOT_PATCH','FALSE'),(35,'508611289386','i-02e2c77605c0868dc','Storage Gateway 3 Vista Solution','us-west-2','Ec2','Non-compliant','Storage Gateway 3 Vista Solution','Storage Vista Solution','Test','N/A','Storage Gateway Applicance','N/A','FALSE','N/A','FALSE','Linux','DO_NOT_PATCH','FALSE'),(36,'508611289386','i-0ef09398ab5d82be5','BoFA-Test-1-140','us-west-2','Ec2','Non-compliant','BoFA-Test-1-140','BoFA','Test','Shane.miller@jackinthebox.com','Test server','N/A','True','AWSEBSFTPT01V','FALSE','Linux','DO_NOT_PATCH','FALSE'),(37,'508611289386','i-024b17de2e36e3a72','aw2zabbixappt01-old','us-west-2','Ec2','Non-compliant','aw2zabbixappt01-old','Zabbix-server','Test','Vivek.Saraswat@jackinthebox.com','Zabbix server','N/A','FALSE','N/A','FALSE','N/A','DO_NOT_PATCH','FALSE'),(38,'508611289386','i-06389e90abab6624c','aw2zabbixdbt01','us-west-2','Ec2','Non-compliant','aw2zabbixdbt01','Zabbix-server','Test','Vivek.Saraswat@jackinthebox.com','Zabbix server','N/A','FALSE','aw2zabbixdbt01','FALSE','N/A','DO_NOT_PATCH','FALSE'),(39,'508611289386','i-0f68cfefad341998c','Storage Gateway - test-corpsys-sgw-new','us-west-2','Ec2','Non-compliant','Storage Gateway - test-corpsys-sgw-new','Storage Gateway','Test','N/A','Storage Gateway Applicance','N/A','FALSE','N/A','FALSE','2019','DO_NOT_PATCH','FALSE'),(40,'508611289386','i-0f3027f35e25e0fb0','BofA-Test-2','us-west-2','Ec2','Non-compliant','BofA-Test-2','BofA','Test','Shane.miller@jackinthebox.com','BofA Application','N/A','FALSE','AWSEBSFTPT02V','FALSE','Linux','DO_NOT_PATCH','FALSE'),(41,'508611289386','i-06a9eb308523c73a1','AW2SGWSQLT02','us-west-2','Ec2','Non-compliant','AW2SGWSQLT02','N/A','Test','N/A','N/A','N/A','True','AW2SGWSQLT02','True','Linux','DO_NOT_PATCH','FALSE'),(42,'508611289386','i-0a4391d943ae6cb10','AW2ZABAPPT01','us-west-2','Ec2','Non-compliant','AW2ZABAPPT01','N/A','Test','N/A','N/A','N/A','FALSE','AW2ZABAPPT01','FALSE','Linux','DO_NOT_PATCH','FALSE'),(43,'282902823755','i-0a481c1558630c31c','DTS','us-west-2','Ec2','Non-compliant','DTS','DTS','Test','Ben.Pierce@jackinthebox.com','DTS Application server','CSDTSAPLT01V','True','AW2DTSAPLT01','True','2019','PHASE1','FALSE'),(44,'282902823755','i-0842d7781c0bfc5e5','Cash and Sales','us-west-2','Ec2','Non-compliant','Cash and Sales','Cash and Sales','Test','mike.ritchey@jackinthebox.com','Cash and Sales Application server','CSCASHSLST01V','True','AW2CASHSLST01','True','2019','PHASE1','FALSE'),(45,'282902823755','i-0acb1d05ad61af210','Data Control Add On','us-west-2','Ec2','Non-compliant','Data Control Add On','Data Control Add On','Test','don.yager@jackinthebox.com','Data Control Add On server','CSJACKOPSP01V','True','AW2JACKOPST01','True','2019','PHASE1','FALSE'),(46,'282902823755','i-03fa3ebd3c5c5a96e','Labor Management Daily Process','us-west-2','Ec2','Non-compliant','Labor Management Daily Process','Labor Management Daily Process','Test','bonnie.prokop@jackinthebox.com','Daily Management server','N/A','True','AW2LMSDLYT02','True','2019','PHASE1','FALSE'),(47,'282902823755','i-0c3202e817a128925','SSRS','us-west-2','Ec2','Non-compliant','SSRS','SSRS','Test','mike.ritchey@jackinthebox.com','-','SSRSPROD','True','AW2SSRST01','True','2019','PHASE1','FALSE'),(48,'282902823755','i-0e69728eae249e866','Labor Management Analysis','us-west-2','Ec2','Non-compliant','Labor Management Analysis','Labor Management Analysis','Test','bonnie.prokop@jackinthebox.com','Analytic server for Labor Management','N/A','True','AW2LBRMGMTT01','True','2019','PHASE1','FALSE'),(49,'282902823755','i-0988eaee633e32de4','Test-entsys Storage Gateway Host','us-west-2','Ec2','Non-compliant','Test-entsys Storage Gateway Host','Test-entsys Storage Gateway Host','Test','N/A','Storage Gateway Appliance','N/A','False','ip-10-4-37-228','False','Linux','DO_NOT_PATCH','False'),(50,'282902823755','i-0c872b7e47822c467','IIS Web Tools','us-west-2','Ec2','Non-compliant','IIS Web Tools','IIS Web Tools','Test','Simeon.Brett@jackinthebox.com','Web Tools server','N/A','True','AW2ENTWEBT01','True','2019','PHASE1','FALSE'),(51,'282902823755','i-0186a27919c512e57','Baby AD Mgmt (test-entsys.jitbcloud.net)','us-west-2','Ec2','Non-compliant','Baby AD Mgmt (test-entsys.jitbcloud.net)','Baby AD Mgmt (test-entsys.jitbcloud.net)','Test','cloud.migration@jackinthebox.com','AD Server','N/A','False','N/A','False','Windows','DO_NOT_PATCH','FALSE'),(52,'282902823755','i-0bf0d33dcd53deee5','SFTP Testing Server','us-west-2','Ec2','Non-compliant','SFTP Testing Server','SFTP Testing Server','Test','N/A','Test server for SFTP','N/A','False','EC2AMAZ-31U16O9','False','2019','DO_NOT_PATCH','FALSE'),(53,'282902823755','i-083e34c13448d8b60','AMI-new-2019','us-west-2','Ec2','Non-compliant','AMI-new-2019','AMI-new-2019','Test','sysops-aws@jackinthebox.com','Windows 2019 AMI server','N/A','False','N/A','False','2019','DO_NOT_PATCH','FALSE'),(54,'282902823755','i-0e98e6b7aedc76d39','AMI-2016','us-west-2','Ec2','Non-compliant','AMI-2016','AMI-2016','Test','sysops-aws@jackinthebox.com sysops-aws@jackinthebox.com','Windows 2016 AMI server','N/A','False','N/A','False','2016','DO_NOT_PATCH','FALSE'),(55,'282902823755','i-0742e40d67b9e868f','test-entsys-gateway-NEW','us-west-2','Ec2','Non-compliant','test-entsys-gateway-NEW','test-entsys-gateway-NEW','Test','N/A','Storage Gateway Appliance','N/A','False','N/A','False','Linux','DO_NOT_PATCH','FALSE'),(56,'282902823755','i-01a83403bc50c4357','CIS_Windows2019_AMI','us-west-2','Ec2','Non-compliant','CIS_Windows2019_AMI','CIS_Windows2019_AMI','Test','sysops-aws@jackinthebox.com','Windows 2019 AMI server with CIS security','N/A','False','N/A','False','2019','DO_NOT_PATCH','FALSE'),(58,'282902823755','i-08644e8f09865179b','AW2DEVTESTT01','us-west-2','Ec2','Non-compliant','AW2DEVTESTT01','AW2DEVTESTT01','Test','Simeon.Brett@jackinthebox.com','Devlopment Server','N/A','False','AW2DEVTESTT01','False','2019','DO_NOT_PATCH','FALSE'),(101,'282902823755','i-04aee62c6db9eb6ab','CIS_AmazonLinux_2','us-west-2','Ec2','Non-Compliant',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tag_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_template`
--

DROP TABLE IF EXISTS `tag_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_template` (
  `id` int NOT NULL,
  `resource_type` varchar(124) DEFAULT NULL,
  `tag_type` varchar(128) NOT NULL,
  `tag_name` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_template`
--

LOCK TABLES `tag_template` WRITE;
/*!40000 ALTER TABLE `tag_template` DISABLE KEYS */;
INSERT INTO `tag_template` VALUES (0,'Ec2','Name','Name'),(0,'Ec2','Name of Application','Application Name'),(0,'Ec2','Resource Environment','Environment'),(0,'Ec2','Application Owner Email','Application Owner'),(0,'Ec2','Resource purpose','Function'),(0,'Ec2','Legacy Resource Hostname ','Previous Hostname'),(0,'Ec2','Backup','DailyBackup'),(0,'Ec2','AWS Hostname','Hostname'),(0,'Ec2','Backup','MonthlyBackup'),(0,'Ec2','Operating System','OS'),(0,'Ec2','SSM Patching','Patch Group'),(0,'Ec2','Replication in us-east-1','DR Replication');
/*!40000 ALTER TABLE `tag_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_reg` (
  `id` int NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `user_role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_reg`
--



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-03 20:42:58
