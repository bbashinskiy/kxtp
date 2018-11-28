FROM centos
MAINTAINER generydey@gmai.com

RUN yum -y --setopt=tsflags=nodocs update && \
    yum -y --setopt=tsflags=nodocs install httpd && \
    yum -y --setopt=tsflags=nodocs install php php-mysql php-gd php-mbstring php-xml && \
    yum -y --setopt=tsflags=nodocs install svn && \
    yum clean all

ADD run-httpd.sh /run-httpd.sh
RUN chmod +x /run-httpd.sh

EXPOSE 80

CMD ["/run-httpd.sh"]
