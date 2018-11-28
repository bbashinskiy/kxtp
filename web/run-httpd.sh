#!/bin/bash

svn export https://github.com/bbashinskiy/kxtp/trunk/web/kxtp /var/www/html --force &&\

chmod 777 /var/www/html/cache && \
chown -Rf apache:apache /var/www/html/*

exec /usr/sbin/apachectl -DFOREGROUND

