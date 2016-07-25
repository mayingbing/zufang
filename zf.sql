
DROP TABLE IF EXISTS  `zf_user`;
CREATE TABLE `zf_user` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(50) NOT NULL  COMMENT '用户名',
  `password` varchar(50) NOT NULL  COMMENT '密码',
  `phone` varchar(20) NOT NULL COMMENT '手机号',
  `realname` varchar(50) DEFAULT NULL  COMMENT '真实姓名',
  `idtype` tinyint(11) DEFAULT '1' COMMENT '证件类型',
  `idnumber`  varchar(50)  DEFAULT NULL COMMENT '证件号',

  
  `logintime` int(11) NOT NULL COMMENT '登陆时间',
  `ipaddress` varchar(20) NOT NULL COMMENT '登陆ip',
  `type` tinyint(11) NOT NULL COMMENT '0 租客   1 房东',
  
  PRIMARY KEY (`userid`),
  KEY `username` (`username`) COMMENT '用户名',
  KEY `phone` (`phone`) COMMENT '手机号码'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_user_wallet`;
CREATE TABLE `zf_user_wallet` (
	
  `walletid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userid` int(11) unsigned NOT NULL  COMMENT '用户id',
  `mainbalance` int(11) unsigned DEFAULT '0'  COMMENT '主钱包',
  
  
  PRIMARY KEY (`walletid`),
  KEY `userid` (`userid`) COMMENT '用户id'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_house`;
CREATE TABLE `zf_house` (
  `houseid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `ownerid` int(11) NOT NULL  COMMENT '房东id',
 
  `roomtype` tinyint(5) DEFAULT '1' COMMENT '户型',
  `renttype` tinyint(5)  DEFAULT '0' COMMENT '出租形式',
  `roomid` varchar(20) DEFAULT NULL COMMENT '出租房间号、默认空为整租',
  
  `description` TEXT DEFAULT NULL COMMENT '房屋描述',
  `house_attr_id` int(11) DEFAULT NULL COMMENT '房屋配置',
  
  PRIMARY KEY (`houseid`),
  KEY `ownerid` (`ownerid`) COMMENT '用户名',
  KEY `house_attr_id` (`house_attr_id`) COMMENT '手机号码'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS  `zf_houseattr`;
CREATE TABLE zf_houseattr(
  `house_attr_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `house_attr` TEXT  DEFAULT NULL COMMENT '房屋配置',
  
  PRIMARY KEY (`house_attr_id`)

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS  `zf_rentrecord`;
CREATE TABLE `zf_rentrecord` (
  `rentid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `houseid` int(11) NOT NULL  COMMENT '房子id',
  `roomid` int(11) DEFAULT NULL  COMMENT '房间号',
  `renterid` int(11) NOT NULL  COMMENT '租客ID',
  `status` tinyint(5) DEFAULT '0' COMMENT '房屋出租状态',
  `price` int(11) DEFAULT NULL  COMMENT '房子租金',
	`rentstartdata` int(11) NOT NULL COMMENT '出租开始时间',
	`rentenddata` int(11) NOT NULL COMMENT '出租结束时间',
	`chargetype` varchar(50)  NOT NULL COMMENT '收租方式',
	`chargedate` int(11) NOT NULL COMMENT '收租时间',
	`chargeinterval` tinyint(5) DEFAULT '0' COMMENT '收租间隔',
	`hascharged` tinyint(5) DEFAULT '0' COMMENT '本期是否已收租金',
	
  `remark` TEXT DEFAULT NULL  COMMENT '备注',
  
  PRIMARY KEY (`rentid`),
  KEY `houseid` (`houseid`) COMMENT '房子id',
  KEY `renterid` (`renterid`) COMMENT '租客ID',
  KEY `status` (`status`) COMMENT '房屋出租状态',
  KEY `price` (`price`) COMMENT '房子租金'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_paymentrecord`;
CREATE TABLE `zf_paymentrecord` (
  `paymentrecord_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `Paymentid` int(11) NOT NULL  COMMENT '流水号',
  `userid` int(11) NOT NULL  COMMENT '支付人id',
  `amount` int(11) NOT NULL  COMMENT '交易金额',
   `status` tinyint(5) DEFAULT '0' COMMENT '交易状态',
   `PaymentType` varchar(50)  NOT NULL COMMENT '支付方式：支付宝，银联。。',
   `paydata` int(11) NOT NULL COMMENT '交易时间',
   
  
  PRIMARY KEY (`paymentrecord_id`),
  KEY `Paymentid` (`Paymentid`) COMMENT '流水号',
  KEY `userid` (`userid`) COMMENT '支付人id',
  KEY `status` (`status`) COMMENT '交易状态'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `zf_transfer_record`;
CREATE TABLE `zf_transfer_record` (
  `transfer_record_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `from_userid` int(11) NOT NULL  COMMENT '支付人id',
  `to_userid` int(11) NOT NULL  COMMENT '收款人id',
  `rentid` int(11) NOT NULL  COMMENT '相应租房记录id',
  `amount` int(11) NOT NULL  COMMENT '交易金额',
   `status` tinyint(5) DEFAULT '0' COMMENT '交易状态',

   `paydata` int(11) NOT NULL COMMENT '交易时间',
   
  
  PRIMARY KEY (`transfer_record_id`),
  KEY `rentid` (`rentid`) COMMENT '租房记录',

  KEY `status` (`status`) COMMENT '交易状态'

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;









