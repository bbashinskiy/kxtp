#!/bin/bash

svn export https://github.com/bbashinskiy/kxtp/trunk/web/kxtp /var/www/kxtp.kpi.ua/htdocs --force &&\

chown -Rf apache:apache /var/www/kxtp.kpi.ua/htdocs/*

exec /usr/sbin/apachectl -DFOREGROUND

