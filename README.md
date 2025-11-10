# CRUD_basico_com_PHP_e_MySQL

Este é um projeto simples para demonstrar as operações básicas de um CRUD (Create, Read, Update, Delete) utilizando PHP procedural com a extensão MySQLi e um banco de dados MySQL. O foco principal é ilustrar a busca de dados (Read) e a importância da segurança contra ataques de SQL Injection.

## ✨ Tecnologias Utilizadas

- **PHP**: Linguagem de script do lado do servidor.
- **MySQL**: Sistema de gerenciamento de banco de dados.
- **MySQLi**: Extensão do PHP para acesso ao banco de dados MySQL.
- **Ambiente de Servidor Local**: XAMPP, WAMP, MAMP ou similar.

## 🚀 Funcionalidades

- Conexão com banco de dados MySQL utilizando a extensão `MySQLi`.
- Script para criação do banco de dados (`bd_crud`) e da tabela `usuarios` (`database.sql`).
- Exemplo de consulta vulnerável a **SQL Injection** (comentado no código para fins didáticos).
- Implementação de consulta segura utilizando **Prepared Statements** para prevenir SQL Injection.
- Listagem de dados do banco.

## ⚙️ Como Executar o Projeto

1.  **Pré-requisitos:**
    - Ter um ambiente de servidor local como o XAMPP instalado e em execução (com Apache e MySQL iniciados).

2.  **Clone o Repositório:**
    ```bash
    git clone <url-do-seu-repositorio>
    ```

3.  **Configure o Banco de Dados:**
    - Abra o seu gerenciador de banco de dados (como o phpMyAdmin, que vem com o XAMPP).
    - Importe o arquivo `database.sql` para criar o banco de dados `bd_crud`, a tabela `usuarios` e popular com dados de exemplo.

4.  **Mova os Arquivos:**
    - Mova a pasta do projeto para o diretório raiz do seu servidor web (geralmente `htdocs` no XAMPP).

5.  **Acesse no Navegador:**
    - Abra seu navegador e acesse `http://localhost/CRUD_basico_com_PHP_e_MySQL/`.
    - Você verá o resultado da busca pelo usuário "Patrícia Castro".

## 📖 Destaques do Código

O arquivo `index.php` demonstra duas formas de realizar uma consulta ao banco de dados:

1.  **Método Inseguro (Vulnerável a SQL Injection)** - *Comentado no código*
    A query é construída concatenando diretamente a variável, o que abre uma brecha de segurança.

2.  **Método Seguro (com Prepared Statements)** - *Implementado no código*
    Utiliza `prepare()`, `bind_param()` e `execute()` para tratar os dados de entrada, garantindo que eles não sejam interpretados como comandos SQL e prevenindo ataques.
