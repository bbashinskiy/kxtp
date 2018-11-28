FROM centos
MAINTAINER generydey@gmail.com

RUN yum -y update && \
    yum -y install mariadb-server mariadb && \
    yum clean all

ADD kxtp.sql /tmp
ADD config-db.sh /tmp

RUN chmod +x /tmp/config-db.sh && /tmp/config-db.sh

VOLUME /var/lib/mysql

EXPOSE 3306

CMD ["mysqld_safe"]
