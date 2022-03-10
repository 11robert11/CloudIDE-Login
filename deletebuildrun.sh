docker build . --tag login; docker rm -f login; docker run -d --name login -p 8080:8080 login
