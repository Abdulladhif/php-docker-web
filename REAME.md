Creating full stack PHP web app with Mysql databae and phpmyadmin using docker continers.

Requirements:

- Docker

Steps 1: clone the reposity

- `git clone`

Step 2:

- `cd php-docker-web`

Step 3: to run the app

- `docker-compose up`
- `docker-compose up -d` (to run in background)
- `docker-compose down` (to stop the app)
- `docker-compose down --volumes` (to stop the app and remove the volumes)
- `docker-compose down --rmi all` (to stop the app and remove the images)
