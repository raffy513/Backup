

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

INSERT INTO messages VALUES("98","5","","","qweqwe");



;




CREATE TABLE `order_details` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` double(11,2) NOT NULL,
  `productID` int(11) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `modeofpayment` varchar(100) NOT NULL,
  `transaction_code` varchar(200) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO order_details VALUES("1","1","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("2","1","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("3","1","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("4","4","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("5","4","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("6","3","1","1512.00","1","1512.00","Pending","","");
INSERT INTO order_details VALUES("7","4","11","1512.00","1","16632.00","Pending","","");



CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO products VALUES("1","IncredibleHulk","Hulk.jpg","300");
INSERT INTO products VALUES("2","DeadPool","Deadpool.jpg","100");
INSERT INTO products VALUES("3","IronMan","IronMan.jpg","150");
INSERT INTO products VALUES("4","Dr Strange","DrStrange.jpg","500");



CREATE TABLE `tb_member` (
  `memberID` int(25) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Contact_Number` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tb_member VALUES("2","raffy","calawa","raffycalawa1@gmail.com","password","09108613601","baguio");
INSERT INTO tb_member VALUES("5","jeoben","agnaonao","j@gmail.com","pass","9120312313","baguio");



CREATE TABLE `tb_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(200) NOT NULL,
  `originated` varchar(500) NOT NULL,
  `price` double(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tb_products VALUES("1","wa","qweqwe","Guitar","qweqwe","1512.00","11","upload/Creative-Blazing-Guitar-HD-Wallpaper.jpg");
INSERT INTO tb_products VALUES("2","asdfasdf","asdfasd","Drums","adfadsf","123.00","123","upload/drumset.png");
INSERT INTO tb_products VALUES("3","asdfasdf","asdfasd","Drums","adfadsf","123.00","123","upload/drumset.png");



CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("1","admin","admin","Administrator","");

