CREATE DATABASE teste_backend;

CREATE TABLE noticias (
	`id` int(10) NOT NULL auto_increment,
    `data` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `url_noticia` varchar (250),
    `titulo` varchar (250),
    `conteudo` longtext,
    `isUsed` int (1) default 1    
    ); 
