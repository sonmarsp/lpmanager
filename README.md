<h1 align="center"> lpmanager

<h3> Cloning a project from Git Hub

<h3> Cloning a project from Git Hub

<h3> Go to the project directory and collect images</h3>

```bash
sudo docker-compose build
```

<h3> Launch containers</h3>

```bash
sudo docker-compose up -d
```

<h3> Run the PHP composer console command in the container to collect PHP dependencies for Laravel</h3>

```bash
sudo docker exec php-fpm-lar1 composer about
sudo docker exec php-fpm-lar1 composer install
```
