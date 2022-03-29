FROM php:7.4-cli AS php_docker
RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install docker

FROM php_docker
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:8080" ] 
