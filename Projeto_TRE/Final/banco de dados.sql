CREATE TABLE Municipio ( 
 Municipio VARCHAR(100) PRIMARY KEY, 
 UF VARCHAR(2)
); 

CREATE TABLE Zona ( 
 Municipio VARCHAR(100),
 Zona INT,  
 PRIMARY Key (Municipio, Zona),
 FOREIGN KEY (Municipio) REFERENCES Municipio (Municipio)
); 

CREATE TABLE Secao ( 
 Municipio VARCHAR(100),
 Zona INT,
 Secao INT,
 PRIMARY KEY (Municipio, Zona, Secao),   
 FOREIGN KEY (Municipio,Zona) REFERENCES Zona (municipio,Zona)
); 

CREATE TABLE Eleitor (
 Municipio VARCHAR(100), 
 Zona INT,  
 Secao INT, 
 CPF VARCHAR(100),  
 RG VARCHAR(100),  
 Nome VARCHAR(200), 
 PRIMARY KEY (municipio,zona,secao,cpf),
 FOREIGN KEY (Municipio,Zona,Secao) REFERENCES Secao (Municipio,zona,Secao)
); 

CREATE TABLE Partido ( 
 Partido VARCHAR(100) PRIMARY KEY,    
 Sigla VARCHAR(100)
); 

CREATE TABLE Candidato (
 Municipio VARCHAR(100),  
 Partido VARCHAR(100), 
 Candidato VARCHAR(100),  
 Cargo VARCHAR(100),  
 PRIMARY KEY (municipio,partido,candidato),
 FOREIGN KEY(Municipio) REFERENCES Municipio (Municipio),
 FOREIGN KEY(Partido) REFERENCES Partido (Partido)
); 
