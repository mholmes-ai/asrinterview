CREATE TABLE IF NOT EXISTS test_list (           
  number_id INT AUTO_INCREMENT,
  content varchar(255) NOT NULL
  PRIMARY KEY(number_id)  
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8;         
  INSERT INTO test_list(content) VALUES('If you can see this');
  INSERT INTO test_list(content) VALUES('It works!')