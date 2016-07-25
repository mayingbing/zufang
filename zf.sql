
DROP TABLE IF EXISTS  `zf_user`;
CREATE TABLE `zf_user` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `username` varchar(50) NOT NULL  COMMENT '�û���',
  `password` varchar(50) NOT NULL  COMMENT '����',
  `phone` varchar(20) NOT NULL COMMENT '�ֻ���',
  `realname` varchar(50) DEFAULT NULL  COMMENT '��ʵ����',
  `idtype` tinyint(11) DEFAULT '1' COMMENT '֤������',
  `idnumber`  varchar(50)  DEFAULT NULL COMMENT '֤����',

  
  `logintime` int(11) NOT NULL COMMENT '��½ʱ��',
  `ipaddress` varchar(20) NOT NULL COMMENT '��½ip',
  `type` tinyint(11) NOT NULL COMMENT '0 ���   1 ����',
  
  PRIMARY KEY (`userid`),
  KEY `username` (`username`) COMMENT '�û���',
  KEY `phone` (`phone`) COMMENT '�ֻ�����'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_user_wallet`;
CREATE TABLE `zf_user_wallet` (
	
  `walletid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `userid` int(11) unsigned NOT NULL  COMMENT '�û�id',
  `mainbalance` int(11) unsigned DEFAULT '0'  COMMENT '��Ǯ��',
  
  
  PRIMARY KEY (`walletid`),
  KEY `userid` (`userid`) COMMENT '�û�id'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_house`;
CREATE TABLE `zf_house` (
  `houseid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `ownerid` int(11) NOT NULL  COMMENT '����id',
 
  `roomtype` tinyint(5) DEFAULT '1' COMMENT '����',
  `renttype` tinyint(5)  DEFAULT '0' COMMENT '������ʽ',
  `roomid` varchar(20) DEFAULT NULL COMMENT '���ⷿ��š�Ĭ�Ͽ�Ϊ����',
  
  `description` TEXT DEFAULT NULL COMMENT '��������',
  `house_attr_id` int(11) DEFAULT NULL COMMENT '��������',
  
  PRIMARY KEY (`houseid`),
  KEY `ownerid` (`ownerid`) COMMENT '�û���',
  KEY `house_attr_id` (`house_attr_id`) COMMENT '�ֻ�����'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS  `zf_houseattr`;
CREATE TABLE zf_houseattr(
  `house_attr_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `house_attr` TEXT  DEFAULT NULL COMMENT '��������',
  
  PRIMARY KEY (`house_attr_id`)

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS  `zf_rentrecord`;
CREATE TABLE `zf_rentrecord` (
  `rentid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `houseid` int(11) NOT NULL  COMMENT '����id',
  `roomid` int(11) DEFAULT NULL  COMMENT '�����',
  `renterid` int(11) NOT NULL  COMMENT '���ID',
  `status` tinyint(5) DEFAULT '0' COMMENT '���ݳ���״̬',
  `price` int(11) DEFAULT NULL  COMMENT '�������',
	`rentstartdata` int(11) NOT NULL COMMENT '���⿪ʼʱ��',
	`rentenddata` int(11) NOT NULL COMMENT '�������ʱ��',
	`chargetype` varchar(50)  NOT NULL COMMENT '���ⷽʽ',
	`chargedate` int(11) NOT NULL COMMENT '����ʱ��',
	`chargeinterval` tinyint(5) DEFAULT '0' COMMENT '������',
	`hascharged` tinyint(5) DEFAULT '0' COMMENT '�����Ƿ��������',
	
  `remark` TEXT DEFAULT NULL  COMMENT '��ע',
  
  PRIMARY KEY (`rentid`),
  KEY `houseid` (`houseid`) COMMENT '����id',
  KEY `renterid` (`renterid`) COMMENT '���ID',
  KEY `status` (`status`) COMMENT '���ݳ���״̬',
  KEY `price` (`price`) COMMENT '�������'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_paymentrecord`;
CREATE TABLE `zf_paymentrecord` (
  `paymentrecord_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `Paymentid` int(11) NOT NULL  COMMENT '��ˮ��',
  `userid` int(11) NOT NULL  COMMENT '֧����id',
  `amount` int(11) NOT NULL  COMMENT '���׽��',
   `status` tinyint(5) DEFAULT '0' COMMENT '����״̬',
   `PaymentType` varchar(50)  NOT NULL COMMENT '֧����ʽ��֧��������������',
   `paydata` int(11) NOT NULL COMMENT '����ʱ��',
   
  
  PRIMARY KEY (`paymentrecord_id`),
  KEY `Paymentid` (`Paymentid`) COMMENT '��ˮ��',
  KEY `userid` (`userid`) COMMENT '֧����id',
  KEY `status` (`status`) COMMENT '����״̬'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_transfer_record`;
CREATE TABLE `zf_transfer_record` (
  `transfer_record_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `from_userid` int(11) NOT NULL  COMMENT '֧����id',
  `to_userid` int(11) NOT NULL  COMMENT '�տ���id',
  `rentid` int(11) NOT NULL  COMMENT '��Ӧ�ⷿ��¼id',
  `amount` int(11) NOT NULL  COMMENT '���׽��',
   `status` tinyint(5) DEFAULT '0' COMMENT '����״̬',

   `paydata` int(11) NOT NULL COMMENT '����ʱ��',
   
  
  PRIMARY KEY (`transfer_record_id`),
  KEY `rentid` (`rentid`) COMMENT '�ⷿ��¼',

  KEY `status` (`status`) COMMENT '����״̬'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;









