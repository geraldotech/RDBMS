# mysql

navigate to the bin folder of your MySQL Server installation directory

- connect to the MySQL console:

  - `mysql -u -p` | XAMPP ? open Terminal in `C:\xampp\mysql\bin>mysql -u root -p`

- List all users:

  - `SELECT User FROM mysql.user;`

- DATABASES

  - create a new database
    - `CREATE DATABASE example_database;`
  - Show databases
    - `SHOW DATABASES;`
  - Delete
    - `DROP DATABASE <name>;`
  - Select
    - `USE <name>`
  - List tables from selected DATABASE
    - `SHOW TABLES;` or `SHOW FULL TABLES;`
  - Delete record
    - `DELETE FROM <tablename> WHERE item_id='8';`

- Now give this user permission over the example_database database:

  - `GRANT ALL ON example_database.\* TO 'example_user'@'%';`

# Examples tables:

### CREATE A TABELA A SEGUIR:

```sql
ID: INT AUTO_INCREMENT
NOME:
CPF:
EMAIL: UNIQUE
```

### CREATE TABLE:

- `CREATE TABLE Users.cadastros (person_id INT AUTO_INCREMENT, NOME VARCHAR(255), EMAIL VARCHAR(190) UNIQUE, CPF VARCHAR(12), PRIMARY KEY(person_id));`  

### INSERT

- `INSERT INTO Users.cadastros (NOME, EMAIL, CPF) VALUES ("GERALDO COSTA FILHO", "geraldo.filho@geraldo.com", "1234567890-1");`

- Adicionando nova columa "LIMITE" a tabela existente:

- `ALTER TABLE cadastros ADD LIMITE VARCHAR(100);`

Com `SELECT * FROM cadatros;` vai notar que os usuarios anteriores nao tem limite, agora vamos adicionar limite por condição, mostrar columa especifica `SELECT NOME FROM cadastros;`

- `UPDATE cadastros set LIMITE = '1000' WHERE person_id = '3'`

e atualizando email do usuário:

- `UPDATE cadastros set EMAIL = 'felipe@live.com' WHERE person_id = '3';`

Adicionando CLIENTE_DESTE:
- `ALTER TABLE cadastros ADD CLIENTE_DESTE TIMESTAMP NOT NULL;`

Agora nosso INSERT padrão: 

- `INSERT INTO Users.cadastros (NOME, EMAIL, CPF, LIMITE) VALUES ("ISABELLA COSTA", "isabella.filho@geraldo.com", "1234567890-1", "0.00")`

- Adicionar table and check data [https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04)
