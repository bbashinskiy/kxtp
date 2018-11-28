FROM centos
MAINTAINER generydey@gmai.com

ENV LC_CTYPE=en_US.UTF-8

RUN yum -y --setopt=tsflags=nodocs update && \
    yum -y --setopt=tsflags=nodocs install httpd && \
    yum -y --setopt=tsflags=nodocs install php php-mysql php-gd php-mbstring php-xml && \
    yum -y --setopt=tsflags=nodocs install svn && \
    yum clean all

ADD run-httpd.sh /run-httpd.sh
ADD kxtp.conf /etc/httpd/conf.d/kxtp.conf

RUN chmod +x /run-httpd.sh

EXPOSE 80

CMD ["/run-httpd.sh"]
