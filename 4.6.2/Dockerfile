FROM adminer:4.6.2
MAINTAINER WPLib Team <team@wplib.org>

USER root

RUN apk update && \
	apk add --no-cache bash shadow

COPY container.json /etc/container.json
COPY files /

USER	adminer
CMD	[ "php", "-S", "[::]:8080", "-t", "/var/www/html" ]

EXPOSE 8081
