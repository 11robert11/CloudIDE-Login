#! /bin/bash
docker build . --tag login
docker rm -f login
docker run $1 --name login -p 8080:8080 -v /var/run/docker.sock:/var/run/docker.sock login
