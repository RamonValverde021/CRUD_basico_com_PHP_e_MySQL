#Criando o banco de dados
CREATE DATABASE IF NOT EXISTS bd_crud DEFAULT 
CHARACTER SET utf8 
DEFAULT COLLATE utf8_general_ci;

#Criando a tabela Usuarios
USE bd_crud;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    idade TINYINT(30) UNSIGNED NOT NULL,
    sexo VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    cidade VARCHAR(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

#Inserindo valores em Usuarios
USE bd_crud;
INSERT INTO usuarios VALUES
(DEFAULT, 'Gustavo Gabriel', '42', 'Masculino', 'gustavoguanabara@gmail.com', 'São Paulo'),
(DEFAULT, 'Ana Silva', '28', 'Feminino', 'ana.silva@example.com', 'Rio de Janeiro'),
(DEFAULT, 'Bruno Costa', '35', 'Masculino', 'bruno.costa@example.com', 'Salvador'),
(DEFAULT, 'Carla Dias', '22', 'Feminino', 'carla.dias@example.com', 'Belo Horizonte'),
(DEFAULT, 'Daniel Martins', '45', 'Masculino', 'daniel.martins@example.com', 'Fortaleza'),
(DEFAULT, 'Eduarda Oliveira', '31', 'Feminino', 'eduarda.oliveira@example.com', 'Brasília'),
(DEFAULT, 'Felipe Pereira', '29', 'Masculino', 'felipe.pereira@example.com', 'Curitiba'),
(DEFAULT, 'Gabriela Santos', '38', 'Feminino', 'gabriela.santos@example.com', 'Manaus'),
(DEFAULT, 'Heitor Rodrigues', '50', 'Masculino', 'heitor.rodrigues@example.com', 'Recife'),
(DEFAULT, 'Isabela Ferreira', '25', 'Feminino', 'isabela.ferreira@example.com', 'Porto Alegre'),
(DEFAULT, 'João Alves', '33', 'Masculino', 'joao.alves@example.com', 'Goiânia'),
(DEFAULT, 'Larissa Lima', '27', 'Feminino', 'larissa.lima@example.com', 'Belém'),
(DEFAULT, 'Marcos Souza', '41', 'Masculino', 'marcos.souza@example.com', 'São Luís'),
(DEFAULT, 'Natália Barbosa', '24', 'Feminino', 'natalia.barbosa@example.com', 'Maceió'),
(DEFAULT, 'Otávio Ribeiro', '36', 'Masculino', 'otavio.ribeiro@example.com', 'Teresina'),
(DEFAULT, 'Patrícia Castro', '30', 'Feminino', 'patricia.castro@example.com', 'Natal'),
(DEFAULT, 'Rafael Azevedo', '26', 'Masculino', 'rafael.azevedo@example.com', 'Campo Grande'),
(DEFAULT, 'Sofia Correia', '39', 'Feminino', 'sofia.correia@example.com', 'João Pessoa'),
(DEFAULT, 'Thiago Gomes', '48', 'Masculino', 'thiago.gomes@example.com', 'Aracaju'),
(DEFAULT, 'Vanessa Rocha', '32', 'Feminino', 'vanessa.rocha@example.com', 'Florianópolis');
SELECT * FROM usuarios;