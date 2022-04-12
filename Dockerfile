FROM php:7.4-cli AS php_with_docker
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
    apt-get -qy full-upgrade && \
    apt-get install -qy curl && \
    apt-get install -qy curl && \
    curl -sSL https://get.docker.com/ | sh
FROM php_with_docker
COPY ./www /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:8080" ] 
