CREATE DATABASE id18842383_db_login;

CREATE TABLE IF NOT EXISTS users (
    user_id int(11) NOT NULL AUTO_INCREMENT,
    user_name varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL,
    user_date date NOT NULL,
    user_mensagem varchar(255) NOT NULL,
    active int(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (user_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1
AUTO_INCREMENT = 1;