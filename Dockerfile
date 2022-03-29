FROM php:7.4-cli AS php_docker
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
	apt-get -qy full-upgrade && \
	apt-get install -qy docker
FROM php_docker
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:8080" ] 
