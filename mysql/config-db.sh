#!/bin/bash

mysql_install_db
chown -R mysql:mysql /var/lib/mysql
/usr/bin/mysqld_safe & 
sleep 10
mysqladmin -u root password admingenerydey
mysql -uroot -padmingenerydey -e "CREATE DATABASE kxtfkpiua"
mysql -uroot -padmingenerydey -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'admingenerydey' WITH GRANT OPTION; FLUSH PRIVILEGES;"
mysql -uroot -padmingenerydey kxtfkpiua < /tmp/kxtp.sql
mysqladmin -uroot -padmingenerydey shutdown
