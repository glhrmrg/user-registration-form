CREATE SCHEMA bdd;
CREATE TABLE users (
	id serial PRIMARY KEY,
	name VARCHAR ( 50 ) UNIQUE NOT NULL,
	email VARCHAR ( 50 ) UNIQUE NOT NULL,
	funcao VARCHAR ( 255 ) UNIQUE NOT NULL,
	cpf VARCHAR ( 255 ) UNIQUE NOT NULL,
	status VARCHAR ( 255 ) UNIQUE NOT NULL,
	created_at VARCHAR ( 50 ) UNIQUE NOT NULL,
	updated_at VARCHAR ( 50 ) UNIQUE NOT NULL
);