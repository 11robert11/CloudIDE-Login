#! /bin/bash
docker build . --tag login
docker rm -f login
docker run $1 --name login -p 8080:8080 login
