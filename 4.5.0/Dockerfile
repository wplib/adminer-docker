FROM adminer:4.5.0
MAINTAINER WPLib Team <team@wplib.org>

USER root

RUN apk update && \
	apk add --no-cache bash shadow

COPY files /

USER	adminer
CMD	[ "php", "-S", "[::]:8080", "-t", "/var/www/html" ]

EXPOSE 8081
