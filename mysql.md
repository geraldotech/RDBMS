# mysql

- connect to the MySQL console:

  - `mysql -u -p`

- List all users:

  - `SELECT User FROM mysql.user;`

- DATABASES

  - create a new database
    - `CREATE DATABASE example_database;`
  - Show databases
    - `SHOW DATABASES;`
  - Delete
    - `DROP DATABASE <name>;`

- Now give this user permission over the example_database database:

  - `GRANT ALL ON example_database.\* TO 'example_user'@'%';`

- Adicionar table and check data [https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04)