-- Database: crud

-- DROP DATABASE crud;

CREATE DATABASE crud
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
		CREATE TABLE users (
	user_id SERIAL PRIMARY KEY,
	nome VARCHAR ( 50 ) NOT NULL,
	sexo VARCHAR ( 20 ) NOT NULL,
	telefone VARCHAR ( 20 ) NOT NULL,
	cpf VARCHAR ( 50 ) NOT NULL,
	email VARCHAR ( 255 ) NOT NULL,
        last_login TIMESTAMP 
)
